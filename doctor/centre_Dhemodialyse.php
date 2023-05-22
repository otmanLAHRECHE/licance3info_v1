<?php
require("../setting/header_profil_patient1.php");
if (isset($_SESSION['PationId'])) {
    if (isset($_POST['UPDAT'])) {
        $date = date('Y-m-d');
        $up_query = "UPDATE centre_d_hemodialyse SET 
        nom='" . $_POST['nom'] . "',
        prenome='" . $_POST['prenome'] . "',
        date_et_lieu_de_naissance='" . $_POST['date_et_lieu_de_naissance'] . "',
        situation_familiale='" . $_POST['situation_familiale'] . "',
        epouse='" . $_POST['epouse'] . "',
        profession='" . $_POST['profession'] . "',
        niveau_d_instruction='" . $_POST['niveau_d_instruction'] . "',
        adresse='" . $_POST['adresse'] . "',
        tel='" . $_POST['tel'] . "' WHERE patient_id='" . $_SESSION['PationId'] . "'";
        mysqli_query($conn, $up_query);
    }
    $query = mysqli_query($conn, "SELECT * FROM patient JOIN centre_d_hemodialyse ON patient.id = centre_d_hemodialyse.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
    $row_info = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        $query2 = mysqli_query($conn, "SELECT * FROM patient  WHERE id = '" . $_SESSION['PationId'] . "' AND status='2' "); //
        if (mysqli_num_rows($query2) == 0)
            header("location:patients.php");
        else {
            mysqli_query($conn, "INSERT INTO centre_d_hemodialyse (patient_id) VALUES ('" . $_SESSION['PationId'] . "')"); //
            $query = mysqli_query($conn, "SELECT * FROM patient JOIN centre_d_hemodialyse ON patient.id = centre_d_hemodialyse.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
            $row_info = mysqli_fetch_assoc($query);
        }
    }
}else
    header("location:patients.php");
?>
<head>
    <link rel="stylesheet" href="../css/style_forms.css">
</head>
<main id="main">
    <form action="" method="post">
        <legend><b> Centre D'hemodialyse :</b></legend>
        <fieldset style="width: 100%;  ">
            <label for="">NOM :</label><input name="nom" value="<?php print($row_info['nom']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">PRENOM :</label><input name="prenome" value="<?php print($row_info['prenome']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">DATE ET LIEU DE NAISSANCE :</label><input name="date_et_lieu_de_naissance" value="<?php print($row_info['date_et_lieu_de_naissance']) ;?>" type="date" class="fi1" required>
            <br>
            <br>
            <label for="">SITUATION FAMILIALE :</label><input name="situation_familiale" value="<?php print($row_info['situation_familiale']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">EPOUSE :</label><input name="epouse" value="<?php print($row_info['epouse']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">PROFESSION :</label><input name="profession" value="<?php print($row_info['profession']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">NIVEAU D'INSTRUCTION :</label><input name="niveau_d_instruction" value="<?php print($row_info['niveau_d_instruction']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">ADRESSE :</label><input name="adresse" value="<?php print($row_info['adresse']) ;?>" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">TEL :</label><input name="tel" value="<?php print($row_info['tel']) ;?>" type="number" class="fi1" required>
            <br>
            <br>
            <br>
            <input type="submit" name="UPDAT" value="حفظ">
        </fieldset>
    </form>
</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>