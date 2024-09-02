<?php

namespace App\Models\Project;

use App\Enums\PublishedStatus;
use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
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

    public const  CLIENT = 'client';
    public const  AREA = 'area';
    public const  YEAR = 'year';
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

    protected $table = 'project_posts';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'project_category_post', 'project_post_id', 'project_category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_visible', '!=', false)
            ->where('published_at', '<=', now());
    }

    public function getBasePath(): string
    {
        return '/projects/';
    }

    public function getPublicUrl()
    {
        return url()->to($this->getBasePath() . $this->slug . '/');
    }

    public function categoryName()
    {
        if ($this->categories()->exists()) {
            return $this->categories()->first()->name;
        }

        return false;
    }
}
