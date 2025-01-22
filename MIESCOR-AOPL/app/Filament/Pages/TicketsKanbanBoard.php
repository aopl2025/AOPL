<?php

namespace App\Filament\Pages;

use Illuminate\Support\Collection;
use Mokhosh\FilamentKanban\Pages\KanbanBoard; 
use App\Models\Ticket;
use App\Enums\TicketStatus;

class TicketsKanbanBoard extends KanbanBoard
{
    protected static string $model = Ticket::class;
    protected static string $statusEnum = TicketStatus::class;
    protected static string $recordTitleAttribute = 'title';

    protected function statuses(): Collection
    {
        return TicketStatus::statuses();
    }
    protected function records(): Collection
    {
        return Ticket::latest('updated_at')->get();
    }
    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
        Ticket::find($recordId)->update(['status' => $status]);
    }
    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
        
    }
}
