<?php
  include __DIR__ . '/../data/data.php';

  function GeneratePassword($length){
    $pass = "";
    for($i=0; $i<$length; $i++)
      $pass = $pass . GenerateRandomCharacter();
    return $pass;
  }

  function GenerateRandomCharacter(){
    $randomNum = rand(1,3);
    switch($randomNum){
      case 1: 
        $randomNum = rand(48,57);
        break;
      case 2: 
        $randomNum = rand(65,90);
        break;
      case 3: 
        $randomNum = rand(97,122);
        break;
    }
    return chr($randomNum);
  }