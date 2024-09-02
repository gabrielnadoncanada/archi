<?php

namespace App\Models\Blog;

use App\Enums\PublishedStatus;
use App\Filament\Builder\Templates\BlogPost;
use App\Filament\Builder\Templates\Single;
use App\Traits\HasMeta;
use Devlense\FilamentBuilder\Concerns\HasContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    use HasContent;
    use HasMeta;

    public const ID = 'id';

    public const TITLE = 'title';

    public const SLUG = 'slug';

    public const DESCRIPTION = 'description';

    public const PUBLISHED_AT = 'published_at';

    public const IS_VISIBLE = 'is_visible';

    public const IMAGE = 'image';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';
    public const GALLERY = 'gallery';

    /**
     * @var string
     */
    protected $guarded = [];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        self::GALLERY => 'array',
    ];

    protected $table = 'blog_posts';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'blog_category_post', 'blog_post_id', 'blog_category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_visible', '!=', false)
            ->where('published_at', '<=', now());
    }

    public function getBasePath(): string
    {
        return '/blogue/';
    }

    public function getPublicUrl()
    {
        return url()->to($this->getBasePath() . $this->slug . '/');
    }

    public function template(): string
    {
        return BlogPost::class;

    }
}
