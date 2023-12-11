<?php

namespace App\Http\Controllers;

use App\Factory\Classes\Forms\BootstrapDialogForm;
use App\Factory\Classes\Forms\SemanticUiDialogForm;
use Illuminate\Http\Request;

class FactoryPatternsController extends Controller
{
    public function FactoryMethod()
    {
        $dialogForm = new BootstrapDialogForm();
//        $dialogForm = new SemanticUiDialogForm();

        $result = $dialogForm->render();
        dd($result);
    }
}
