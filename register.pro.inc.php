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

     echo "$clientName";
}
