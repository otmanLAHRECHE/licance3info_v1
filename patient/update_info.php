<?php
require("../setting/connect_databes.php");
session_start();
if (isset($_SESSION["PatientId"]) && isset($_POST["SAVEINFO"])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $groupe_sanguin = $_POST['groupe_sanguin'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $sex = $_POST['sex'];
    $old_image_url = $_POST['old_image_url'];

    if (isset($_FILES["image_url"]["name"]) && !empty($_FILES["image_url"]["name"])) {

        // Get the file name and extension
        $filename = $_FILES["image_url"]["name"];
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        // Choose a unique name for the file and move it to the upload directory
        $newfilename = uniqid() . "." . $extension;
        $image_url = "uploads/" . $newfilename;
        move_uploaded_file($_FILES["image_url"]["tmp_name"], "uploads/" . $newfilename);
        @unlink($old_image_url);
    } else
        $image_url = $old_image_url;



    $datetime = date('Y-m-d H:i:s');
    $query = " UPDATE patient SET nom='$nom', telephone='$telephone', `prenom`='$prenom',  `date_naissance`='$date_naissance', `email`='$email', 
    `groupe_sanguin`='$groupe_sanguin', `address`='$address', `sex`='$sex',
    image_url = '$image_url',  updated_at='$datetime' WHERE id = $_SESSION[PatientId] ";
    $info = mysqli_query($conn, $query);
    $_SESSION['PatientName'] = $prenom;
    $_SESSION['PatientImage'] = $image_url;
    $_SESSION['message'] = "تم تحديث معلوماتك بنجاح";
    header("location:patient_info.php");
}