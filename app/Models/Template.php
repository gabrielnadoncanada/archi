<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public const ID = 'id';
    public const TEMPLATEABLE_ID = 'templateable_id';
    public const TEMPLATEABLE_TYPE = 'templateable_type';
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';
    public const CONTENT = 'content';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    protected $guarded = [];


    protected $casts = [
        'content' => 'array',
    ];

    public function templateable()
    {
        return $this->morphTo();
    }
}
