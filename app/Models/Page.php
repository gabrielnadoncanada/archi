<?php

namespace App\Models;

use App\Enums\PublishedStatus;
use App\Filament\Builder\Templates\Archive;
use App\Filament\Builder\Templates\Blog;
use App\Filament\Builder\Templates\Contact;
use App\Filament\Builder\Templates\Home;
use App\Filament\Builder\Templates\Products;
use App\Filament\Builder\Templates\Services;
use App\Filament\Builder\Templates\Single;
use App\Filament\Builder\Templates\Team;
use App\Settings\ThemeSettings;
use App\Traits\HasMeta;
use App\Traits\HasTemplate;
use Devlense\FilamentBuilder\Concerns\HasContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasContent;
    use HasFactory;
    use HasMeta;
    use HasTemplate;

    public const ID = 'id';

    public const TITLE = 'title';

    public const SLUG = 'slug';

    public const DESCRIPTION = 'description';

    public const IS_VISIBLE = 'is_visible';

    public const PUBLISHED_AT = 'published_at';

    public const IMAGE = 'image';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';


    protected $guarded = [];

    protected $casts = [
        'status' => PublishedStatus::class,
    ];

    public function scopePublished($query)
    {
        return $query->where('is_visible', '!=', false)
            ->where('published_at', '<=', now());
    }

    public function getRouteKeyName(): string
    {
        return filament()->isServing() ? 'id' : 'slug->' . app()->getLocale();
    }

    public function getBasePath(): string
    {
        return '/';
    }

    public function getPublicUrl()
    {
        return url()->to($this->getBasePath() . $this->slug . '/');
    }

    public function isHomePage(): bool
    {
        return app(ThemeSettings::class)->home_page_id == $this->id;
    }

//    public function isArchivePage(): bool
//    {
//        return app(ThemeSettings::class)->site_blog_page_id == $this->id
//            || app(ThemeSettings::class)->site_service_page_id == $this->id;
//    }

    public function isServicesPage(): bool
    {
        return theme('service_page_id') == $this->id;
    }

    public function template(): string
    {
        if ($this->slug == 'contact') {
            return Contact::class;
        }

        if ($this->slug == 'blogue') {
            return Blog::class;
        }

        if ($this->slug == 'equipes') {
            return Team::class;
        }

        if ($this->slug == 'products') {
            return Products::class;
        }

        if ($this->isHomePage()) {
            return Home::class;
        }

        if ($this->isServicesPage()) {
            return Services::class;
        }

        return Single::class;
    }


}
