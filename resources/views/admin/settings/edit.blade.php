@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Settings Page')])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.settings.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Hero Settings') }}</h4>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('New Hero Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('hero_title') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('hero_title') ? ' is-invalid' : '' }}"
                                                name="hero_title" id="input-title-ar" type="text"
                                                placeholder="{{ __('Title') }}"
                                                value="{{ old('hero_title', $settings->firstWhere('title', 'hero_title')->content) }}" />
                                            @if ($errors->has('hero_title'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('hero_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('New Hero Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('hero_subtitle') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('hero_subtitle') ? ' is-invalid' : '' }}"
                                                name="hero_subtitle" id="input-title-ar" type="text"
                                                placeholder="{{ __('Title') }}"
                                                value="{{ old('hero_subtitle', $settings->firstWhere('title', 'hero_subtitle')->content) }}" />
                                            @if ($errors->has('hero_subtitle'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('hero_subtitle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- upload images --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Change Hero image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="{{ $errors->has('hero_image') ? ' has-danger' : '' }}">
                                            <input class="{{ $errors->has('hero_image') ? ' is-invalid' : '' }}"
                                                name="hero_image" type="file" />
                                            @if ($errors->has('hero_image'))
                                                <span id="image-error" class="error text-danger"
                                                    for="input-image">{{ $errors->first('hero_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>

                        {{-- Footer Management --}}

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Footer Settings') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('About Us current info') }}</label>
                                    <div class="col-sm-7 "type="text">
                                        {!! old('about_content', $settings->firstWhere('title', 'about_content')->content) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('About Us update') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('about_content') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                name="about_content"
                                                placeholder="{{ __('About') }}"
                                                cols="30" rows="10">
                                                </textarea>
                                            </div>
                                            @if ($errors->has('about_content'))
                                                <span id="acontent-ar-error" class="error text-danger"
                                                    for="input-about-ar">{{ $errors->first('about_content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                {{-- important links --}}

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Important links current info') }}</label>
                                    <div class="col-sm-7 "type="text">
                                        {!! old('important_content', $settings->firstWhere('title', 'important_content')->content) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Important link update') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('important_content') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                name="important_content"
                                                placeholder="{{ __('About') }}"
                                                cols="30" rows="10">
                                                </textarea>
                                            </div>
                                            @if ($errors->has('important_content'))
                                                <span id="acontent-ar-error" class="error text-danger"
                                                    for="input-about-ar">{{ $errors->first('important_content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            {{-- support space --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Support current info') }}</label>
                                    <div class="col-sm-7 "type="text">
                                        {!! old('links_content', $settings->firstWhere('title', 'links_content')->content) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Support space update') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('links_content') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                name="links_content"
                                                placeholder="{{ __('About') }}"
                                                cols="30" rows="10">
                                                </textarea>
                                            </div>
                                            @if ($errors->has('links_content'))
                                                <span id="acontent-ar-error" class="error text-danger"
                                                    for="input-about-ar">{{ $errors->first('links_content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
