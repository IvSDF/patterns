<?php

namespace App\AbstractFactory\Factory;

use App\AbstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use App\AbstractFactory\Classes\SemanticUi\CheckBoxSemanticUi;
use App\AbstractFactory\Interfaces\ButtonInterface;
use App\AbstractFactory\Interfaces\CheckBoxInterface;
use App\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}
