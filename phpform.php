
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $email = $phoneNumber = $comment = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $phoneNumber = test_input($_POST["phoneNumber"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $comment = test_input($_POST["comment"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Full Name: <input type="text" name="name">
  <br><br>
  PhoneNumber: <input type="Number" name="PhoneNumber">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Subject: <input type="text" name="subject">
  <br><br>
  Message: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $phoneNumber;
echo "<br>";
echo $email;
echo "<br>";
echo $subject;
echo "<br>";
echo $comment;

?>

</body>
</html>