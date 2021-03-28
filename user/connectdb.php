<?php
$host = "localhost";
$user = "root";
$pws = "";
$database = "booking-a-dormitory-ch";

// Create connection
$conn = mysqli_connect($host, $user, $pws, $database);
// Check connection
if (!$conn) {
  die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
}
 // Change character set to utf8
mysqli_set_charset($conn,"utf8");
 
?>