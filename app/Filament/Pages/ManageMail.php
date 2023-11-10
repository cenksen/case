<?php

namespace App\Filament\Pages;

use App\Settings\SmtpSettings;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageMail extends SettingsPage
{
    use HasPageShield;

    protected static ?string $navigationGroup = 'Genel Ayarlar';

    protected static ?string $title = 'Mail Ayarları';

    protected static ?int $navigationSort = 9;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $activeNavigationIcon = 'heroicon-s-cog-6-tooth';

    protected static string $settings = SmtpSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Mail Ayarları')
                    ->description('Bu alanda mail bilgilerinizi düzenleyebilirsiniz.')
                    ->schema([
                        TextInput::make('smtp_port')
                            ->label('SMTP Portu')
                            ->helperText(' (Genelde 587 veya 25 olur)')
                            ->columnSpan(2),

                        TextInput::make('smtp_host')
                            ->label('SMTP Host')
                            ->helperText(' (Genelde mail.domain.com olur) '),

                        TextInput::make('smtp_email')
                            ->label('SMTP Email')
                            ->helperText('(Sizin adınıza mail gönderecek adres)'),

                        TextInput::make('smtp_email_name')
                            ->label('SMTP Email Adı')->helperText('info@domain.com'),

                        TextInput::make('smtp_user_name')
                            ->label('SMTP Kullanici Adı')->helperText('Genelde email ile aynı olur'),

                        TextInput::make('smtp_password')
                            ->label('SMTP Sifre')
                            ->password()
                            ->helperText('Genelde 123456789 olur'),
                        Select::make('smtp_password_type')
                            ->options([
                                'ssl' => 'ssl',
                                'tls' => 'tls',
                            ]),
                    ]),
            ]);
    }

    protected function getShieldRedirectPath(): string
    {
        return '/'; // redirect to the root index...
    }
}
