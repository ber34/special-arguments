<?php
class Person
{
	
 public function person11()
 { 
  return "Person pozycja 1"; 
 } 

 public function person12()
 {
   return "Person pozycja 2"; 
 } 
 
  public function person13()
 {
   return "Person pozycja 3"; 
 } 
} 
 
class Person2
{
 public function person22()
 {
 return "person 2";
 } 
}
 
 class Person3
 {
  public function person33()
  { 
   return "person 3";
  } 
 }
 
 class Person4
 {
  public function person44()
  {
   return "person 4";
  }
 } 
 
class Person5
{
  public function person11()
 { 
   return "Person5 pozycja 1";
 }
  public function person12()
 { 
   return "Person 5 pozycja 2";
 }
  public function person13()
 { 
   return "Person 5 pozycja 3";
 }
   public function person14()
 { 
   return "Person 5 pozycja 2";
 }
  public function person14()
 { 
   return "Person 5 pozycja 3";
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
 
 $test = new special_arguments(array("a"=>new Person(), "e"=>new Person5()));
 
 echo $test->person1()->person11();
 echo "---";
 echo $test->person1()->person12();
 echo "---";
 echo $test->person1()->person13();
 echo "---";
 echo $test->person5()->person11();
 echo "---";
 echo $test->person5()->person12();
 echo "---";
 echo $test->person5()->person13();
 echo "---";
 echo $test->person5()->person14();
 echo "---";
 echo $test->person5()->person15();
 
