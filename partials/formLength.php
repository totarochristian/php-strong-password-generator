<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
  <!-- Password length -->
  <label for="passwordLength">Lunghezza:</label>
  <input type="number" name="passwordLength" id="passwordLength" min="8" max="32" value="<?php echo $passwordLength ?>">
  <!-- Submit button -->
  <input type="submit" value="Genera">
</form>