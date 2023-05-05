<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong password generator</title>
</head>
<body>
  <!-- 
    Descrizione
    Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
    L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
    Milestone 1
    Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
    Scriviamo tutto (logica e layout) in un unico file index.php
    Milestone 2
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
    Milestone 3 (BONUS)
    Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. 
  -->

  <?php
    include __DIR__ . '/functions/functions.php';

    include __DIR__ . '/partials/formLength.php';

    if(isset($_SESSION["password"]))
      header("Location: ./ShowPassword.php");

    if(isset($_GET["passwordLength"]) && !empty($_GET["passwordLength"])){
      $passwordLength = $_GET["passwordLength"];
      session_start();
      $_SESSION["passwordLength"] = $passwordLength;
      $_SESSION["password"] = GeneratePassword($passwordLength);
      header("Location: ./ShowPassword.php");
    }
  ?>
</body>
</html>