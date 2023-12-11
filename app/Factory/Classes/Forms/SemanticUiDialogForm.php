<?php

namespace App\Factory\Classes\Forms;

use App\Factory\Interfaces\GuiFactoryInterface;
use App\Factory\Classes\Forms\AbstractForm;
use App\Factory\SemanticUiFactory;

class SemanticUiDialogForm extends AbstractForm
{
    function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory;
    }
}
