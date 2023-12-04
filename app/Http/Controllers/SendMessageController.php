<?php

namespace App\Http\Controllers;

use App\Messengers\Delegation\MessengerDelegation;
use Illuminate\Routing\Controller;

class SendMessageController extends Controller
{
    public function message()
    {
        $item = new MessengerDelegation();

        $email = $item->toEmail()
            ->setSender('sender@mail.com')
            ->setRecipient('recipient@mail.com')
            ->setMessage('send email message!!!')
            ->send();

        $sms = $item->toSms()
            ->setSender('0663255256')
            ->setRecipient('0885558899')
            ->setMessage('send sms message')
            ->send();

        dd($email, $sms);
    }

}
