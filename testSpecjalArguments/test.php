<?php

class special_arguments
{
 
public $person = array[];
 
 public function __construct()
 { 
  if($arg = func_num_args()>0)
  {
    $this->person = func_get_args(); 
  }
 }
 
 public function person1()
 {
   return $this->person["a"];
 } 
 
 public function person2()
 {
   return $this->person["b"];
 } 
 
 public function person3()
 { 
   return $this->person["c"];
 }
 
 public function person4()
 {
   return $this->person["d"];
 } 
 
 public function person5()
 {
  return $this->person["e"]; 
 }
}
 
 ## Wywołanie w pliku ##
 
 $adam = "1 person";
 
 $ginter = "2 person";
 
 $bodzio = "3 person";
 
 $endriu = "4 person";
 
 $bandzo = "5 person";
 
 ## Special Arguments ##
 
 ## Możemy dowolnie zmieniać na te metody które chcemy ##
 
 $test = new special_arguments(array("a"=>$adam, "b"=>$ginter, "c"=>$bodzio, "d"=>$endriu, "e"=>$bandzo));
 
 ## albo ##
 
 $test = new special_arguments(array( "b"=>$ginter, "d"=>$endriu, "e"=>$bandzo));
 
 ## albo ##
 
 $test = new special_arguments(array("a"=>$adam, "e"=>$bandzo));
 foreach($test->person[0] as $person)
 {
    echo $person."";
 }
 ?>
