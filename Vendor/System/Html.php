<?php

namespace System;

class Html
{
    protected $app;

    private $title;

    private $description;

    private $keywords;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle($title)
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription($description)
    {
        return $this->description;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    public function getKeywords($keywords)
    {
        return $this->keywords;
    }
}