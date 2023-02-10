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
  echo "<h2>Data Types</h2>";
  echo "<hr>";
  $string = "String is put in 'quotes'.<br>";
  echo "$string";
  $integer = 31;
  $float = 31.42;
  echo "Integers are whole numbers, e.g. $integer<br>";
  echo "Float/floating points are decimals, e.g. $float<br>";
  $boolean = true;
  echo "PHP also has the data type boolean.<br>";
  echo "Null is also a data type - no value.<br>";
  echo "<h2>Strings</h2>";
  echo "<hr>";
  echo "Hello this is a string. You can store strings in a variable.<br>";
  $phrase = "Hello this a string stored in a variable.<br>";
  echo $phrase;
  echo "<h3>String Functions</h3>";
  echo "<p>String functions are the equivalent of string methods in Ruby.<br>";
  echo "<hr>";
  echo "Below is using the function 'strtoupper()' to uppercase:<br>";
  echo strtoupper($phrase);
  echo "'strlen()' to character length:<br>";
  echo strlen($phrase);
  echo "<br>";
  echo "[] is used to find the index of a character in a string:<br>";
  echo $phrase[0];
  echo "'str_replace() takes 3 args and allows you to replace words in a string: <br>";
  echo str_replace("Hello", "Goodbye", $phrase);
  echo "substr() will allow you to pick out a subsection of a string: <br>";
  echo substr($phrase, 6, 4);
  echo "<h2>Numbers</h2>";
  echo "<hr>";
  echo "<p>Use ++ to add one to a number. i.e. 1 + 1 gives 2 or 1 ++ gives 2<br>";
  echo $num = 5;
  echo "<br>";
  echo "5++ will give:</br>";
  $num ++;
  echo $num;
  echo "<p>Increment operator works exactly the same as Ruby += or -=:<br>";
  echo $num += 10;
  echo "<br> Absolute value = abs()<br>";
  echo abs(-100);
  echo "<h2>Getting input from a user:</h2>";
  echo "<hr>";
  ?>
    <form action="site.php" method="get">
      Name: <input type="text" name="name">
      <input type="submit">
    </form>

<?php
echo $_GET["name"];
echo "<br>";
echo "<h2>Basic calculator</h2>";
echo "<hr>";
?>

<form action="site.php" method="get">
  <input type="number" name="num1">
  <br>
  <input type="number" name="num2">
  <input type="submit">
</form>

Answer:<?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>
</html>
