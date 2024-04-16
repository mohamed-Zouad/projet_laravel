<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleCard extends Component
{
    public $title;
    public $content;
    public $author;

    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function render()
    {
        return view('Component.article-card');
    }
}