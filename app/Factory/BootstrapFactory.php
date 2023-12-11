<?php

namespace App\Factory;

use App\Factory\Classes\Bootstrap\ButtonBootstrap;
use App\Factory\Classes\Bootstrap\CheckBoxBootstrap;
use App\Factory\Interfaces\ButtonInterface;
use App\Factory\Interfaces\CheckBoxInterface;
use App\Factory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}
