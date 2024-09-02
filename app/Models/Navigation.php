<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    public const ID = 'id';

    public const TITLE = 'title';

    public const HANDLE = 'handle';

    public const ITEMS = 'items';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $guarded = [];

    protected $casts = [
        'items' => 'json',
    ];

    public static function fromHandle(string $handle): Builder|Model
    {
        return static::query()->firstWhere('handle', $handle);
    }
}
