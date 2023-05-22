<?php
require("../setting/header_profil_patient1.php");
if (isset($_SESSION['PationId'])) {
    if (isset($_POST['UPDAT'])) {
        date('Y-m-d');
        $KT_jugulaire= isset($_POST['KT_jugulaire']) ? "true" : "false";
        $KT_Femoral= isset($_POST['KT_Femoral']) ? "true" : "false";
        $Fistule_Distale_Dte= isset($_POST['Fistule_Distale_Dte']) ? "true" : "false";
        $Fistule_Distale_Gche= isset($_POST['Fistule_Distale_Gche']) ? "true" : "false";
        $Fistule_Proximale_Dte= isset($_POST['Fistule_Proximale_Dte']) ? "true" : "false";
        $Fistule_Proximale_Gcho= isset($_POST['Fistule_Proximale_Gcho']) ? "true" : "false";
        $Profil_serologique_Ag_Hbs= isset($_POST['Profil_serologique_Ag_Hbs']) ? "true" : "false";
        $Profil_serologique_Ag_HCV= isset($_POST['Profil_serologique_Ag_HCV']) ? "true" : "false";
        $Profil_serologique_Ag_HIV= isset($_POST['Profil_serologique_Ag_HIV']) ? "true" : "false";
        $Profil_serologique_TPHA= isset($_POST['Profil_serologique_TPHA']) ? "true" : "false";
        $up_query = "UPDATE protocole_d_hemodialyse SET 
        Diagnostic_Etiologique='" . $_POST['Diagnostic_Etiologique'] . "', 
        Nephropathie_causale='" . $_POST['Nephropathie_causale'] . "', 
        Debut_de_dialyse='" . $_POST['Debut_de_dialyse'] . "', 
        Mode_de_Traitement='" . $_POST['Mode_de_Traitement'] . "', 
        Duree_de_la_seance='" . $_POST['Duree_de_la_seance'] . "', 
        Abord_vasculaire='" . $_POST['Abord_vasculaire'] . "', 
        KT_jugulaire='" . $KT_jugulaire . "', 
        KT_Femoral='" . $KT_Femoral . "', 
        Date_de_mise_en_place='" . $_POST['Date_de_mise_en_place'] . "', 
        Date_d_ablation='" . $_POST['Date_d_ablation'] . "', 
        Infection_du_KT='" . $_POST['Infection_du_KT'] . "', 
        Infection_du_KT_Le_Germe='" . $_POST['Infection_du_KT_Le_Germe'] . "', 
        Infection_du_KT_ATB='" . $_POST['Infection_du_KT_ATB'] . "', 
        Fistule_Distale_Dte='" . $Fistule_Distale_Dte . "', 
        Fistule_Distale_Gche='" . $Fistule_Distale_Gche . "', 
        Fistule_Proximale_Dte='" . $Fistule_Proximale_Dte . "', 
        Fistule_Proximale_Gcho='" . $Fistule_Proximale_Gcho . "', 
        Fistule_Date_de_confection='" . $_POST['Fistule_Date_de_confection'] . "', 
        Fistule_Par_le_chirurgien='" . $_POST['Fistule_Par_le_chirurgien'] . "', 
        Fistule_Hopital='" . $_POST['Fistule_Hopital'] . "', 
        Debit_de_la_pompe='" . $_POST['Debit_de_la_pompe'] . "', 
        Heparinisation_du_circuit_extra_corporel='" . $_POST['Heparinisation_du_circuit_extra_corporel'] . "', 
        Poids_de_base='" . $_POST['Poids_de_base'] . "', 
        Prise_de_poids_inter_dialytique='" . $_POST['Prise_de_poids_inter_dialytique'] . "', 
        TA_avant_dialyse='" . $_POST['TA_avant_dialyse'] . "', 
        TA_apres_dialyse='" . $_POST['TA_apres_dialyse'] . "', 
        Profil_serologique_Ag_Hbs='" . $Profil_serologique_Ag_Hbs . "', 
        Profil_serologique_Ag_HCV='" . $Profil_serologique_Ag_HCV . "', 
        Profil_serologique_Ag_HIV='" . $Profil_serologique_Ag_HIV . "', 
        Profil_serologique_TPHA='" . $Profil_serologique_TPHA . "', 
        Vaccination_anti_hepatite_B_1er_Dose='" . $_POST['Vaccination_anti_hepatite_B_1er_Dose'] . "', 
        Vaccination_anti_hepatite_B_2eme_Dose='" . $_POST['Vaccination_anti_hepatite_B_2eme_Dose'] . "', 
        Vaccination_anti_hepatite_B_3eme_Dose='" . $_POST['Vaccination_anti_hepatite_B_3eme_Dose'] . "', 
        Vaccination_anti_hepatite_B_1er_Rappel='" . $_POST['Vaccination_anti_hepatite_B_1er_Rappel'] . "', 
        Vaccination_anti_hepatite_B_2eme_Rappel='" . $_POST['Vaccination_anti_hepatite_B_2eme_Rappel'] . "', 
        Tares_associes='" . $_POST['Tares_associes'] . "', 
        TRAITEMENT='" . $_POST['TRAITEMENT'] . "' WHERE patient_id='" . $_SESSION['PationId'] . "'";
        mysqli_query($conn, $up_query);
    } 
    $query = mysqli_query($conn, "SELECT * FROM patient JOIN protocole_d_hemodialyse ON patient.id = protocole_d_hemodialyse.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
    $row_info = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        $query2 = mysqli_query($conn, "SELECT * FROM patient  WHERE id = '" . $_SESSION['PationId'] . "' AND status='2' "); //
        if (mysqli_num_rows($query2) == 0)
            header("location:patients.php");
        else {
            mysqli_query($conn, "INSERT INTO protocole_d_hemodialyse (patient_id) VALUES ('" . $_SESSION['PationId'] . "')"); //
            $query = mysqli_query($conn, "SELECT * FROM patient JOIN protocole_d_hemodialyse ON patient.id = protocole_d_hemodialyse.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
            $row_info = mysqli_fetch_assoc($query);
        }
    }
}else
    header("location:patients.php");?>

<main id="main">
    <fieldset style="width: 100%; ">
        <legend><b> PROTOCOLE D'HEMODIALYSE</b></legend>
        <br>
        <form action="" method="post">
            <fieldset>
                <label for="">Diagnostic Etiologique :</label>
                <input value="<?php print($row_info['Diagnostic_Etiologique']);?>" type="text" class="fi1" name="Diagnostic_Etiologique" required>
                <br>
                <br>
                <label for="">Nephropathie causale :</label>
                <input value="<?php print($row_info['Nephropathie_causale']);?>" type="text" class="fi1" name="Nephropathie_causale" required>
                <br>
                <br>
                <label for="">Debut de dialyse :</label>
                <input value="<?php print($row_info['Debut_de_dialyse']);?>" type="text" class="fi1" name="Debut_de_dialyse" required>
                <br>
                <br>
                <label for="">Mode de Traitement :</label>
                <input value="<?php print($row_info['Mode_de_Traitement']);?>" type="text" class="fi1" name="Mode_de_Traitement" required>
                <br>
                <br>
                <label for="">duree de la seance :</label>
                <input value="<?php print($row_info['Duree_de_la_seance']);?>" type="text" class="fi1" name="Duree_de_la_seance" required>
                <br>
                <br>
                <label for="">Abord vasculaire :</label>
                <input value="<?php print($row_info['Abord_vasculaire']);?>" type="text" class="fi1" name="Abord_vasculaire" required>
            </fieldset>
            <br>
            <fieldset>
                <legend><B>- KT :</B></legend>
                <br>
                <label for="" class="label1">- jugulaire :</label>
                <input <?php if($row_info['KT_jugulaire'] =='true') echo "checked"; ?> type="checkbox" name="KT_jugulaire">
                <label for="" class="label1">- Femoral :</label>
                <input <?php if($row_info['KT_Femoral'] =='true') echo "checked"; ?> type="checkbox" name="KT_Femoral">
                <br>
                <br>
                <label for="">- Date de mise en place :</label>
                <input value="<?php print($row_info['Date_de_mise_en_place']);?>" type="date" name="Date_de_mise_en_place" required>
                <label for="">- Date d'ablation :</label>
                <input value="<?php print($row_info['Date_d_ablation']);?>" type="date" name="Date_d_ablation" required>
                <br>
                <br>
                <label for=Infection_du_KT"">-Infection de KT :</label>
                <label for="" class="label1">oui</label>
                <input value="oui" type="radio" name="Infection_du_KT" <?php if($row_info['Infection_du_KT'] =='oui') echo "checked"; ?>>
                <label for="" class="label1">Non</label>
                <input value="Non" type="radio" name="Infection_du_KT" <?php if($row_info['Infection_du_KT'] =='Non') echo "checked"; ?>>
                <br>
                <br>
                <label for="">-Le Germe :</label><input value="<?php print($row_info['Infection_du_KT_Le_Germe']);?>" type="text" class="fi1" name="Infection_du_KT_Le_Germe" required>
                <br>
                <br>
                <label for="">- ATB :</label><input value="<?php print($row_info['Infection_du_KT_ATB']);?>" type="text" class="fi1" name="Infection_du_KT_ATB" required>
            </fieldset>
            <br>
            <fieldset>
                <legend><b>- Fistule ::</b></legend>
                <br>
                <br>
                <label for="">- Distale </label>
                <label for="" class="label1"> Dte </label>
                <input <?php if($row_info['Fistule_Distale_Dte'] =='true') echo "checked"; ?> type="checkbox" name="Fistule_Distale_Dte">
                <label for="" class="label1"> Gcho </label>
                <input <?php if($row_info['Fistule_Distale_Gche'] =='true') echo "checked"; ?> type="checkbox" name="Fistule_Distale_Gche">
                <br>
                <br>
                <label for="">- Proximale </label>
                <label for="" class="label1"> Dte </label>
                <input <?php if($row_info['Fistule_Proximale_Dte'] =='true') echo "checked"; ?> type="checkbox" name="Fistule_Proximale_Dte">
                <label for="" class="label1"> Gcho </label>
                <input <?php if($row_info['Fistule_Proximale_Gcho'] =='true') echo "checked"; ?> type="checkbox" name="Fistule_Proximale_Gcho">
                <br>
                <br>
                <label for="">-Date de confection :</label>
                <input value="<?php print($row_info['Fistule_Date_de_confection']);?>" type="date" class="fi1" name="Fistule_Date_de_confection" required>
                <br>
                <br>
                <label for="">- Par le coirgien :</label>
                <input value="<?php print($row_info['Fistule_Par_le_chirurgien']);?>" type="text" class="fi1" name="Fistule_Par_le_chirurgien" required>
                <br>
                <br>
                <label for="">-Hopital :</label>
                <input value="<?php print($row_info['Fistule_Hopital']);?>" type="text" class="fi1" name="Fistule_Hopital" required>
                <br>
                <br>
                <label for="">- Debit de la pompe :</label>
                <input value="<?php print($row_info['Debit_de_la_pompe']);?>" type="text" style="width: 25%;" class="fil1" name="Debit_de_la_pompe" required>
                <label for="">- Heparinisation du circuit extra corpel :</label>
                <input value="<?php print($row_info['Heparinisation_du_circuit_extra_corporel']);?>" type="text" style="width: 25%;" class="fil1" name="Heparinisation_du_circuit_extra_corporel" required>
                <br>
                <br>
                <label for="">- Poids de base :</label>
                <input value="<?php print($row_info['Poids_de_base']);?>" type="text" style="width: 27%;" class="fil1" name="Poids_de_base" required>
                <labe for="">- Prist de poids inter dialytique :</label>
                <input value="<?php print($row_info['Prise_de_poids_inter_dialytique']);?>" type="text" style="width: 30%;" class="fil1" name="Prise_de_poids_inter_dialytique" required>
                <br>
                <br>
                <label for="">- TA avent dialyse :</label>
                <input value="<?php print($row_info['TA_avant_dialyse']);?>" type="text" style="width: 28%;" class="fil1" name="TA_avant_dialyse" required>
                <label for="">- TA apres dialyse :</label>
                <input value="<?php print($row_info['TA_apres_dialyse']);?>" type="text" style="width: 41.5%;" class="fil1" name="TA_apres_dialyse" required>
                <br>
                <br>
                <label for="">Profil serologie :</label>
                <label for="" class="label1">Ag Hbs :</label>
                <input type="checkbox" <?php if($row_info['Profil_serologique_Ag_Hbs'] =='true') echo "checked"; ?> name="Profil_serologique_Ag_Hbs">
                <label for="" class="label1">Ag HCV :</label>
                <input type="checkbox" <?php if($row_info['Profil_serologique_Ag_HCV'] =='true') echo "checked"; ?> name="Profil_serologique_Ag_HCV">
                <label for="" class="label1">Ag HIV :</label>
                <input type="checkbox" <?php if($row_info['Profil_serologique_Ag_HIV'] =='true') echo "checked"; ?> name="Profil_serologique_Ag_HIV">
                <label for="" class="label1">Ag TPHV :</label>
                <input type="checkbox" <?php if($row_info['Profil_serologique_TPHA'] =='true') echo "checked"; ?> name="Profil_serologique_TPHA">
                <br>
                <br>
                <label for="">Vaccination anti-hepatite B :</label>
                <br>
                <strong>1 Dose</strong><input value="<?php print($row_info['Vaccination_anti_hepatite_B_1er_Dose']);?>" type="date" class="fil1" name="Vaccination_anti_hepatite_B_1er_Dose" required> <label for=""></label>
                <br>
                <strong>2 Dose</strong><input value="<?php print($row_info['Vaccination_anti_hepatite_B_2eme_Dose']);?>" type="date" class="fil1" name="Vaccination_anti_hepatite_B_2eme_Dose" required> <label for=""></label>
                <br>
                <strong>3 Dose</strong><input value="<?php print($row_info['Vaccination_anti_hepatite_B_3eme_Dose']);?>" type="date" class="fil1" name="Vaccination_anti_hepatite_B_3eme_Dose" required> <label for=""></label>
                <br>
                <strong>1 Rappel</strong><input value="<?php print($row_info['Vaccination_anti_hepatite_B_1er_Rappel']);?>" type="date" class="fil1" name="Vaccination_anti_hepatite_B_1er_Rappel" required> <label for=""></label>
                <br>
                <strong>2 Rappel</strong><input value="<?php print($row_info['Vaccination_anti_hepatite_B_2eme_Rappel']);?>" type="date" class="fil1" name="Vaccination_anti_hepatite_B_2eme_Rappel" required> <label for=""></label>
                <br>
                <br>
                <label for="">Tares associes :</label><input value="<?php print($row_info['Tares_associes']);?>" type="text" class="fi1" name="Tares_associes" required>
                <br>
                <br>
                <label for="">TRAITEMENT :</label><input value="<?php print($row_info['TRAITEMENT']);?>" type="text" class="fi1" name="TRAITEMENT" required>
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