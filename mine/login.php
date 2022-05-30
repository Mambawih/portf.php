<?php
session_start();
include "../database.php";
include "../function.php";


if(isset($_SESSION['ADMIN_LOGIN'])){
  redirect('index.php');
  die();
}

$msg="";
$pass="";
$fpass="";
$nme="";
if(isset($_POST['submit'])){
  $username=get_safe_value($_POST['username']);
  $password=get_safe_value($_POST['password']);
  
  $res=mysqli_query($con,"select * from admin where username='$username'");
  
  
  if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
    $verify=password_verify($password,$row['password']);
    if($verify==1){
      $_SESSION['ADMIN_LOGIN']=true;
      $_SESSION['ADMIN_USERNAME']=$username;
      redirect('index.php');
      die();
    }else{
      $pass = "Please enter a valid Password";
      $fpass = "Forgot Password?";
    }
  }else{
    $nme = "Please enter a valid Username";
  }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="adm-body">
        <div class="log-menu">
            <div class="log-item">
            <h1>Login Page</h1>
                <div class="con-form">
                    <form action="" method="post">
                        <input class="log-input" type="text" required name="username" placeholder="Username"><br>
                        <ul class="red"><?php echo $nme;?></ul>
                        <input class="log-input" type="password" required name="password" placeholder="Password"><br>
                        <ul class="red"><?php echo $pass;?></ul>
                        <input class="log-submit" name="submit" type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>