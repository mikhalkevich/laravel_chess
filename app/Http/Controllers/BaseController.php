<?php

namespace App\Http\Controllers;

use App\Libs\King;
use App\Libs\Queen;

class BaseController extends Controller
{
    public function getIndex(){
        $king = new King;
        $king_xy = env('KING_X', 2).','.env('KING_Y', 2);
        $king_str = isset($_COOKIE['king'])?$_COOKIE['king']:$king_xy;
        $king_arr = explode(',',$king_str);
        $king->move($king_arr[0],$king_arr[1]);
        $queen = new Queen;
        $queen_xy = env('QUEEN_X', 5).','.env('QUEEN_Y', 5);
        $queen_str = isset($_COOKIE['queen'])?$_COOKIE['queen']:$queen_xy;
        $queen_arr = explode(',',$queen_str);
        $queen->move($queen_arr[0],$queen_arr[1]);
        return view('welcome', compact('king', 'queen'));
    }
}
