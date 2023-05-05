<?php
  include __DIR__ . '/functions/functions.php';

  session_start();
  $_SESSION["password"] = GeneratePassword($_SESSION["passwordLength"]);
  
  header("Location: ./ShowPassword.php");