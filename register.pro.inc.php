<?php

require_once("db.php");

if (isset($_POST['RegisterPro'])) {
     $clientName = $_POST['clientName'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $country = $_POST['country'];
     $email = $_POST['email'];
     $location = $_POST['location'];
     $status = $_POST['stat'];

     $sql = " INSERT INTO packages (name, address, phone, country, email, location, status, tracking_id) VALUES (?,?,?,?,?,?,?,?)";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location:register.php?error=sqlerror");
          exit();
     } else {
          $trackingId = strtoupper(substr(sha1(mt_rand()), 17, 10));
          mysqli_stmt_bind_param($stmt, "ssssssss", $clientName, $address, $phone, $country, $email, $location, $status, $trackingId);
          mysqli_stmt_execute($stmt);
          session_start();
          $_SESSION['success'] = 1;
          $_SESSION['message'] = "your package has been registered successfully and your tracking ID is " . $trackingId;
          header('Location:admin.my.php');
     }
}
