<?php

namespace App\Factory\Classes\Forms;

use App\Factory\BootstrapFactory;
use App\Factory\Classes\Forms\AbstractForm;
use App\Factory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory;
    }
}
