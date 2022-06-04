<?php
include "header.php";
$success="";
$fail="";

if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $subject=mysqli_real_escape_string($con,$_POST['subject']);
  $message=mysqli_real_escape_string($con,$_POST['message']);

  $id="INSERT INTO trial(name,mobile,email,subject,message)VALUES('$name','$mobile','$email','$subject','$message')";

  if($con->query($id) === TRUE){
     $success= "Message sent sucessfully.";
    //  redirect('index.php');
    }
    else
    {
     $fail = "Something went wrong, please try again later.";
    //    redirect('index.php');
    // omitted redirect functions as it doesn't show the messages
    // the $fail and $success messages
    }
    $con->close();
}

$sql = "select * from projects order by id limit 3";
$res = mysqli_query($con, $sql);
?>

<section class="container">
            <div class="content">
                <span><p>Name<br>
                    designation<br></p>
                <span class="something">
                    <input type="button" value="contact" class="btn" onclick="button()">
                </span>
                <span><p class="home-cont">Lorem ipsum sit dolar imet ipsum sit dolar</p></span>
                </span>
                <div class="img"><img class="prf-img" alt="Profile photo" src="img/avatar.jpg"></div>
            </div>
        </section>
        <section id="about" class="container about">
            <div class="abt-img">
                <img src="img/avatar.jpg" alt="Profile photo">
            </div>
            <div class="abt-content">
                <h1 class="heading">About me</h1>
                <p>Lorem ipsum sit dolar imet ipsum sit dolar imet ipsum sit <br>
                    dolar imet ipsum sit dolar imet ipsum sit dolar imet ipsum 
                    sit dolar imet ipsum sit dolar imet ipsum sit dolar imet</p>
            </div>
        </section>
        

        <!-- Project section -->
        
        <section id="projects" class="container projects">
            <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(96.612, 91.884, 90.365, 1)" offset="0%"></stop><stop stop-color="#171618" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,104L48,99.7C96,95,192,87,288,73.7C384,61,480,43,576,39C672,35,768,43,864,56.3C960,69,1056,87,1152,91C1248,95,1344,87,1440,69.3C1536,52,1632,26,1728,17.3C1824,9,1920,17,2016,30.3C2112,43,2208,61,2304,91C2400,121,2496,165,2592,173.3C2688,182,2784,156,2880,147.3C2976,139,3072,147,3168,125.7C3264,104,3360,52,3456,47.7C3552,43,3648,87,3744,99.7C3840,113,3936,95,4032,91C4128,87,4224,95,4320,104C4416,113,4512,121,4608,138.7C4704,156,4800,182,4896,177.7C4992,173,5088,139,5184,134.3C5280,130,5376,156,5472,177.7C5568,199,5664,217,5760,216.7C5856,217,5952,199,6048,190.7C6144,182,6240,182,6336,186.3C6432,191,6528,199,6624,173.3C6720,147,6816,87,6864,56.3L6912,26L6912,260L6864,260C6816,260,6720,260,6624,260C6528,260,6432,260,6336,260C6240,260,6144,260,6048,260C5952,260,5856,260,5760,260C5664,260,5568,260,5472,260C5376,260,5280,260,5184,260C5088,260,4992,260,4896,260C4800,260,4704,260,4608,260C4512,260,4416,260,4320,260C4224,260,4128,260,4032,260C3936,260,3840,260,3744,260C3648,260,3552,260,3456,260C3360,260,3264,260,3168,260C3072,260,2976,260,2880,260C2784,260,2688,260,2592,260C2496,260,2400,260,2304,260C2208,260,2112,260,2016,260C1920,260,1824,260,1728,260C1632,260,1536,260,1440,260C1344,260,1248,260,1152,260C1056,260,960,260,864,260C768,260,672,260,576,260C480,260,384,260,288,260C192,260,96,260,48,260L0,260Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="black" offset="0%"></stop><stop stop-color="black" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,130L48,112.7C96,95,192,61,288,52C384,43,480,61,576,95.3C672,130,768,182,864,190.7C960,199,1056,165,1152,130C1248,95,1344,61,1440,56.3C1536,52,1632,78,1728,112.7C1824,147,1920,191,2016,212.3C2112,234,2208,234,2304,208C2400,182,2496,130,2592,99.7C2688,69,2784,61,2880,56.3C2976,52,3072,52,3168,65C3264,78,3360,104,3456,108.3C3552,113,3648,95,3744,104C3840,113,3936,147,4032,156C4128,165,4224,147,4320,156C4416,165,4512,199,4608,203.7C4704,208,4800,182,4896,156C4992,130,5088,104,5184,86.7C5280,69,5376,61,5472,82.3C5568,104,5664,156,5760,186.3C5856,217,5952,225,6048,225.3C6144,225,6240,217,6336,212.3C6432,208,6528,208,6624,177.7C6720,147,6816,87,6864,56.3L6912,26L6912,260L6864,260C6816,260,6720,260,6624,260C6528,260,6432,260,6336,260C6240,260,6144,260,6048,260C5952,260,5856,260,5760,260C5664,260,5568,260,5472,260C5376,260,5280,260,5184,260C5088,260,4992,260,4896,260C4800,260,4704,260,4608,260C4512,260,4416,260,4320,260C4224,260,4128,260,4032,260C3936,260,3840,260,3744,260C3648,260,3552,260,3456,260C3360,260,3264,260,3168,260C3072,260,2976,260,2880,260C2784,260,2688,260,2592,260C2496,260,2400,260,2304,260C2208,260,2112,260,2016,260C1920,260,1824,260,1728,260C1632,260,1536,260,1440,260C1344,260,1248,260,1152,260C1056,260,960,260,864,260C768,260,672,260,576,260C480,260,384,260,288,260C192,260,96,260,48,260L0,260Z"></path></svg>
            <h1 class="heading">Projects</h1>
            <div class="pro-content">
            <?php 
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <li class="pro-list">
                            <h3><?php echo $i,") ",  $row['name'] ?></h3><hr>
                            <span class="pro-item">
                                <p><?php echo  $row['about']?></p>
                            </span>
                        </li>
                        <?php
                        $i++;
                        }?>

                <!-- <li class="pro-list">
                    <h3>Project 1</h3><hr>
                    <span class="pro-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel
                            <span id="dots">...</span>
                            <span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                            <button onclick="readMore1()" id="myBtn" class="readMoreBtn">Read more...</button>
                    </span>
                </li> -->
                
            </div>
        </section>
        
        <section id="contact" class="container contact">
            <h1 class="heading con-head">contact</h1>
            <div class="con-menu">
                <div class="con-item">
                    <li>name</li>
                    <li>address</li>
                    <li>email</li>
                    <li>phone</li>
                    <li>social
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </li>
                </div>
                <div class="con-form">
                    <span class="success"><?php echo $success ?></span>
                    <span class="danger"><?php echo $fail ?></span>
                    <form method="post">
                        <label class="con-label" for="Name">Name</label><br>
                            <input class="con-input" type="text" required name="name" placeholder="e.g. Isaac L Songate"><br>
                        <label class="con-label" for="Name">Mobile number(Optional)</label><br>
                            <input class="con-input" type="tel" pattern="[0-9]{10}" name="mobile" placeholder="e.g. 1234567890" maxlength="10"><br>
                        <label class="con-label" for="email">email</label><br>
                            <input class="con-input" type="email" required name="email" placeholder="e.g. songate.isaac@gmail.com"><br>
                        <label class="con-label" for="subject">subject</label><br>
                            <input class="con-input" type="text" name="subject" required placeholder="Subject"><br>
                        <label class="con-label" for="message">message</label><br>
                            <input class="con-input" type="text" name="message" required placeholder="Message(800 words)"><br>
                        <input class="con-submit" name="submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </section>

<?php
include "footer.php"
?>