<?php
require("../setting/connect_databes.php");
session_start();
if (isset($_POST["insertdoc"]) && isset($_SESSION["PatientId"])) {
    $patient_id = $_SESSION["PatientId"];
    $document_type = $_POST["document_type"];
    $date = date("Y-m-d");
    $selectDOC = mysqli_query($conn, "SELECT * FROM demand_document WHERE patient_id = $patient_id");
    $exist = false;
    if (mysqli_num_rows($selectDOC) > 0) {
        echo mysqli_num_rows($selectDOC);
        while ($rowDOC = mysqli_fetch_assoc($selectDOC)) {
            if ($rowDOC["document"] == $document_type) {
                $exist = true;
                $id = $rowDOC["id"];
                break;
            }
        }
    }
    if ($exist) {
        $_SESSION["succes"] = "تم طلب الوثيقة بنجاح";
        header("location:request_document.php");
    } else {
        $insertDOC = $conn->prepare("INSERT INTO `demand_document` ( `patient_id`, `document`, `date`) VALUES (?,?,?)");
        $insertDOC->bind_param("iss", $patient_id, $document_type, $date);
        if ($insertDOC->execute()) {
            $_SESSION["succes"] = "تم طلب الوثيقة بنجاح";
            header("location:request_document.php");
        } else {
            $_SESSION["error"] = "حدث خطأ ما";
            header("location:request_document.php");
        }
    }
}

?>