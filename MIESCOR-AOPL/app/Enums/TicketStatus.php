<?php

namespace App\Enums;

use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;

enum TicketStatus: string
{
    use IsKanbanStatus;

    case Pending = 'New Ticket';
    case Active = 'Submit to Miescor CSR';
    case Inactive = 'Cancel this Ticket';

    public static function kanbanCases(): array
    {
        return[
            static::Pending,
            static::Active,
            static::Inactive,
        ];
    }
    // public function getTitle(): string
    // {
    //     return $this->name;
    // }
}