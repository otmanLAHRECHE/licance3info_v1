<?php
session_start();
if(isset($_SESSION['PatientId'])){
    unset($_SESSION['PatientId']);
    header("location:../index.php");
}