<?php
session_start();
if(!isset($_SESSION['PatientId'])){
    header("location:../index.php");
}