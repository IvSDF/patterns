<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts\Posts;
class PostsController extends Controller
{
    public function create()
    {
        $item = new Posts();

        $item->setTitle('Заголовок статьи');

        $item->setCategory(10);

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2030-02-01');

        $item->addProperty('read_only', true);

        $item->deleteProperty('read_only');

        dd($item->getCategory());
    }
}
