<?php
class person11
{
 public function person11()
 { 
  return "person 1"; 
 } 

 public function person12()
 {
   return "person 1 i 2"; 
 } 
} 
 
class person22
{
 public function person22()
 {
 return "person 2";
 } 
}
 
 class person33
 {
  public function person33()
  { 
   return "person 3";
  } 
 }
 
 class person44
 {
  public function person44()
  {
   return "person 4";
  }
 } 
 
class person55
{
 public function person55()
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
  return $this->person[0]["a"];  
 }
 
 public function person2()
 { 
  return $this->person[0]["b"];
 }
 
 public function person3()
 {  
  return $this->person[0]["c"]; 
 }
 
 public function person4()
 { 
  return $this->person[0]["d"];
 } 
 
 public function person5()
 { 
  return $this->person[0]["e"];
 }
}
 
 ## Special Arguments ##
 
 ## Możemy dowolnie zmieniać na te klasy które chcemy ##
 
 //$test = new special_arguments(array("a"=>new person11(), "b"=>new person22(), "c"=>new person33(), "d"=>new person44(), "e"=>new person55()));
 
 ## albo ##
 
 //$test = new special_arguments(array( "b"=>new person22(), "d"=>new person44(), "e"=>new person55()));
 
 ## albo ##
 
 $test = new special_arguments(array("a"=>new person11(), "a"=>new person12(),, "e"=>new person55()));
 
 echo $test->person1()->person11();
 echo "---";
 echo $test->person1()->person12();
 echo "---";
 echo $test->person5()->person55();
 
