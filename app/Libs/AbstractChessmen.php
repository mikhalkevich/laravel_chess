<?php
namespace App\Libs;
Interface Ichessmen
{
 public function move($x, $y);
 public function getPosition();
}

 abstract class AbstractChessmen implements  IChessmen {

     public $x = '';
     public $y = '';

     public function move($x, $y){
        $this->x = $x;
        $this->y = $y;
     }
     public function getPosition(){
        return 'x:'.$this->x.' y:'.$this->y;
     }
 }
