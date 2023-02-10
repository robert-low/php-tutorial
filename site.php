<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial!</title>
</head>
<body>

  <?php
  echo "<h1>PHP fundamentals</h1>";
  echo "<p>This PHP code is being rendered as HTML by our local server.</p>";
  echo "<hr>";
  echo "<p>Below are the fundamentals of PHP</p>";
  echo "<hr>";
  echo "<h2>Variables</h2>";
  echo "<hr>";
  $character_name = "John";
  $character_age = 35;
  echo "Variables are written starting with a $ sign, in camel_case.<br>";
  echo "<br>";
  echo "There once was a man named <strong>$character_name</strong> <br>";
  echo "He was <strong>$character_age</strong> years old.<br>";
  echo "<p>Variables can be updated through your programme.<br>";
  $character_name = "Rob";
  echo "The variable '$ character_name' now stores the name as <strong>$character_name</strong> <br>";
  ?>
</body>
</html>
