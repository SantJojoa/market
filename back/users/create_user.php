<?php
    include ("../config/cnx_db.php");
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $pass=$_POST['passwords'];
    $sql="insert into users(first_name,last_name,email,password)
    VALUES('$first_name','$last_name','$email','$pass')";
    if($conn->query($sql)===TRUE){ //User has been created successfully
        echo"<script>alert('User has been created successfully')</script>";
        header("refresh:0;url=http://127.0.0.1/market/front/users/login.html");
    }else{  //User dont be created
        //echo"Error: ".$conn->error;"<br>".$sql;
        echo"<script>alert('Email already exists')</script>";
        header("refresh:0;url=htpp://127.0.0.1/market/back/users/create_user.php");
    }
?>