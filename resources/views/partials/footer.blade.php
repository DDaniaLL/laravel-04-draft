@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush


<footer class="footer has-background-primary">
    <div class="content has-text-centered has-text-white">
      <div class="container">
          <div class="columns">
            <div class="column">
             <h6>About Us</h6>
              {{-- <p class="has-text-center">
                <ul class="links-contact"> --}}
                    {{-- @foreach ($settings as $setting) --}}
                    {!! $settings->firstWhere('title', 'about_content')->content !!}
                {{-- @endforeach --}}
                    {{-- </ul>
              </p> --}}
            </div>
            <div class="column">
              <h6>Important</h6>
              <ul>
                <p>this is: {{ $settings->firstWhere('title', 'important_content')->content }}</p>
              </ul>
            </div>
            <div class="column">
              <h6>Support Links</h6>
              <ul>
                <p>this is: {{ $settings->firstWhere('title', 'links_content')->content }}</p>
              </ul>
            </div>
            <div class="column">
              <h6>Subscribe</h6>
              <div class="control has-icons-left has-icons-right">
                <input class="input is-medium" type="email" placeholder="Email">
                <span class="icon is-left">
                <i class="fa fa-envelope"></i>
                </span>
              </div>
              <a class="button is-success is-rounded">Subscribe</a>
            </div>
          </div>
      </div>
    </div>
  </footer>
