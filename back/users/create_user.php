<?php
    include ("../config/cnx_db.php");
    $first_name=$_POST['f_name'];
    $last_name=$_POST['l_name'];
    $email=$_POST['email'];
    $pass=$_POST['passwd'];
    $sql="insert into users(f_name,l_name,email,passwd)
    VALUES('$first_name','$last_name','$email','$pass')";
    if($conn->query($sql)===TRUE){
        echo"User has been created succesfully";
    }else{
        echo"Error: ".$conn->error;"<br>".$sql;
    }
?>