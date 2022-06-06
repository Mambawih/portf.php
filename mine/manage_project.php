<?php
include 'header.php';
$success="";
$fail="";

if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $about=mysqli_real_escape_string($con,$_POST['about']);
    $link_text=mysqli_real_escape_string($con,$_POST['link_text']);
    $link=mysqli_real_escape_string($con,$_POST['link']);
    $tech=mysqli_real_escape_string($con,$_POST['tech']);

    $id="INSERT INTO projects(name,about,link_text,link,tech)VALUES('$name','$about','$link_text','$link','$tech')";

  if($con->query($id) === TRUE){
     $success= "Message sent sucessfully.";
    }
    else
    {
     $fail = "Something went wrong, please try again later.";
    }
    $con->close();
}

?>

<section class="container">
    <form action="" method="post">
        <span><?php echo $success, $fail?></span>
        <input type="text" required name="name" placeholder="Name of project">
        <input type="text" required name="about" placeholder="About the project">
        <input type="text" required name="link_text" placeholder="Link text">
        <input type="text" required name="link" placeholder="link">
        <input type="text" required name="tech" placeholder="tech used">
        <input type="submit" name="submit" value="submit">
    </form>
</section>