<?php

namespace App\Filament\Resources\Courses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CoursesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('kname')
                    ->searchable(),
                TextColumn::make('cricos_code')
                    ->searchable(),
                TextColumn::make('class')
                    ->searchable(),
                TextColumn::make('img')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('aqf_level')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_core_units')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_electives_units')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('mode_of_delivery')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('duration')
                    ->searchable(),
                TextColumn::make('college')
                    ->searchable(),
                TextColumn::make('apply_link')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
