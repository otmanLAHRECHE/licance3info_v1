<?php
require("../setting/connect_databes.php");
require("../setting/session_patint.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8-general-Ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body_home">
    <div class="sidebarr">
        <div class="patient-info">

            <img src="<?php isset($_SESSION['PatientImage']) ? print $_SESSION['PatientImage'] : ''; ?>"
                alt="Patient Image">
            <h3 class="h3prs">
                <?php echo $_SESSION['PatientName'];
                ?>
            </h3>
        </div>
        <ul class="nav-menu">
            <a class="a" href="home.php">
                <li class="la_click">الـرئـيــســـيــــــــة</li>
            </a>
            <a class="a" href="patient_info.php">
                <li class="la_click">معلومات المريض </li>
            </a>
            <?php
            if ($_SESSION["PatientStatus"] == 1) { // 1 means Extern patient 
                ?>
                <a class="a" href="appointment.php">
                    <li class="la_click"> حجـــــز مـــــوعد
                    </li>
                </a>
                <?php
            }
            if ($_SESSION["PatientStatus"] == 2) { // 2 means Intern patient 
                ?>
                <a class="a" href="request_document.php">
                    <li class="la_click"> طـلـــــب وثـــيقــة
                    </li>
                </a>
                <?php
            }
            ?>
            <a href="contact.php" class="a">
                <li class="la_click "> اتــصــــل بـــــنـــا</li>
            </a>
            <a href="logout.php" class="a">
                <li class="la_click " style="color: red"> تســجيل الخــروج</li>
            </a>
        </ul>

    </div>
    <div class="main_home">