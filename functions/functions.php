<?php
  include __DIR__ . '/../data/data.php';

  /**
   * Function used to generate a random password with a specific length
   * @param int $length Integer that rapresent the length of the password to be generated
   * @return string String that rapresent the generated password
   */
  function GeneratePassword($length){
    $pass = "";
    for($i=0; $i<$length; $i++)
      $pass .= GenerateRandomCharacter();
    return $pass;
  }

  /**
   * Function used to generate a single random character
   * @return string String that rapresent a random single character (could be a number, a letter or a special symbol) 
   */
  function GenerateRandomCharacter(){
    $symbols = [33,45,95,63];
    //Random selector of general category of characters (numbers, letters (upper and down cases) and symbols)
    $randomNum = rand(1,4);
    switch($randomNum){
      case 1: //Number, from 1 to 9
        $randomNum = rand(48,57);
        break;
      case 2: //Letter, from a to z
        $randomNum = rand(65,90);
        break;
      case 3: //Letter, from A to Z
        $randomNum = rand(97,122);
        break;
      case 4: //Symbol, from the symbols array
        $randomNum = $symbols[rand(0,count($symbols)-1)];
        break;
    }
    return chr($randomNum);
  }