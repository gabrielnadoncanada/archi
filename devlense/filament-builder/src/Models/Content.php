<?php

namespace Devlense\FilamentBuilder\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function __construct(array $attributes = [])
    {
        if (blank($this->table)) {
            $this->setTable(config('filament-builder.table_name', 'contents'));
        }

        parent::__construct($attributes);
    }

    protected $guarded = [
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function contentable()
    {
        return $this->morphTo();
    }


}
