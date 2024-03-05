<?php

session_start();

function pwdGen($pwdLength , $pwdRep,$combined){



  
  $pwdArr = [];
   while(count($pwdArr) < $pwdLength ){
 
    $randomPosition = rand(0,count($combined)-1);
    $singleC = $combined[$randomPosition];
    if($pwdRep == true){
      $pwdArr[] = $singleC; 
    } elseif ($pwdRep == false && !in_array($singleC, $pwdArr)){
    $pwdArr[] = $singleC;   
   }
    
   }
   
$pwd = implode($pwdArr);
$_SESSION['pwd'] = $pwd;
$_SESSION['com'] = $combined;
header("Location: ./success.php");


}




   
 


   


?>