<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SmtpSettings extends Settings
{
    protected $table = 'settings';

    public ?string $smtp_port;

    public ?string $smtp_host;

    public ?string $smtp_email;

    public ?string $smtp_email_name;

    public ?string $smtp_user_name;

    public ?string $smtp_password;

    public string $smtp_password_type;

    public static function group(): string
    {
        return 'mail';
    }
}
