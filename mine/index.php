<?php
session_start();
include "header.php";

// below code have bug
// not anymore....tadaaaaa!!!!!!
// the bug occured as you forgot to start session

if (!isset($_SESSION['ADMIN_LOGIN'])){
    redirect('login.php');
    exit();
}


$sql="select * from trial order by id";
$res=mysqli_query($con,$sql);
$sql1="select * from projects order by id";
$res1=mysqli_query($con,$sql1);
?>


        
        <section class="btn-links">
            <button class="page-btn" data-page="page1">Messages</button>
            <button class="page-btn" data-page="page2">Blogs</button>
            <button class="page-btn" data-page="page3">Projects</button>
        </section>
        <section class="main-body main">
            <div id="page1">
                <table>
                    <thead>
                        <tr>
                            <th width="5%">Sl.no.</th>
                            <th width="10%">Name</th>
                            <th width="10%">Mobile</th>
                            <th width="10%">Email</th>
                            <th width="10%">Subject</th>
                            <th width="45%">Message</th>
                            <th width="10%">Sent</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td style="text-align:center;"><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td style="text-align:justify;"><?php echo $row['message']; ?></td>
                            <td style="text-align:center;">
                                <?php 
                                // $dateStr=strtotime($row['added_on']);
                                // echo date('j M, Y',$dateStr);
                                ?>
                                <?php
                                echo time_elapsed_string($row['added_on'])
                                ?>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="main-body2 main">
            <div id="page2">
                <table>
                    <thead>
                        <tr>
                            <th width="5%">Sl.no.</th>
                            <th width="15%">Name</th>
                            <th width="20%">Mobile</th>
                            <th width="20%">Email</th>
                            <th width="25%">Subject</th>
                            <th width="15%">Added on</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="main-body3 main">
            <div id="page3">
                <span><a href="manage_project.php">Add items</a></span>
                <table>
                    <thead>
                        <tr>
                            <th width="5%">Sl.no.</th>
                            <th width="10%">Name</th>
                            <th width="20%">about</th>
                            <th width="10%">link text</th>
                            <th width="15%">link</th>
                            <th width="10%">tech used</th>
                            <th width="10%">Added on</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i=1;
                        while($row1=mysqli_fetch_assoc($res1)){
                        ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $i; ?></td>
                            <td><?php echo $row1['name']; ?></td>
                            <td style="text-align:justify;"><?php echo $row1['about']; ?></td>
                            <td><?php echo $row1['link_text']; ?></td>
                            <td><?php echo $row1['link']; ?></td>
                            <td><?php echo $row1['tech']; ?></td>
                            <td style="text-align:center;">
                                <?php
                                echo time_elapsed_string($row1['added_on'])
                                ?>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>