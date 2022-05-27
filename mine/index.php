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
        <title>Portfolio Admin Page</title>
        <link rel="icon" href="../img/avatar.jpg">
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