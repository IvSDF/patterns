<?php

namespace App\Posts;

use App\Posts\Interfaces\PostsProperty;

class PostsPropertyContainer implements PostsProperty
{
    private $postPropertyContainer = [];

    public function addProperty($propertyName, $value)
    {
        $this->postPropertyContainer[$propertyName] = $value;
    }

    public function deleteProperty($propertyName)
    {
        unset($this->postPropertyContainer[$propertyName]);
    }

    public function getProperty($propertyName)
    {
        return $this->postPropertyContainer[$propertyName] ?? null;
    }

    public function setProperty($propertyName, $value)
    {
        if(!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception('Property [{$propertyName}] not found');
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}
