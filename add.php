<?php include 'db.php' ?>
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$sql =$conn->query(" INSERT INTO users (fullname, email, username,password)
VALUES ('$name', '$email','$username','$password')");
?>

