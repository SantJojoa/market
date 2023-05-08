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
        ?>
    </table>
</body>
</html>