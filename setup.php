<?php
 if(isset($_POST["submit"])){
     $fullname = $_POST["fullname"];
     $email = $_POST["email"];
     $phonenumber = $_POST["phonenumber"];
     $password =sha1($_POST[ "password"]);

    
    $insert_stmt="INSERT INTO new_users(fullname,Email,phone_number,password)values(?,?,?,?)";

    $stmt_insert= $con->prepare($insert_stmt);

    $result=$stmt_insert->execute([$fullname,$email,$phonenumber,$password]);

 
 }



?>
