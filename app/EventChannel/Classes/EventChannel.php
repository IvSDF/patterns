<?php

namespace App\EventChannel\Classes;

use App\EventChannel\Interface\EventChannelInterface;
use App\EventChannel\Interface\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
dd($this->topics);
        $message = "{$subscriber->getName()} подписан(-а) на [{$topic}]";
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach($this->topics[$topic] as $subscriber ) {
           $subscriber->notify($data);
        }
    }

}
