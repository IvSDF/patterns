<?php

namespace App\EventChannel\Classes;

use App\EventChannel\Interface\SubscriberInterface;

class Subscriber implements SubscriberInterface
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $message = "{$this->getName()} оповещен(-а) данными [{$data}]";
    }

    public function getName()
    {
        return $this->name;
    }
}
