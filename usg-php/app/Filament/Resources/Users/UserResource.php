<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

// use Illuminate\Database\Eloquent\Model;
use UnitEnum;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    protected static UnitEnum|string|null $navigationGroup = 'System';

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    // public static function canAccess(): bool
    // {
    //     // 如果是admin，则直接返回true
    //     if (auth()->user()->hasRole('super_admin')) {
    //         return true;
    //     }
    //     // 检查当前登录用户是否有 'view_user' 这个权限
    //     return auth()->user()->can('view_any_user');
    // }

    public static function canViewAny(): bool
    {
        // 如果是admin，则直接返回true
        if (auth()->user()->hasRole('super_admin')) {
            return true;
        }
        // 检查当前登录用户是否有 'view_user' 这个权限
        // return auth()->user()->can('view_any_user');
        return auth()->user()->can('ViewAny:User');
    }
    // 控制"创建"按钮和页面
    // public static function canCreate(): bool
    // {
    //     // 如果是admin，则直接返回true
    //     if (auth()->user()->hasRole('super_admin')) {
    //         return true;
    //     }
    //     // return auth()->user()->can('create_user');
    //     return auth()->user()->can('Create:User');
    // }

    // // 控制具体某个用户的"编辑"按钮和页面
    // public function canEdit(Model $record): bool
    // {
    //     return auth()->user()->can('update_user');
    // }

}
