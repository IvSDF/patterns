<?php

namespace App\Posts;

use App\Posts\PostsPropertyContainer;

class Posts extends PostsPropertyContainer
{
    private $title;
    private $category_id;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategory()
    {
        return $this->category_id;
    }
    public function setCategory($id)
    {
        $this->category_id = $id;
    }



}
