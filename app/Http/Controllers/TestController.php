<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function tablem ($n)
    {
    for ($i= 1; $i<=10 ; $i++ )
    {
        $p= $i*$n;
        echo $i.'*'.$n.'='.$p.'<br>';
    }
    }

    public function conversion_temp ($min, $max)
    {
        for ($c= $min; $c<=$max ; $c++ )
        {
            $f= $c*1.8+ 32;
            echo $c.' >> '.$f.'<br>';
        }
        
    }
}
