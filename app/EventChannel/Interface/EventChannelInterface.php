<?php

namespace App\EventChannel\Interface;

use PHPUnit\Event\Subscriber;

interface EventChannelInterface
{
    public function publish($topic, $data);

    public function subscribe($topic, SubscriberInterface $subscriber);

}
