<?php

namespace App\Models\Product;

use App\Filament\Builder\Templates\Home;
use App\Filament\Builder\Templates\Products;
use App\Filament\Builder\Templates\Single;
use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory;
    use HasMeta;
    use HasTags;


    public const ID = 'id';

    public const TITLE = 'title';

    public const SLUG = 'slug';

    public const DESCRIPTION = 'description';

    public const PUBLISHED_AT = 'published_at';

    public const IS_VISIBLE = 'is_visible';

    public const IMAGE = 'image';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $table = 'product_posts';
    public const GALLERY = 'gallery';
    protected $guarded = [];

    protected $casts = [
        self::GALLERY => 'array',
        self::PUBLISHED_AT => 'datetime',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category_post', 'product_post_id', 'product_category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_visible', '!=', false)
            ->where('published_at', '<=', now());
    }

    public function getBasePath(): string
    {
        return '/products/';
    }

    public function getPublicUrl()
    {
        return url()->to($this->getBasePath() . $this->slug . '/');
    }

    public function template(): string
    {
        return Single::class;

    }
}
