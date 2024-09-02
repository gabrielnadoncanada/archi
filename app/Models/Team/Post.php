<?php

namespace App\Models\Team;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    use HasMeta;

    protected $table = 'team_posts';

    protected $guarded = [];

    public const ID = 'id';

    public const TITLE = 'title';

    public const SLUG = 'slug';

    public const SOCIAL_LINK = 'social_link';

    public const DESCRIPTION = 'description';

    public const PUBLISHED_AT = 'published_at';

    public const IS_VISIBLE = 'is_visible';

    public const IMAGE = 'image';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';
    public const GALLERY = 'gallery';

    protected $casts = [

        self::PUBLISHED_AT => 'datetime',
        self::SOCIAL_LINK => 'array',
        self::GALLERY => 'array',
    ];



    public function scopePublished($query)
    {
        return $query->where('is_visible', '!=', false)
            ->where('published_at', '<=', now());
    }

    public function getBasePath(): string
    {
        return '/teams/';
    }

    public function getPublicUrl()
    {
        return url()->to($this->getBasePath().$this->slug.'/');
    }
}
