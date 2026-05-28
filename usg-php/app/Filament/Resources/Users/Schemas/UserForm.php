<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

use Filament\Forms;
use Filament\Forms\Components\Select;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    // ->required(),
                    ->required(fn (string $operation): bool => $operation === 'create')  // 创建时必须填
                    ->dehydrated(fn ($state) => filled($state))  // 只有当密码字段有值时，才将其提交保存
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))  // 提交前自动加密
                    ,
                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->label('Role'),
            ]);
    }
}
