<?php

namespace App;

class Counter
{

    public static function run()
    {
        Event\WriteVisit::run();
    }
}