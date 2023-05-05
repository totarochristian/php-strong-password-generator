<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong password generator</title>
</head>
<body>
  <?php
    session_start();
    if(!isset($_SESSION["password"]))
      header("Location: ./index.php");
    ?>
      <h3>Lunghezza: <?php echo $_SESSION["passwordLength"]; ?></h3>
      <h2>Password: <?php echo $_SESSION["password"]; ?></h2>
</body>
</html>