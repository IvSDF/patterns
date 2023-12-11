<?php

namespace App\Factory\Classes\SemanticUi;

use App\Factory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}
