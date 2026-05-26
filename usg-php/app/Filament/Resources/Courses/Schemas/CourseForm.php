<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code'),
                TextInput::make('kname')
                    ->required(),
                TextInput::make('cricos_code'),
                TextInput::make('class'),
                TextInput::make('img'),
                TextInput::make('status'),
                TextInput::make('aqf_level')
                    ->numeric(),
                Textarea::make('overview')
                    ->columnSpanFull(),
                Textarea::make('entry_requirements')
                    ->columnSpanFull(),
                Textarea::make('entry_req_desc')
                    ->columnSpanFull(),
                Textarea::make('entry_req_items')
                    ->columnSpanFull(),
                Textarea::make('entry_req_notes')
                    ->columnSpanFull(),
                TextInput::make('total_core_units')
                    ->numeric(),
                TextInput::make('total_electives_units')
                    ->numeric(),
                TextInput::make('mode_of_delivery'),
                Textarea::make('placement')
                    ->columnSpanFull(),
                TextInput::make('location'),
                TextInput::make('course_fees'),
                TextInput::make('duration'),
                Textarea::make('pathways')
                    ->columnSpanFull(),
                Textarea::make('employment_pathways')
                    ->columnSpanFull(),
                TextInput::make('course_structure'),
                Textarea::make('assessment_methodology')
                    ->columnSpanFull(),
                Textarea::make('reference_textbooks')
                    ->columnSpanFull(),
                Textarea::make('course_progress_policy')
                    ->columnSpanFull(),
                Textarea::make('rpl_ct')
                    ->columnSpanFull(),
                Textarea::make('further_information')
                    ->columnSpanFull(),
                TextInput::make('college'),
                TextInput::make('apply_link'),
            ]);
    }
}
