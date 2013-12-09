<?php 

          $adam      = "1 person";
          $ginter    = "2 person";
		      $bodzio    = "3 person";
		      $endriu    = "4 person";
		      $bandzo    = "5 person";
		      
		      
		  
            $test = new special_arguments($adam, $ginter, $bodzio, $endriu, $bandzo);
       $a = $test->car();
	   
	   
	   
        foreach($a[0] as $person){
	       echo $person."<br>";
	      }
