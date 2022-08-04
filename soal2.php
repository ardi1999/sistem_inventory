<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'inventory');
if (isset($_POST['login'])) {

} else { 
    header('location:login.php); 
}