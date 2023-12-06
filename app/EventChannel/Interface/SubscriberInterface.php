<?php

namespace App\EventChannel\Interface;

interface SubscriberInterface
{
    public function notify($data);
}
