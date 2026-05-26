<?php

namespace App\Filament\Resources\Agents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AgentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('provider_entered_business_name')
                    ->required(),
                TextInput::make('business_address'),
                TextInput::make('business_suburb'),
                TextInput::make('business_state'),
                TextInput::make('business_country'),
            ]);
    }
}
