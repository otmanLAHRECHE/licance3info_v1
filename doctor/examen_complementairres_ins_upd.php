<?php
require("../setting/connect_databes.php");
session_start();
if (isset($_POST["ADD"]) && $_SESSION["MedcinId"]) {
    $patient_id = $_SESSION["patientId"];
    $Examens_cardio_vasculaire_TA = $_POST["Examens_cardio_vasculaire_TA"];
    $Examens_cardio_vasculaire_FC = $_POST["Examens_cardio_vasculaire_FC"];
    $Examens_cardio_vasculaire_ECG = $_POST["Examens_cardio_vasculaire_ECG"];
    $Examens_cardio_vasculaire_Echo_coeur = $_POST["Examens_cardio_vasculaire_Echo_coeur"];
    $Examens_cardio_vasculaire_ECV_Autres = $_POST["Examens_cardio_vasculaire_ECV_Autres"];
    $Examen_pleauro_pulmonaire_TLT = $_POST["Examen_pleauro_pulmonaire_TLT"];
    $Examen_pleauro_pulmonaire_Autres = $_POST["Examen_pleauro_pulmonaire_Autres"];
    $Examen_uro_genital_Diurese = $_POST["Examen_uro_genital_Diurese"];
    $Examen_uro_genital_Proteinurie24h = $_POST["Examen_uro_genital_Proteinurie24h"];
    $Examen_uro_genital_Echographie_renale_ou_pelvienne = $_POST["Examen_uro_genital_Echographie_renale_ou_pelvienne"];
    $Examen_uro_genital_TDM_abdominal = $_POST["Examen_uro_genital_TDM_abdominal"];
    $Serologie_Hbs = $_POST["Serologie_Hbs"];
    $Serologie_HCV = $_POST["Serologie_HCV"];
    $Srologie_HIV = $_POST["Srologie_HIV"];
    $Srologie_PBR = $_POST["Srologie_PBR"];
    $AUTRES = $_POST["AUTRES"];
    $select_ex_comp = $conn->prepare("INSERT INTO `examens_complementaires` (
        `patient_id`,
        `Examens_cardio_vasculaire_TA`,
        `Examens_cardio_vasculaire_FC`,
        `Examens_cardio_vasculaire_ECG`,
        `Examens_cardio_vasculaire_Echo_coeur`,
        `Examens_cardio_vasculaire_ECV_Autres`,
        `Examen_pleauro_pulmonaire_TLT`,
        `Examen_pleauro_pulmonaire_Autres`,
        `Examen_uro_genital_Diurese`,
        `Examen_uro_genital_Proteinurie24h`,
        `Examen_uro_genital_Echographie_renale_ou_pelvienne`,
        `Examen_uro_genital_TDM_abdominal`,
        `Serologie_Hbs`,
        `Serologie_HCV`,
        `Srologie_HIV`,
        `Srologie_PBR`,
        `AUTRES`
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $select_ex_comp->bind_param($patient_id, $Examens_cardio_vasculaire_TA, $Examens_cardio_vasculaire_FC, $Examens_cardio_vasculaire_ECG, $Examens_cardio_vasculaire_Echo_coeur, $Examens_cardio_vasculaire_ECV_Autres, $Examen_pleauro_pulmonaire_TLT, $Examen_pleauro_pulmonaire_Autres, $Examen_uro_genital_Diurese, $Examen_uro_genital_Proteinurie24h, $Examen_uro_genital_Echographie_renale_ou_pelvienne, $Examen_uro_genital_TDM_abdominal, $Serologie_Hbs, $Serologie_HCV, $Srologie_HIV, $Srologie_PBR, $AUTRES);
    if ($select_ex_comp->execute()) {
        // header("examen_complementairres.php");
    }
} else if (isset($_POST["SAVE"]) && $_SESSION["MedcinId"]) {
    $patientId = $_POST["patientId"];
    $Examens_cardio_vasculaire_TA = $_POST["Examens_cardio_vasculaire_TA"];
    $Examens_cardio_vasculaire_FC = $_POST["Examens_cardio_vasculaire_FC"];
    $Examens_cardio_vasculaire_ECG = $_POST["Examens_cardio_vasculaire_ECG"];
    $Examens_cardio_vasculaire_Echo_coeur = $_POST["Examens_cardio_vasculaire_Echo_coeur"];
    $Examens_cardio_vasculaire_ECV_Autres = $_POST["Examens_cardio_vasculaire_ECV_Autres"];
    $Examen_pleauro_pulmonaire_TLT = $_POST["Examen_pleauro_pulmonaire_TLT"];
    $Examen_pleauro_pulmonaire_Autres = $_POST["Examen_pleauro_pulmonaire_Autres"];
    $Examen_uro_genital_Diurese = $_POST["Examen_uro_genital_Diurese"];
    $Examen_uro_genital_Proteinurie24h = $_POST["Examen_uro_genital_Proteinurie24h"];
    $Examen_uro_genital_Echographie_renale_ou_pelvienne = $_POST["Examen_uro_genital_Echographie_renale_ou_pelvienne"];
    $Examen_uro_genital_TDM_abdominal = $_POST["Examen_uro_genital_TDM_abdominal"];
    $Serologie_Hbs = $_POST["Serologie_Hbs"];
    $Serologie_HCV = $_POST["Serologie_HCV"];
    $Srologie_HIV = $_POST["Srologie_HIV"];
    $Srologie_PBR = $_POST["Srologie_PBR"];
    $AUTRES = $_POST["AUTRES"];
    $update_ex_comp = mysqli_query($conn, "UPDATE `examens_complementaires` SET
    `Examens_cardio_vasculaire_TA` = '$Examens_cardio_vasculaire_TA',
    `Examens_cardio_vasculaire_FC` = '$Examens_cardio_vasculaire_FC',
    `Examens_cardio_vasculaire_ECG` = '$Examens_cardio_vasculaire_ECG',
    `Examens_cardio_vasculaire_Echo_coeur` = '$Examens_cardio_vasculaire_Echo_coeur',
    `Examens_cardio_vasculaire_ECV_Autres` = '$Examens_cardio_vasculaire_ECV_Autres',
    `Examen_pleauro_pulmonaire_TLT` = '$Examen_pleauro_pulmonaire_TLT',
    `Examen_pleauro_pulmonaire_Autres` = '$Examen_pleauro_pulmonaire_Autres',
    `Examen_uro_genital_Diurese` = '$Examen_uro_genital_Diurese',
    `Examen_uro_genital_Proteinurie24h` = '$Examen_uro_genital_Proteinurie24h',
    `Examen_uro_genital_Echographie_renale_ou_pelvienne` = '$Examen_uro_genital_Echographie_renale_ou_pelvienne',
    `Examen_uro_genital_TDM_abdominal` = '$Examen_uro_genital_TDM_abdominal',
    `Serologie_Hbs` = '$Serologie_Hbs',
    `Serologie_HCV` = '$Serologie_HCV',
    `Srologie_HIV` = '$Srologie_HIV',
    `Srologie_PBR` = '$Srologie_PBR',
    `AUTRES` = '$AUTRES' WHERE `id_ex_co` = $patientId");
    if ($update_ex_comp) {
        header("examen_complementairres.php");
    }
} ?>