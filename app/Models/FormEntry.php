<?php

namespace App\Models;

use App\Mail\MessageCreatedMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class FormEntry extends Model
{
    protected $guarded = [];

    public const ID = 'id';

    public const FIRST_NAME = 'firstName';

    public const LAST_NAME = 'lastName';

    public const EMAIL = 'email';

    public const TEL = 'tel';

    public const MESSAGE = 'message';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected static function booted()
    {
        static::created(function ($item) {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MessageCreatedMail($item));
        });
    }
}
