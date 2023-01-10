<?php include 'db.php' ?>

<?php
    $id=$_GET['id'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    $username=$_GET['username'];
    $password=$_GET['password'];
    $sql =$conn->query("UPDATE users SET fullname='$name',email='$email',password='$password',username='$username' WHERE id='$id'"); 
    $conn->close();

    ?>