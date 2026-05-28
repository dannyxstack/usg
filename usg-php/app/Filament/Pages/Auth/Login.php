<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Page;
use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use MarcoGermani87\FilamentCaptcha\Forms\Components\CaptchaField;

use Filament\Schemas\Concerns\RestrictsFileUploadsToSchemaComponents;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;

class Login extends BaseLogin
{
    use RestrictsFileUploadsToSchemaComponents;
    use WithRateLimiting;
    // protected string $view = 'filament.pages.auth.login';

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             $this->getEmailFormComponent(),
    //             $this->getPasswordFormComponent(),
    //             $this->getRememberFormComponent(),
    //             CaptchaField::make('captcha')
    //                 ->label('验证码')
    //                 ->required(),
    //         ]);
    // }
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
                CaptchaField::make('captcha')
                    ->label('Captcha')
                    // ->hint('Alphabets, No Numbers.')
                    ->mutateStateForValidationUsing(fn (string $state) => strtolower($state))
                    ->required(),
            ]);
    }

}