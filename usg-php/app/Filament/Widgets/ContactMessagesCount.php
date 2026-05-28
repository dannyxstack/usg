<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Models\ContactMessage;

class ContactMessagesCount extends StatsOverviewWidget
{
    protected static ?int $sort = 3;

    protected static bool $isLazy = true;

    protected ?string $heading = 'Contact Messages';

    protected ?string $description = null;

    protected int | string | array $columnSpan = 1;


    protected function getStats(): array
    {
        return [
            ContactMessage::count()
        ];
    }

    public function getSectionContentComponent(): Component
    {
        return Section::make()
            ->heading($this->getHeading())
            ->description($this->getDescription())
            ->schema($this->getCachedStats())
            ->columns($this->getColumns())
            ->contained(true)
            // ->container(Schema::make())
            ->gridContainer();
    }

}
