<?php

namespace App\Enum;

enum TicketStatusEnum: int
{
    case OPEN = 1;
    case CLOSED = 2;
    case PENDING = 3;
    case IN_PROGRESS = 4;
    case COMPLETED = 5;
    case CANCELLED = 6;
    case ANSWERED_BY_CUSTOMER = 7;
    case AWAITING_CUSTOMER = 8;
}
