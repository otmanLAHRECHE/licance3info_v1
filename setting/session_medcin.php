<?php
session_start();
if(!isset($_SESSION['MedcinId'])){
    header("location:../index.php");
}