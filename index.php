<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<!-- ----------header start---------- -->
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-around">
      <a class="navbar-brand">USER PAGE </a>
        <button class="btn btn-outline-success " type="submit" onclick="add()">ADD USER</button>
    </div>
  </nav>
  <!-- -------------------------------------------------add user---------------------------------------------- -->
  <div class="card border-0 mt-5 a" id="reg" style="display:none">
<article class="card-body mx-auto border border-1 bg-light mt-5" style="width: 400px;box-shadow: 3px 3px 3px rgb(121, 121, 134);">
	<h4 class="card-title mb-3 text-center ">REGISTER HERE</h4><br>
<div style="display: flex;justify-content: center;">
  <form action="" method="POST" style="width:300px;">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user py-2"></i> </span>
		 </div>
        <input name="fname" id="fname" class="form-control" placeholder="Full name" type="text" >
    </div> <!-- form-group// --><br>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope py-2"></i> </span>
		 </div>
        <input name="email" id="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// --><br>
  <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user py-2"></i> </span>
		 </div>
        <input name="username" id="username" class="form-control" placeholder="user_name" type="text">
    </div><!-- form-group end.// --><br>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock py-2"></i> </span>
		</div>
        <input class="form-control" id="password" placeholder="Create password" type="password" name="password">
    </div> <!-- form-group// --> <br>                                    
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" onclick="add_user()"> Create Account  </button>
    </div> <!-- form-group// -->    
      
</form>
</div>
</article>
</div>
  <!-- -------------------------------------------------end add user------------------------------------------ -->
  <!-- -------------------------------------------------add update-------------------------------------------- -->
  <!-- <?php
    $us_name=$POST['name'];
    echo $us_name;
    $us_email=$POST['email'];
    $us_username=$POST['username'];
    $us_password=$POST['password'];
   ?> -->

<div class="card border-0 mt-5" id="upd" style="display:none">
<article class="card-body mx-auto border border-1 bg-light mt-5" style="width: 400px;box-shadow: 3px 3px 3px rgb(121, 121, 134);">
  <h4 class="card-title mb-4 mt-3 text-center ">UPDATE HERE</h4>
<div style="display: flex;justify-content: center;">
<form action="" method="POST" style="width:300px;">
  <div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa py-2" style="width:60px">Name</i> </span>
       </div>
      <input name="u_name" id="u_name" value="" class="form-control" placeholder="Full name" type="text" >
  </div> <!-- form-group// -->
  <div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa py-2" style="width:60px">Email</i> </span>
       </div>
      <input name="u_email" id="u_email" value="" class="form-control" placeholder="Email address" type="email">
  </div> <!-- form-group// -->
<div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa py-2" style="width:60px">Username</i> </span>
       </div>
      <input id="u_username" value="" name="u_username" class="form-control" placeholder="user_name" readonly type="text">
  </div><!-- form-group end.// -->
  <div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa py-2" style="width:60px">Password</i> </span>
      </div>
      <input id="u_password" value="" class="form-control" placeholder="Create password" type="password" name="u_password">
      <input id="u_id" value="" class="form-control" placeholder="Create password" type="number" name="u_password" hidden>
  </div> <!-- form-group// -->                                     
  <div class="form-group text-center">
  <button type="submit" id="upd" class="btn btn-primary" name="submit" onclick="update() ">Update Account</button></div>
<!-- form-group// -->  
</form>    
</article>
</div> <!-- card.// -->

  <!-- -------------------------------------------------end update---------------------------------------- -->
  <table class="table w-75 m-auto justify-content-center table-striped">
  <thead>
    <h1 class="text-center mt-4">USER'S DETAILS</h1>
    <hr class="mb-5">
    <tr class="text-center">
      <th scope="col" >SLNO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php include 'db.php' ?>
  <?php
$data="SELECT * FROM `users`";
$i=1;
$details=$conn->query($data);
if($details){

    while($row=$details->fetch_assoc()){
        $id=$row['id'];
        $name=$row['fullname'];
        $email=$row['email'];
        $username=$row['username'];
        $password=$row['password'];
        echo '<tr class="text-center">
        <td class="id" hidden>'.$id.'</td>
        <td class="slno">'.$i.'</td>
        <td class="name">'.$name.'</td>
        <td class="email">'.$email.'</td>
        <td class="username">'.$username.'</td>
        <td class="password">'.$password.'</td>
        <td><button class="btn btn-danger" id="del"  onclick="del('.$id.')" >delete</button>
        <button class="btn btn-primary" onclick="upd('.$i.')">update</button></td>
        </tr>';
        $i = $i + 1;
    }
}


$conn-> close();
?>

</table>
<script>

    function add(){
  if(document.getElementById("reg").style.display=="none")
  {
    document.getElementById("reg").style.display="block";
  }
  else{
    document.getElementById("reg").style.display="none";
  }
}
    function add_user() {
  name=document.getElementById("fname").value;
  password=document.getElementById("password").value;
  username=document.getElementById("username").value;
  email=document.getElementById("email").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        this.responseText;
        location.reload();
      }
    };
    xmlhttp.open("GET", "add.php?name="+name+"&email="+email+"&username="+username+"&password="+password, true);
    xmlhttp.send();

}
function del(x) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        this.responseText;
        location.reload();
      }
    };
    xmlhttp.open("GET", "delete.php?id="+x, true);
    xmlhttp.send();

}
function upd(x){
  if(document.getElementById("upd").style.display=="none")
  {
    document.getElementById("upd").style.display="block";
  }
  else{
    document.getElementById("upd").style.display="none";
  }

  if(document.getElementById("reg").style.display=="block")
  {
    document.getElementById("reg").style.display="none";
  }


  name=document.getElementsByClassName("name")[x-1].innerHTML;
  email=document.getElementsByClassName("email")[x-1].innerHTML;
  password=document.getElementsByClassName("password")[x-1].innerHTML;
  username=document.getElementsByClassName("username")[x-1].innerHTML;
  id=document.getElementsByClassName("id")[x-1].innerHTML;
  document.getElementById("u_name").value=name;
  document.getElementById("u_email").value=email;
  document.getElementById("u_password").value=password;
  document.getElementById("u_username").value=username;
  document.getElementById("u_id").value=id;
}
function update(){
  if(document.getElementById("upd").style.display=="none")
  {
    document.getElementById("upd").style.display="block";
  }
  else{
    document.getElementById("upd").style.display="none";
  }
name=document.getElementById("u_name").value;
email=document.getElementById("u_email").value;
username=document.getElementById("u_username").value;
password=document.getElementById("u_password").value;
id=document.getElementById("u_id").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        this.responseText;
        location.reload();
       }
    };
     xmlhttp.open("GET", "update.php?name="+name+"&email="+email+"&username="+username+"&password="+password+"&id="+id, true);
     xmlhttp.send();
}

  </script>
