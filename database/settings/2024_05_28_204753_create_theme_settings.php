<?php

use Illuminate\Support\Facades\Storage;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{

    public function up(): void
    {
        $social_links = [
            'facebook' => 'https://www.facebook.com/dilamco',
            'LI' => "https://ca.linkedin.com/in/sean-diffley-aaa8a749?original_referer=https%3A%2F%2Fwww.google.com%2F",
            'TW' => 'https://twitter.com/Dilamco',
        ];

        $this->migrator->add('theme.title', 'Dilamco');
        $this->migrator->add('theme.default_image', Storage::disk('public')->putFile(public_path('/images/default/slider.jpg')));
        $this->migrator->add('theme.home_page_id', 1);
        $this->migrator->add('theme.blog_page_id', 2);
        $this->migrator->add('theme.service_page_id', 3);
        $this->migrator->add('theme.project_page_id', 4);
        $this->migrator->add('theme.career_page_id', 5);
        $this->migrator->add('theme.team_page_id', 6);
        $this->migrator->add('theme.tag_line', 'Transform your Montreal home with Dilamco’s expert residential construction and renovation services. Quality craftsmanship you can trust.',);
        $this->migrator->add('theme.favicon', Storage::disk('public')->putFile(public_path('/images/default/favicon.png')));
        $this->migrator->add('theme.header_logo', Storage::disk('public')->putFile(public_path('/images/default/logo-minimal.svg')));
        $this->migrator->add('theme.footer_logo', Storage::disk('public')->putFile(public_path('/images/default/logo.svg')));
        $this->migrator->add('theme.header_menu_id', 1);
        $this->migrator->add('theme.footer_menu_id', 1);
        $this->migrator->add('theme.country', 'Canada');
        $this->migrator->add('theme.state', 'Québec');
        $this->migrator->add('theme.city', 'Pierrefonds');
        $this->migrator->add('theme.address', '18625 Rue Larocque, H9K 1P1');
        $this->migrator->add('theme.email', 'mireya.inbox@mail.com');
        $this->migrator->add('theme.phone', '514-820-0773');
        $this->migrator->add('theme.social_links', $social_links);
    }
};
