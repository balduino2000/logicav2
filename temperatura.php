<?php
 class Temperatura{
 
 public $res;
 public $cent;
 public $far;
 
 public function ConvertirCentigrados($far){
 
 $this->res = ($far * 9 / 5) + 32;
 return $this->res;
 }
 
 public function ConvertirFarenheit($cent){
 $this->res = 5 / 9 * ($cent - 32);
 return $this->res;
 }
 }
?>