<?php

namespace App\Messengers;

use App\Messengers\AbstractMessenger;

class EmailMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        return parent::send();
    }


}
