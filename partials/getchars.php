<?php 
function getCharsArr( $pwdLett,$pwdNums,$pwdChar,$pwdLength,$pwdRep){
    $digits    = (range('0', '9'));
    $lowercase = (range('a', 'z'));
    $uppercase = (range('A', 'Z')); 
    $specials   = (str_split('!@#$%^&*_+=?/'));
  if(($pwdLett && $pwdChar && $pwdNums) ||  (!$pwdLett && !$pwdChar && !$pwdNums) )  {
 
    $combined = array_merge($digits,$specials,$lowercase,$uppercase);
    return $combined;
  }elseif ($pwdLett && !$pwdNums && !$pwdChar ){
     $combined = array_merge($lowercase,$uppercase);
     return $combined;
  } elseif (!$pwdLett && $pwdNums && !$pwdChar ){
    if($pwdLength > count($digits) && $pwdRep == false){
        
        return false;
    }else{
       // $combined = array_merge($digits);
        return $digits;
    }
    
  } elseif (!$pwdLett && !$pwdNums && $pwdChar) {
    if($pwdLength > count($specials) && $pwdRep == false){
       
       return false;
    }else{
        //$combined = array_merge($specials);
        return $specials;
    }
  };
    
};