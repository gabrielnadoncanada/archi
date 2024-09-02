<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    public const ID = 'id';

    public const METAABLE_ID = 'metaable_id';

    public const METAABLE_TYPE = 'metaable_type';

    public const TITLE = 'title';

    public const DESCRIPTION = 'description';

    public const INDEXABLE = 'indexable';

    public const IMAGE = 'image';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $guarded = [

    ];


    protected $casts = [
        'id' => 'integer',
        'indexable' => 'boolean',
    ];




    public function metaable()
    {
        return $this->morphTo();
    }
}
