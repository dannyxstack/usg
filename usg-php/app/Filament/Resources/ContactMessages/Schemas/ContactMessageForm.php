<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('ip_address'),
                Textarea::make('message')
                    ->columnSpanFull(),
                TextInput::make('firstname'),
                TextInput::make('lastname'),
                TextInput::make('mobile'),
                TextInput::make('nationality'),
                TextInput::make('enquiry_type'),
                TextInput::make('is_read')
                    ->numeric()
                    ->default(0),
                TextInput::make('host'),
            ]);
    }
}
