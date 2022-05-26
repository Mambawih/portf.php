<?php
// if (!isset($_SESSION['login'])){?>
<!-- //     <script>window.location.href="login.php"</script>--><?php 
// }
include "../database.php";

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
                            <th width="20%">Text</th>
                            <th width="60%">Content</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $text=$row['text'];
                        $content=$row['content'];?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $text; ?></td>
                            <td><?php echo $content; ?></td>
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