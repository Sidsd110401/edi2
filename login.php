<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
	padding-top: 10%;}
form {border: 3px solid #f1f1f1;
	}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center;">Login Form</h2>

<form action="login.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="login" value="Login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>


<?php

include("connect.php");

if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['psw'];

    $qry="SELECT * FROM `login` WHERE  `username`='$username' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);

    if($row<1)
    {
      ?>
        <script>
          alert('Username or Password doesnt match');
          window.open('login.php','_self');
        </script>

      <?php
    }
    else
    {
      $data=mysqli_fetch_assoc($run);
      if($username== 'shopkeeper' AND $password== 'shopkeeper')
      {
        session_start();
        $_SESSION["username"] = "shopkeeper";

        header('location:shopkeeper_index.php');
      }
      if($username == 'user' AND $password == 'user')
      {

        session_start();
        $_SESSION["username"] = "user";
     
        header('location:costumer.php');
      }

    }

}

?>