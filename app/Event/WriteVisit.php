<?php

namespace App\Event;

use App\Entity\Visit;
use App\ValueObject\Visitor;

class WriteVisit
{

    public static function run()
    {
        $obVisitor = new Visitor();
        $obVisit = new Visit();
        $obVisit->write($obVisitor);
    }
}