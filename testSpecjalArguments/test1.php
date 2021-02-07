<?php
abstract class person1
{
 public static function person11()
 {
   return "person 1";
 }
}
 
 abstract class person2
 {
  public static function person22()
  {
   return "person 2";
  } 
} 
 
abstract class person3
{
 public static function person33()
 {
  return "person 3";
 }
} 
 
abstract class person4
{
 public static function person44(){
 return "person 4";
 } 
}
 
 abstract class person5
 {
 public static function person55()
 {
 return "person 5";
 } 
}
 
class special_arguments
{
 
 public $person = array();
 
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
 
## Special Arguments ##
 
 ## Możemy dowolnie zmieniać na te klasy które chcemy ## 
 
$test = new special_arguments(array("a"=>person1::person11(), "b"=>person2::person22(), "c"=>person3::person33(), "d"=>person4::person44(), "e"=>person5::person55())); 
 
## albo ## 
 
$test = new special_arguments(array( "b"=>person2::person22(), "d"=>person4::person44(), "e"=>person5::person55()));
 
 ## albo ##
 
 $test = new special_arguments(array("a"=>person1::person11(), "e"=>person5::person55()));
 
 foreach($test->person[0] as $person)
 {
  echo $person."--"; 
 }
