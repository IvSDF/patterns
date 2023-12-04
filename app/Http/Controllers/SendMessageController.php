<?php

namespace App\Http\Controllers;

use App\Messengers\Delegation\MessengerDelegation;
use Illuminate\Routing\Controller;

class SendMessageController extends Controller
{
    public function message()
    {
        $item = new MessengerDelegation();

        $item->setSender('sender@mail.com')
            ->setRecipient('recipient@mail.com')
            ->setMessage('send email message!!!')
            ->send();

        dd($item);
    }

}
