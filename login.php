<?php
require_once('setting/connect_databes.php');
session_start();

if (isset($_POST['LOGIN'])) {

    if ($_POST["patient_medcin"] == "patient") {
         
            $email = $_POST['email'];
            $pass = $_POST['pass']; //md5($_POST['pass']);


   print     $select_id = " SELECT * FROM  `patient` WHERE `email`='$email' AND `password`='$pass' ";
        $info = mysqli_query($conn, $select_id);
        $row_info = mysqli_fetch_assoc($info);
        if (isset($row_info['id'])) {
            $_SESSION['PatientId'] = $row_info['id'];
            $_SESSION['PatientName'] = $row_info['prenom'];
            $_SESSION['PatientImage'] = $row_info['image_url'];
            $_SESSION["PatientStatus"] = $row_info['status'];
            header("location: patient/home.php");
        } else {
            $_SESSION['message'] = "Pleas Ckeck your info";
            header("location:javascript://history.go(-1)");
            exit;
            //     header("location:login.php");
        }
    } else if ($_POST["patient_medcin"] == "medcin") {
        if (isset($_POST['email']))
            $email = $_POST['email'];
        else
            $email = "";
        if (isset($_POST['pass']))
            $pass = $_POST['pass']; //md5($_POST['pass']);
        $select_id = " SELECT * FROM  `medcin` WHERE `email`='$email' AND `password`='$pass' ";
        $info = mysqli_query($conn, $select_id);
        $row_info = mysqli_fetch_assoc($info);
        if (isset($row_info['id'])) {
            $_SESSION['MedcinId'] = $row_info['id'];
            $_SESSION['MedcinName'] = $row_info['prenom_M'];
            header("location: doctor/home.php");
        }
    }

}

if (isset($_POST['LOGUP'])) {
}