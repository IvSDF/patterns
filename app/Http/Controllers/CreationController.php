<?php

namespace App\Http\Controllers;

use App\AbstractFactory\GuiKitFactory;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    private $guiKit;

    public function __construct()
    {
        $this->guiKit = (new GuiKitFactory())->getFactory('bootstrap');
//        $this->guiKit = (new GuiKitFactory())->getFactory('semanticui');
    }

    public function AbstractFactory()
    {
        $result[] = $this->guiKit->buildButton()->draw();
        $result[] = $this->guiKit->buildcheckBox()->draw();

        dd($result);

    }
}
