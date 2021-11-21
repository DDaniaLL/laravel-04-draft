<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::firstOrCreate(
            ['title' => 'hero_title'],
            ['content' => 'This is a default title']
        );
        Setting::firstOrCreate(
            ['title' => 'hero_subtitle'],
            ['content' => 'This is a default subtitle']
        );
        Setting::firstOrCreate(
            ['title' => 'hero_image'],
            ['content' => 'https://via.placeholder.com/468x220?text=Hero+Image']
        );

        Setting::firstOrCreate(
            ['title' => 'about_content'],
            ['content' => 'This is a default about content']
        );
        Setting::firstOrCreate(
            ['title' => 'important_content'],
            ['content' => 'This is a default important contents']
        );
        Setting::firstOrCreate(
            ['title' => 'links_content'],
            ['content' => 'here are the default links']
        );

    }
}
