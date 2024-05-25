<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

label {
    margin-bottom: 5px;
}

input[type="number"] {
    padding: 5px;
    margin-bottom: 10px;
}

input[type="submit"] {
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

h2 {
    text-align: center;
    margin-top: 30px;
}

p {
    text-align: center;
    margin-bottom: 10px;
}
</style>
<body>
<h1>Basic Calculator by Ikrash Haroon😎</h1>
  <form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1" required><br><br>
    <label for="num2">Number 2:</label>
    <input type="number" name="num2" id="num2" required><br><br>
    <input type="submit" name="submit" value="Calculate">
  </form>
  <?php
    if (isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $addition = $num1 + $num2;
      $subtraction = $num1 - $num2;
      $multiplication = $num1 * $num2;
      $division = $num1 / $num2;
      echo "<h2>Results:</h2>";
      echo "<p>Addition: {$num1} + {$num2} = {$addition}</p>";
      echo "<p>Subtraction: {$num1} - {$num2} = {$subtraction}</p>";
      echo "<p>Multiplication: {$num1} * {$num2} = {$multiplication}</p>";
      echo "<p>Division: {$num1} / {$num2} = {$division}</p>";
    }
  ?>
</body>
</html>
