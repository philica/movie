<?php
include 'db.php';
 if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $d = strtotime("today");
        $date = date("Y-m-d h:i:sa", $d);
        $sql = "INSERT INTO users (email,phone,password,role,is_deleted,created_at) VALUES ('$email','$phone','$password','user',0,'$date');";
        mysqli_query($con, $sql);
        header('location: ../public/theater/login.php');
   }

