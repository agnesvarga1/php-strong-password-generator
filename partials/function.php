<?php


session_start();


function pwdGen($pwdLength , $pwdRep){

  $digits    = (range('0', '9'));
  $lowercase = (range('a', 'z'));
  $uppercase = (range('A', 'Z')); 
  $special   = (str_split('!@#$%^&*_+=?/'));
  $combined  = array_merge($digits, $lowercase, $uppercase, $special);
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
$_SESSION['rep'] = $pwdRep;
header("Location: ./success.php");


}




   
 


   


?>