<?php
require("../setting/connect_databes.php");
session_start();
if (isset($_POST["INSERTRDV"]) && isset($_SESSION["PatientId"])) {

    $patient_id = $_SESSION["PatientId"];
    $date_ap = $_POST["date_ap"];
    $period = $_POST["period"];

    $_FILES["protocole"]["name"] = "protocole" . $_SESSION["PatientId"] . ".png";
    $_FILES["analytic"]["name"] = "analytic" . $_SESSION["PatientId"] . ".png";

    $protocole = $_FILES["protocole"]["name"];
    $analytic = $_FILES["analytic"]["name"];

    $protocole_path = "../patient/documents/$protocole";
    $analytic_path = "../patient/documents/$analytic";

    $selectNUM = mysqli_query($conn, "SELECT COUNT(*) FROM rendez_v");
    $row = mysqli_fetch_array($selectNUM);
    if (($row[0] < 40)) {
        $date = date('Y-m-d');
        $newRDV = $conn->prepare("INSERT INTO rendez_v (
             `patient_id`, `date_ap`, `period`, `protocole`, `analytic`
                ) VALUES (?,?,?,?,?)");
        $newRDV->bind_param("issss", $patient_id, $date_ap, $period, $protocole, $analytic);
        if ($newRDV->execute()) {
            move_uploaded_file($_FILES['protocole']['tmp_name'], $protocole_path);
            move_uploaded_file($_FILES['analytic']['tmp_name'], $analytic_path);
            $_SESSION["message"] = "تم حجز الموعد بنجاح";
            header("location:home.php");
        } else {
            $_SESSION["message"] = "حدث خطأ";
            header("location:appointment.php");
        }
    } else {
        $_SESSION["message"] = "تم بلوغ حد عدد المواعيد";
        header("location:appointment.php");

    }
}