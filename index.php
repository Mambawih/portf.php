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
     ?>
     <script>
       window.location.href='index.php#contact'
     </script>
     <?php
    }
    else
    {
     $fail = "Something went wrong, please try again later."
     ?>
     <script>
       window.location.href='index.php#contact';
     </script>
     <?php
    }
    $con->close();
}

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
                <div class="img"><img alt="Profile photo" src="img/avatar.jpg"></div>
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
                <li class="pro-list">
                    <h3>Project 1</h3><hr>
                    <span class="pro-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel
                            <span id="dots">...</span>
                            <span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                            <button onclick="readMore1()" id="myBtn" class="readMoreBtn">Read more...</button>
                    </span>
                </li>
                <li class="pro-list">
                    <h3>Project 2</h3><hr>
                    <span class="pro-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel
                            <span id="dots1">...</span>
                            <span id="more1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <button onclick="readMore2()" id="myBtn1" class="readMoreBtn">Read more...</button>
                    </span>
                </li>
                
            </div>
        </section>
        
        <section id="contact" class="container contact">
            <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 250" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(129.853, 119.058, 115.592, 1)" offset="0%"></stop><stop stop-color="#171618" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,125L60,120.8C120,117,240,108,360,104.2C480,100,600,100,720,120.8C840,142,960,183,1080,195.8C1200,208,1320,192,1440,191.7C1560,192,1680,208,1800,204.2C1920,200,2040,175,2160,162.5C2280,150,2400,150,2520,150C2640,150,2760,150,2880,145.8C3000,142,3120,133,3240,141.7C3360,150,3480,175,3600,154.2C3720,133,3840,67,3960,70.8C4080,75,4200,150,4320,187.5C4440,225,4560,225,4680,212.5C4800,200,4920,175,5040,154.2C5160,133,5280,117,5400,95.8C5520,75,5640,50,5760,41.7C5880,33,6000,42,6120,75C6240,108,6360,167,6480,166.7C6600,167,6720,108,6840,75C6960,42,7080,33,7200,62.5C7320,92,7440,158,7560,162.5C7680,167,7800,108,7920,104.2C8040,100,8160,150,8280,154.2C8400,158,8520,117,8580,95.8L8640,75L8640,250L8580,250C8520,250,8400,250,8280,250C8160,250,8040,250,7920,250C7800,250,7680,250,7560,250C7440,250,7320,250,7200,250C7080,250,6960,250,6840,250C6720,250,6600,250,6480,250C6360,250,6240,250,6120,250C6000,250,5880,250,5760,250C5640,250,5520,250,5400,250C5280,250,5160,250,5040,250C4920,250,4800,250,4680,250C4560,250,4440,250,4320,250C4200,250,4080,250,3960,250C3840,250,3720,250,3600,250C3480,250,3360,250,3240,250C3120,250,3000,250,2880,250C2760,250,2640,250,2520,250C2400,250,2280,250,2160,250C2040,250,1920,250,1800,250C1680,250,1560,250,1440,250C1320,250,1200,250,1080,250C960,250,840,250,720,250C600,250,480,250,360,250C240,250,120,250,60,250L0,250Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="black" offset="0%"></stop><stop stop-color="black" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,175L60,154.2C120,133,240,92,360,95.8C480,100,600,150,720,170.8C840,192,960,183,1080,158.3C1200,133,1320,92,1440,79.2C1560,67,1680,83,1800,108.3C1920,133,2040,167,2160,158.3C2280,150,2400,100,2520,87.5C2640,75,2760,100,2880,125C3000,150,3120,175,3240,179.2C3360,183,3480,167,3600,158.3C3720,150,3840,150,3960,145.8C4080,142,4200,133,4320,120.8C4440,108,4560,92,4680,104.2C4800,117,4920,158,5040,150C5160,142,5280,83,5400,79.2C5520,75,5640,125,5760,133.3C5880,142,6000,108,6120,108.3C6240,108,6360,142,6480,166.7C6600,192,6720,208,6840,204.2C6960,200,7080,175,7200,137.5C7320,100,7440,50,7560,37.5C7680,25,7800,50,7920,62.5C8040,75,8160,75,8280,91.7C8400,108,8520,142,8580,158.3L8640,175L8640,250L8580,250C8520,250,8400,250,8280,250C8160,250,8040,250,7920,250C7800,250,7680,250,7560,250C7440,250,7320,250,7200,250C7080,250,6960,250,6840,250C6720,250,6600,250,6480,250C6360,250,6240,250,6120,250C6000,250,5880,250,5760,250C5640,250,5520,250,5400,250C5280,250,5160,250,5040,250C4920,250,4800,250,4680,250C4560,250,4440,250,4320,250C4200,250,4080,250,3960,250C3840,250,3720,250,3600,250C3480,250,3360,250,3240,250C3120,250,3000,250,2880,250C2760,250,2640,250,2520,250C2400,250,2280,250,2160,250C2040,250,1920,250,1800,250C1680,250,1560,250,1440,250C1320,250,1200,250,1080,250C960,250,840,250,720,250C600,250,480,250,360,250C240,250,120,250,60,250L0,250Z"></path></svg> -->
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
                    <?php echo $success ?>
                    <?php echo $fail ?>
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