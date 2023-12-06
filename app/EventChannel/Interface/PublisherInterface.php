<?php

namespace App\EventChannel\Interface;

interface PublisherInterface
{
    public function publish($data);
}
