<?php 
if (isset($_POST["SUIVANT_doc"])) {
    echo "aaaaaaaaaaaaaaa";
    $row_of_patient = $_POST["patientsSEL"];
    $DOCtype = $_POST["DOCtype"];
    if ($DOCtype == "ordennance.php" && count($row_of_patient) == 1) {
        session_start();
        $_SESSION['patientId'] = $row_of_patient[0];
        header("location:../doctor/$DOCtype");
    }
    if ($DOCtype == "protocole.php")
    if ($DOCtype == "certaficat.php")
    if ($DOCtype == "les_analys1.php")
}

?>