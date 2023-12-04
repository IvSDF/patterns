<?php

namespace App\Messengers;

class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        return parent::send();
    }

}
