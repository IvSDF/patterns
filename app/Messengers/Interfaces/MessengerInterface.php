<?php

namespace App\Messengers\Interfaces;

interface MessengerInterface
{
    public function setSender($value): MessengerInterface;
    public function setRecipient($value): MessengerInterface;
    public function setMessage($value): MessengerInterface;
}
