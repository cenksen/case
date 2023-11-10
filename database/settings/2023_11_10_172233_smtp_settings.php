<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('mail.smtp_port');
        $this->migrator->add('mail.smtp_host');
        $this->migrator->add('mail.smtp_email');
        $this->migrator->add('mail.smtp_email_name');
        $this->migrator->add('mail.smtp_user_name');
        $this->migrator->add('mail.smtp_password');
        $this->migrator->add('mail.smtp_password_type', 'ssl');
    }
};
