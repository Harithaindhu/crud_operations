<?php include 'db.php' ?>
<?php
    $id=$_REQUEST['id'];
    $sql_del =$conn->query("DELETE FROM users WHERE id='$id'");
?>