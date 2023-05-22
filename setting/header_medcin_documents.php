<?php
require("../setting/connect_databes.php");
require("../setting/session_medcin.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="patient-info">
            <img src="OIP.jpg" alt="Patient Image">

        </div>
        <ul class="nav-menu1">
            <li>
                <a href="demandes.php">demandes</a>
            </li>
            <li>
                <a href="../doctor/les_document/protocol.php">PROTOCOL</a>
            </li>
            <li>
                <a href="les_analys1.php">LES ANALYSE</a>
            </li>

            <li>
                <a href="certificat_medical.php">CERTIFICAT MEDICAL</a>
            </li>
            <li>
                <a href="ordennance.php">ORDONNANCE</a>
            </li>


        </ul>
    </div>