<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Factory\BootstrapFactory;
use App\AbstractFactory\Factory\SemanticUiFactory;
use App\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch($type){
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new \Exception("Невідомий тип фабрики [{$type}]");
        }
        return $factory;
    }

}
