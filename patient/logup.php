<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
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
            <h1 class="center"><B>إنشاء حساب </B></h1>
            <form action="logup.php" method="post" class="index_form">
                <input type="text" class="form-control mt2" required placeholder="الاسم" name="prenom">
                <input type="text" class="form-control mt2" required placeholder="اللقب" name="nom">
                <br>
                <input type="email" class="form-control mt2" required placeholder="البريد الالكتروني" name="email">
                <br>
                <input type="password" class="form-control mt2" required placeholder="كلمة السر" name="pass">
                <br>
                <input type="date" class="form-control mt2" required placeholder="تاريخ الميلاد" name="date_naissance">
                <input type="tel" class="form-control mt2" required placeholder="رقم الهاتف" name="telephone">
                <br>
                <input type="text" class="form-control mt2" required placeholder="مكان الميلاد" name="lieu_naissance">
                <input type="text" class="form-control mt2" required placeholder="مكان الاقامة" name="address">
                <br>
                <select name="groupe_sanguin" class="form-control mt2">
                    <option value="O+">O+</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
                <input type="submit" class="btn" value="تسجيل" name="LOGUP">
            </form>
            <p>هل لديك حساب؟<a href="../index.php" class="a">عودة</a></p>
        </box>
    </div>
</body>

</html>
<?php
require_once('../setting/connect_databes.php');
if (isset($_POST['LOGUP'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $lieu_naissance = $_POST['lieu_naissance'];
    $groupe_sanguin = $_POST['groupe_sanguin'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $pass = $_POST['pass'];

    $dattime = date('Y-m-d H:i:s');
    $pass = md5($pass);
    $stmt = $conn->prepare("INSERT INTO patient (nom, prenom, email, date_naissance, lieu_naissance, groupe_sanguin, `address`, telephone, `password`, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss", $nom, $prenom, $email, $date_naissance, $lieu_naissance, $groupe_sanguin, $address, $telephone, $pass, $dattime, $dattime);

    //  $query = " INSERT INTO patient (nom, prenom, `email`, date_naissance, lieu_naissance, groupe_sanguin, `address`, telephone, `password`, created_at, updated_at) 
    //   VALUES ('$nom', '$prenom', '$email', '$date_naissance', '$lieu_naissance', '$groupe_sanguin', '$address', '$telephone', '$pass', '$dattime', '$dattime') ";
    //   $info = mysqli_query($conn, $query) or die(mysqli_connect_error());
    //   $_SESSION['PatientId'] =  mysqli_insert_id($conn);
    //   $_SESSION['UserName'] = $name;



    if ($stmt->execute()) {

        $_SESSION["PatientId"] = $stmt->insert_id;
        $_SESSION['PatientName'] = $prenom;
        $_SESSION["PatientStatus"] = 1;
        $_SESSION['PatientImage'] = '';
        header("Location: home.php");
    } else {
        $_SESSION['message'] = "Pleas Ckeck your info";
        // header("location:javascript://history.go(-1)");
        // exit;
    }
}
?>