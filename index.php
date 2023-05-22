<?php require_once('setting/connect_databes.php');
session_start();
?>
<?php 

 if (isset($_POST['OKAY'])) {
     if ($_POST["patient_medcin"] == "patient") {
         
            $email = $_POST['email'];
            $pass = $_POST['pass']; //md5($_POST['pass']);//


        $select_id = " SELECT * FROM  `patient` WHERE `email`='$email' AND `password`='$pass' ";
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

} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<script>

</script>

<body class="body_login">
    <div class="container">
        <box>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert">
                    <?php print $_SESSION['message'];
                    unset($_SESSION['message']); ?>
                </div>
            <?php } ?>
            <h1 class="center"><B>تسجيل الدخول</B></h1>

            <form action="" method="post" class="index_form">


                <label for="email" class="index_label">البريد الالكتروني :</label>
                <input type="email" class="form-control" required id="email" name="email" placeholder="أدخل بريدك الإلكتروني">

                <label for="pass" class="index_label">كلمة المرور :</label>
                <input type="password" required class="form-control" id="pass" name="pass">

                <input type="submit" class="btn" value="LOGIN" name="OKAY">
                <div>
                    <label for="medcin">الطبيب</label><input type="radio" id="medcin" name="patient_medcin" value="medcin">
                    <label for="patient">المريض</label><input type="radio" checked id="patient" name="patient_medcin" value="patient">
                </div>
            </form>
            <p>هل لديك حساب؟<a href="patient/logup.php" class="a">إنشاء حساب</a></p>
        </box>
    </div>
</body>

</html>