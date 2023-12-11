<?php

namespace App\Factory\Classes\Bootstrap;

use App\Factory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}
