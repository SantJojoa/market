<?php include("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body> 
    <table align="center"  border="3">
        <tr >
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>..</th>
        </tr>
        <?php
            $sql="SELECT * from users";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['first_name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['email']."</td>
                            <td><a href='edit_user.php?id=".$row['id']."'><img src='../../front/icons/update.png.png'  width=30px></a> &nbsp;
                                <a href='delate_user.php?id=".$row['id']."'><img src='../../front/icons/delate.png.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
</body>
</html>