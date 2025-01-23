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
    protected static ?string $title = 'Tickets';
    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected function statuses(): Collection
    {
        return TicketStatus::statuses();
    }
    protected function records(): Collection
    {
        //return Ticket::latest('updated_at')->get();
        return Ticket::ordered()->get();
    }
    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
        Ticket::find($recordId)->update(['status' => $status]);
        Ticket::ignoreTimestamps();
        Ticket::setNewOrder($toOrderedIds);
        Ticket::ignoreTimestamps(false);
    }
    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
        Ticket::ignoreTimestamps();
        Ticket::setNewOrder($orderedIds);
        Ticket::ignoreTimestamps(false);
    }
}
