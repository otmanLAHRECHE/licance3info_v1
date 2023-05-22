<?php
require("../setting/connect_databes.php");
require("../setting/session_medcin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient profil</title>
    <link rel="stylesheet" href="../css/style_forms.css">
</head>

<div class="sidebar" id="sidebar">
    <div class="patient-info">
        <img src="OIP.jpg" alt="Patient Image">

    </div>
    <ul class="nav-menu">
        <li>
            <a href="patients.php">dossier patients</a>
        </li>
        <li>
            <a href="examen_complementairres.php">Examens Complementaires</a>
        </li>
        <li>
            <a href="protocole_Dhemodialyse.php">Protcole D'hemodialyse</a>
        </li>
        <li>
            <a href="centre_Dhemodialyse.php">Centre D'hemodialyse</a>
        </li>
        <li>
            <a href="examen_intial.php">Examen Initial</a>
        </li>
        <li>
            <a href="old_examen_boilogequi.php">Examen Biologique</a>
        </li>
    </ul>
</div>