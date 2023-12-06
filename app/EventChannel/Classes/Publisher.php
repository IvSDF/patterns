<?php

namespace App\EventChannel\Classes;

use App\EventChannel\Interface\EventChannelInterface;
use App\EventChannel\Interface\PublisherInterface;

class Publisher implements PublisherInterface
{

    private $topic;

    private $eventChannel;

    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;

        $this->eventChannel = $eventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
