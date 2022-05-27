<?php
// if (!isset($_SESSION['login'])){?>
<!-- //     <script>window.location.href="login.php"</script>--><?php 
// }
include "../database.php";
include "../function.php";

$sql="select * from trial order by id";
$res=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <section>
            <div>
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
                        $id=$row['id'];
                        $name=$row['name'];
                        $mobile=$row['mobile'];
                        $email=$row['email'];
                        $subject=$row['subject'];
                        $message=$row['message'];?>
                        <tr>
                            <td style="text-align:center;"><?php echo $i; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $mobile; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $subject; ?></td>
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