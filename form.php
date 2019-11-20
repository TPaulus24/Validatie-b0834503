<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<form action="form.php" method="get" class="form-example">
  <div class="form-example">
    <label for="email">Voer E-mail in </label>
    <input type="email" name="email" id="email" required placeholder="Enter E-mail">
  </div>
  <div class="form-example">
    <input type="submit" value="sent">
  </div>
  
</form>

<?php
if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
    echo("E-mailadres is geldeg!");
  } else {
    echo("E-mailadres is ongeldeg!");
  }
?>
</body>
</html>