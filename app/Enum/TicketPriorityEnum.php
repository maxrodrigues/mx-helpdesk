<?php

namespace App\Enum;

enum TicketPriorityEnum: int
{
    case URGENT = 1;
    case HIGH = 2;
    case MEDIUM = 3;
    case LOW = 4;
}
