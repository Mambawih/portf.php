<?php
include "database.php";
include "function.php";
$success="";

if (isset($_POST['submit'])){
  $name=get_safe_value($con,$_POST['name']);
  $text=get_safe_value($con,$_POST['text']);
  $content=get_safe_value($con,$_POST['content']);

  $id="INSERT INTO trial(name,text,content)VALUES('$name','$text','$content')";
  if($id>0){
    $success = "Registration successful.";
  }else{
    echo "Please try after sometime";
  }
}
?>


<?php
// $server = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "portf";
 
// //Creating connection for mysqli
 
// $conn = new mysqli($server, $user, $pass, $dbname);
 
// //Checking connection
 
// if($conn->connect_error){
//  die("Connection failed:" . $conn->connect_error);
// }
 
// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $text = mysqli_real_escape_string($conn, $_POST['text']);
// $content = mysqli_real_escape_string($conn, $_POST['content']);
 
// $sql = "INSERT INTO trial (name, text, content) VALUES ('$name', '$text', '$content')";
 
// if($conn->query($sql) === TRUE){
//  echo "Record Added Sucessfully";
// }
// else
// {
//  echo "Error" . $sql . "<br/>" . $conn->error;
// }
// $conn->close();
?>

<div>
  <?php
  echo $success;
  ?>
</div>