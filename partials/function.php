<?php


session_start();
$pwdLength =$_GET['length'] ?? null ;
$pwdLength =intval($pwdLength);

function pwdGen($pwdLength){
  $digits    = (range('0', '9'));
  $lowercase = (range('a', 'z'));
  $uppercase = (range('A', 'Z')); 
  $special   = (str_split('!@#$%^&*_+=?/'));
  $combined  = array_merge($digits, $lowercase, $uppercase, $special);
  $pwdArr = [];
  for($i=0;$i < $pwdLength;$i++){
    $randomPosition = rand(0,count($combined)-1);
    $singleC = $combined[$randomPosition];
    $pwdArr[] = $singleC;      
}
$pwd = implode($pwdArr);
$_SESSION['pwd'] = $pwd;

header("Location: ./success.php");


}




   
 


   


?>