<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Models\Agent;

class AgentCount extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected static bool $isLazy = true;

    protected ?string $heading = 'Agents';

    protected ?string $description = null;

    protected int | string | array $columnSpan = 1;

    protected function getStats(): array
    {
        return [
            Agent::count()
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
