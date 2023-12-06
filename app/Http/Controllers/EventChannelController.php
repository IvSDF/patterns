<?php

namespace App\Http\Controllers;

use App\EventChannel\Classes\EventChannelJob;
use App\Http\Controllers\Controller;

class EventChannelController extends Controller
{
    public function EventChannel()
    {
        $item = new EventChannelJob();
        $item->run();
    }

}
