<?php
namespace App\view\composers;
use Illuminate\View\View;
use App\view\composers\StaticDataComposer;
class StaticDataComposer
   {
        public function compose(View $view)
        {
    
    $messageCount = rand(1, 100);
    $view->with('messageCount', $messageCount);
    }
    }