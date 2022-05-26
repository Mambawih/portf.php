 <?php
include "database.php";
include "function.php";
$success="";

  $name=mysqli_real_escape_string($con,$_POST['name']);
  $text=mysqli_real_escape_string($con,$_POST['text']);
  $content=mysqli_real_escape_string($con,$_POST['content']);

  $id="INSERT INTO trial(name,text,content)VALUES('$name','$text','$content')";

  if($con->query($id) === TRUE){
     $success= "Record Added Sucessfully";
     ?>
     <script>
       window.location.href='index.php#success';
     </script>
     <?php
    }
    else
    {
     echo "Error" . $id . "<br/>" . $con->error;
     ?>
     <script>
       window.location.href='index.php#fail';
     </script>
     <?php
    }
    $con->close();

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
