<?php

namespace App\Http\Controllers;

use App\Libs\King;
use App\Libs\Queen;

class AjaxController extends Controller
{
    public function getFigure(){
        if(isset($_GET)){
            $x = (int)$_GET['x'];
            $y = (int)$_GET['y'];
            if($_GET['figure'] == 'king'){
                $king = new King;
                $king->move($x,$y);
                setcookie('king',"$x,$y",time()+3600);
            }
            if($_GET['figure'] == 'queen'){
                $queen = new Queen;
                $queen->move($x,$y);
                setcookie('queen',"$x,$y",time()+3600);
            }

        }else{
            return false;
        }
    }
}
