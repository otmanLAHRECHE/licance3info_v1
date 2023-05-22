<?php
require("../setting/header_profil_patient1.php");
if (isset($_POST['pation_id']))
    $_SESSION['PationId'] = $_POST['pation_id'];
if (isset($_POST['UPDAT'])) {
    $up_query = "UPDATE examens_complementaires SET 
Examens_cardio_vasculaire_TA='" . $_POST['Examens_cardio_vasculaire_TA'] . "', 
Examens_cardio_vasculaire_FC ='" . $_POST['Examens_cardio_vasculaire_FC'] . "', 
Examens_cardio_vasculaire_ECG ='" . $_POST['Examens_cardio_vasculaire_ECG'] . "', 
Examens_cardio_vasculaire_Echo_coeur ='" . $_POST['Examens_cardio_vasculaire_Echo_coeur'] . "', 
Examens_cardio_vasculaire_ECV_Autres ='" . $_POST['Examens_cardio_vasculaire_ECV_Autres'] . "', 
Examen_pleauro_pulmonaire_TLT ='" . $_POST['Examen_pleauro_pulmonaire_TLT'] . "', 
Examen_pleauro_pulmonaire_Autres ='" . $_POST['Examen_pleauro_pulmonaire_Autres'] . "', 
Examen_uro_genital_Diurese ='" . $_POST['Examen_uro_genital_Diurese'] . "', 
Examen_uro_genital_Proteinurie24h ='" . $_POST['Examen_uro_genital_Proteinurie24h'] . "', 
Examen_uro_genital_Echographie_renale_ou_pelvienne ='" . $_POST['Examen_uro_genital_Echographie_renale_ou_pelvienne'] . "', 
Examen_uro_genital_TDM_abdominal ='" . $_POST['Examen_uro_genital_TDM_abdominal'] . "', 
Serologie_Hbs ='" . $_POST['Serologie_Hbs'] . "', 
Serologie_HCV ='" . $_POST['Serologie_HCV'] . "', 
Srologie_HIV ='" . $_POST['Srologie_HIV'] . "', 
Srologie_PBR ='" . $_POST['Srologie_PBR'] . "', 
AUTRES ='" . $_POST['AUTRES'] . "' WHERE patient_id='" . $_SESSION['PationId'] . "'";
    mysqli_query($conn, $up_query);
}
$query = mysqli_query($conn, "SELECT * FROM patient JOIN examens_complementaires ON patient.id = examens_complementaires.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
$row_info = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) == 0) {
    $query2 = mysqli_query($conn, "SELECT * FROM patient  WHERE id = '" . $_SESSION['PationId'] . "' AND status='2' "); //
    if (mysqli_num_rows($query2) == 0)
    echo $_SESSION['PationId'];
        // header("location:patients.php");
    else {
        mysqli_query($conn, "INSERT INTO examens_complementaires (patient_id) VALUES ('" . $_SESSION['PationId'] . "')"); //
        $query = mysqli_query($conn, "SELECT * FROM patient JOIN examens_complementaires ON patient.id = examens_complementaires.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
        $row_info = mysqli_fetch_assoc($query);
    }
}
?>
<main id="main">
    <fieldset style="width: 100%;  ">
        <legend><b> Examen complementairres :</b></legend>
        <br>
        <form action="" method="post">
            <fieldset>
                <legend><b> Examen cardio-vasculaire:</b></legend>
                <label for="">- TA :</label>
                <input name="Examens_cardio_vasculaire_TA" type="text" value="<?php print $row_info['Examens_cardio_vasculaire_TA']; ?>" required>
                <label for="">-FC :</label>
                <input name="Examens_cardio_vasculaire_FC" type="text" class="ex-co" value="<?php echo $row_info['Examens_cardio_vasculaire_FC']; ?>" required>
                <br>
                <br>
                <label for="">- ECG :</label>
                <input name="Examens_cardio_vasculaire_ECG" type="text" class="ex-co" value="<?php print $row_info['Examens_cardio_vasculaire_ECG']; ?>" required>
                <br>
                <br>
                <label for="">- Echo coeuf :</label>
                <input name="Examens_cardio_vasculaire_Echo_coeur" type="text" class="ex-co" value="<?php print $row_info['Examens_cardio_vasculaire_Echo_coeur']; ?>" required>
                <br>
                <br>
                <label for="">- Aitres :</label>
                <input name="Examens_cardio_vasculaire_ECV_Autres" type="text" class="ex-co" value="<?php echo $row_info['Examens_cardio_vasculaire_ECV_Autres']; ?>" required>
            </fieldset>
            <br>
            <fieldset>
                <legend><b> Examen plruro-pulmonaire :</b></legend>
                <label for="">-TLT :</label>
                <input name="Examen_pleauro_pulmonaire_TLT" type="text" class="ex-co" value="<?php echo $row_info['Examen_pleauro_pulmonaire_TLT']; ?>" required>
                <br>
                <label for="">-Autres :</label>
                <input name="Examen_pleauro_pulmonaire_Autres" type="text" class="ex-co" value="<?php echo $row_info['Examen_pleauro_pulmonaire_Autres']; ?>" required>
            </fieldset>
            <br>
            <fieldset>
                <legend> Examen uro-genital :</legend>
                <label for="">-Diurese :</label>
                <input name="Examen_uro_genital_Diurese" type="text" class="ex-co" value="<?php echo $row_info['Examen_uro_genital_Diurese']; ?>" required>
                <br>
                <label for="">- Proteinure des 24h :</label>
                <input name="Examen_uro_genital_Proteinurie24h" type="text" class="ex-co" value="<?php echo $row_info['Examen_uro_genital_Proteinurie24h']; ?>" required>
                <br>
                <label for="">- Echographie renale ou pelvienne :</label>
                <input name="Examen_uro_genital_Echographie_renale_ou_pelvienne" type="text" class="ex-co" value="<?php echo $row_info['Examen_uro_genital_Echographie_renale_ou_pelvienne']; ?>" required>
                <br>
                <br>
                <label for="">- TDM abdominal :</label>
                <input name="Examen_uro_genital_TDM_abdominal" type="text" class="ex-co" value="<?php echo $row_info['Examen_uro_genital_TDM_abdominal']; ?>" required>
            </fieldset>
            <br>
            <fieldset>
                <legend> Serologie :</legend>
                <label for="">- Hbs :</label>
                <input name="Serologie_Hbs" type="text" class="ex-co" value="<?php echo $row_info['Serologie_Hbs']; ?>" required>
                <label for="">- HCV :</label>
                <input name="Serologie_HCV" type="text" class="ex-co" value="<?php echo $row_info['Serologie_HCV']; ?>" required>
                <label for="">-HIV :</label><input name="Srologie_HIV" type="text" class="ex-co" value="<?php echo $row_info['Srologie_HIV']; ?>" required>
                <br>
                <label for="">PBR :</label><input name="Srologie_PBR" type="text" class="ex-co" value="<?php echo $row_info['Srologie_PBR']; ?>" required>
            </fieldset>
            <br>
            <fieldset>
                <legend><b>Autres : </b></legend>
                <input name="AUTRES" type="text" class="ex-co" value="<?php echo $row_info['AUTRES']; ?>" required>
            </fieldset>
            <input type="submit" name="UPDAT" value="حفظ">
        </form>
    </fieldset>
</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>