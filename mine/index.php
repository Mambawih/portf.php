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
?>

        <section class="main-body main">
            <div id="page1">
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
                    <?php 
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td style="text-align:center;">
                                <?php 
                                $dateStr=strtotime($row['added_on']);
                                echo date('j M, Y',$dateStr);?><br><?php
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
                    <?php 
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td style="text-align:center;">
                                <?php 
                                $dateStr=strtotime($row['added_on']);
                                echo date('j M, Y',$dateStr);?><br><?php
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

        <section class="main-body3 main">
            <div id="page3">
                <table>
                    <thead>
                        <tr>
                            <th width="5%">Sl.no.</th>
                            <th width="15%">Naam</th>
                            <th width="20%">Mobile</th>
                            <th width="20%">Email</th>
                            <th width="25%">Subject</th>
                            <th width="15%">Added on</th>
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
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td style="text-align:center;">
                                <?php 
                                $dateStr=strtotime($row['added_on']);
                                echo date('j M, Y',$dateStr);?><br><?php
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
    </body>
</html>