<?php

namespace App\Factory;

use App\Factory\Classes\SemanticUi\ButtonSemanticUi;
use App\Factory\Classes\SemanticUi\CheckBoxSemanticUi;
use App\Factory\Interfaces\ButtonInterface;
use App\Factory\Interfaces\CheckBoxInterface;
use App\Factory\Interfaces\GuiFactoryInterface;

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
