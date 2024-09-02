<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'service_categories';

    public const ID = 'id';

    public const TITLE = 'title';

    public const SLUG = 'slug';

    public const DESCRIPTION = 'description';

    public const IMAGE = 'image';

    public const IS_VISIBLE = 'is_visible';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'service_category_post');
    }
}