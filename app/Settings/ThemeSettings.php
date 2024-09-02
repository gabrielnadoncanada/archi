<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ThemeSettings extends Settings
{
    public ?string $title;

    public ?string $tag_line;

    public ?string $home_page_id;
    public ?string $blog_page_id;
    public ?string $service_page_id;
    public ?string $project_page_id;
    public ?string $career_page_id;
    public ?string $team_page_id;

    public ?string $default_image;

    public $social_links;

    public ?string $favicon;

    public ?string $header_logo;
    public ?string $footer_logo;

    public ?string $header_menu_id;

    public ?string $footer_menu_id;

    public ?string $country;

    public ?string $state;

    public ?string $city;

    public ?string $address;

    public ?string $email;

    public ?string $phone;


    public static function group(): string
    {
        return 'theme';
    }


}
