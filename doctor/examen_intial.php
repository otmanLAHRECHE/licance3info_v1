<?php
require("../setting/header_profil_patient1.php");
if (isset($_SESSION['PationId'])) {
    if (isset($_POST['UPDAT'])) {
        date('Y-m-d');
        $up_query = "UPDATE examen_initial SET
        Glycemie_a_jeun='" . $_POST['Glycemie_a_jeun'] . "',
        Bilan_hematologique_Groupe='" . $_POST['Bilan_hematologique_Groupe'] . "',
        Bilan_hematologique_FNS_GB='" . $_POST['Bilan_hematologique_FNS_GB'] . "',
        Bilan_hematologique_FNS_Hb='" . $_POST['Bilan_hematologique_FNS_Hb'] . "',
        Bilan_hematologique_FNS_Hte='" . $_POST['Bilan_hematologique_FNS_Hte'] . "',
        Bilan_hematologique_FNS_Plaquettes='" . $_POST['Bilan_hematologique_FNS_Plaquettes'] . "',
        Bilan_hematologique_Equilibre='" . $_POST['Bilan_hematologique_Equilibre'] . "',
        Bilan_hematologique_TP='" . $_POST['Bilan_hematologique_TP'] . "',
        Bilan_hematologique_TH='" . $_POST['Bilan_hematologique_TH'] . "',
        Bilan_hematologique_TS='" . $_POST['Bilan_hematologique_TS'] . "',
        Bilan_renal_Uree='" . $_POST['Bilan_renal_Uree'] . "',
        Bilan_renal_Creat='" . $_POST['Bilan_renal_Creat'] . "',
        Bilan_renal_Ac_Urique='" . $_POST['Bilan_renal_Ac_Urique'] . "',
        Bilan_hepatique_Transaminases_SGOT='" . $_POST['Bilan_hepatique_Transaminases_SGOT'] . "',
        Bilan_hepatique_Transaminases_SGPT='" . $_POST['Bilan_hepatique_Transaminases_SGPT'] . "',
        Bilan_hepatique_Bilirubine_Totale='" . $_POST['Bilan_hepatique_Bilirubine_Totale'] . "',
        Bilan_hepatique_Bilirubine_Directe='" . $_POST['Bilan_hepatique_Bilirubine_Directe'] . "',
        Bilan_hepatique_PA='" . $_POST['Bilan_hepatique_PA'] . "',
        Bilan_hepatique_SGT='" . $_POST['Bilan_hepatique_SGT'] . "',
        Bilan_phospho_calcique_Calcemie='" . $_POST['Bilan_phospho_calcique_Calcemie'] . "',
        Bilan_phospho_calcique_Phosphoremie='" . $_POST['Bilan_phospho_calcique_Phosphoremie'] . "',
        Bilan_lipidique_Lipides_tot='" . $_POST['Bilan_lipidique_Lipides_tot'] . "',
        Bilan_lipidique_TG='" . $_POST['Bilan_lipidique_TG'] . "',
        Bilan_lipidique_Cholesterol='" . $_POST['Bilan_lipidique_Cholesterol'] . "',
        Bilan_lipidique_LDLc='" . $_POST['Bilan_lipidique_LDLc'] . "',
        Bilan_lipidique_HDLc='" . $_POST['Bilan_lipidique_HDLc'] . "',
        Bilan_protidique_Protides_tot='" . $_POST['Bilan_protidique_Protides_tot'] . "',
        Bilan_protidique_Albumine='" . $_POST['Bilan_protidique_Albumine'] . "',
        Bilan_protidique_Fibrinogene='" . $_POST['Bilan_protidique_Fibrinogene'] . "',
        Monogramme_Kaliemie='" . $_POST['Monogramme_Kaliemie'] . "',
        Monogramme_Natremie='" . $_POST['Monogramme_Natremie'] . "',
        Monogramme_Magnesium='" . $_POST['Monogramme_Magnesium'] . "',
        Bilan_inflammatoire_VS='" . $_POST['Bilan_inflammatoire_VS'] . "',
        Bilan_inflammatoire_CRP='" . $_POST['Bilan_inflammatoire_CRP'] . "' WHERE patient_id='" . $_SESSION['PationId'] . "'";
        mysqli_query($conn, $up_query);
    }
    $query = mysqli_query($conn, "SELECT * FROM patient JOIN examen_initial ON patient.id = examen_initial.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
    $row_info = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        $query2 = mysqli_query($conn, "SELECT * FROM patient  WHERE id = '" . $_SESSION['PationId'] . "' AND status='2' "); //
        if (mysqli_num_rows($query2) == 0)
            header("location:patients.php");
        else {
            mysqli_query($conn, "INSERT INTO examen_initial (patient_id) VALUES ('" . $_SESSION['PationId'] . "')"); //
            $query = mysqli_query($conn, "SELECT * FROM patient JOIN examen_initial ON patient.id = examen_initial.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' "); //
            $row_info = mysqli_fetch_assoc($query);
        }
    }
}else
    header("location:patients.php");
?>
<main id="main">
    <form action="" method="post">
        <fieldset style="width: 100%;">
            <legend>
                <h3>Bilan biologique</h3>
            </legend>
            <label for="Glycémie à jeun">Glycémie à jeun :</label><input type="text" value="<?php print($row_info['Glycemie_a_jeun']);?>" name="Glycemie_a_jeun" required>
            <fieldset>
                <legend><b>Bilan hématologique :</b></legend>
                <div style="width:100%">
                    <label>Groupe:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_Groupe']);?>" name="Bilan_hematologique_Groupe" required style="width:100%">
                </div><br>
                <div style="width:100%">FNS -
                    <label>GB:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_FNS_GB']);?>" name="Bilan_hematologique_FNS_GB" required>
                    <label>Hb:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_FNS_Hb']);?>" name="Bilan_hematologique_FNS_Hb" required>
                    <label>Hte:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_FNS_Hte']);?>" name="Bilan_hematologique_FNS_Hte" required>
                    <label>Plaquettes:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_FNS_Plaquettes']);?>" name="Bilan_hematologique_FNS_Plaquettes" required>
                </div><br>
                <div style="width:100%">
                    <label>Equilibre:<input type="text" value="<?php print($row_info['Bilan_hematologique_Equilibre']);?>" name="Bilan_hematologique_Equilibre" required style="width:100%"></label>
                </div><br>
                <div style="width:100%">
                    <label>TP:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_TP']);?>" name="Bilan_hematologique_TP" required>
                    <label>TH:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_TH']);?>" name="Bilan_hematologique_TH" required>
                    <label>TS:</label><input type="text" value="<?php print($row_info['Bilan_hematologique_TS']);?>" name="Bilan_hematologique_TS" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan rénal:</b></legend>
                <div style="width:100%">
                    <label>Urée:</label><input type="text" value="<?php print($row_info['Bilan_renal_Uree']);?>" name="Bilan_renal_Uree" required>
                    <label>Créat:</label><input type="text" value="<?php print($row_info['Bilan_renal_Creat']);?>" name="Bilan_renal_Creat" required>
                    <label>Ac Urique:</label><input type="text" value="<?php print($row_info['Bilan_renal_Ac_Urique']);?>" name="Bilan_renal_Ac_Urique" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan hépatique:</b></legend>
                <div style="width:100%">Transaminases -
                    <label>SGOT:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_Transaminases_SGOT']);?>" name="Bilan_hepatique_Transaminases_SGOT" required>
                    <label>SGPT:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_Transaminases_SGPT']);?>" name="Bilan_hepatique_Transaminases_SGPT" required>
                </div><br>
                <div>Bilirubine -
                    <label>Totale:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_Bilirubine_Totale']);?>" name="Bilan_hepatique_Bilirubine_Totale" required>
                    <label> Directe:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_Bilirubine_Directe']);?>" name="Bilan_hepatique_Bilirubine_Directe" required>
                </div><br>
                <div style="width:100%">
                    <label>PA:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_PA']);?>" name="Bilan_hepatique_PA" required>
                    <label>SGT:</label><input type="text" value="<?php print($row_info['Bilan_hepatique_SGT']);?>" name="Bilan_hepatique_SGT" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan phospho-calcique :</b></legend>
                <div style="width:100%">
                    <label>Calcémie:</label><input type="text" value="<?php print($row_info['Bilan_phospho_calcique_Calcemie']);?>" name="Bilan_phospho_calcique_Calcemie" required>
                    <label>Phosphorémie:</label><input type="text" value="<?php print($row_info['Bilan_phospho_calcique_Phosphoremie']);?>" name="Bilan_phospho_calcique_Phosphoremie" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan lipidique :</b></legend>
                <div style="width:100%">
                    <label>Lipides tot:</label><input type="text" value="<?php print($row_info['Bilan_lipidique_Lipides_tot']);?>" name="Bilan_lipidique_Lipides_tot" required>
                    <label>TG:</label><input type="text" value="<?php print($row_info['Bilan_lipidique_TG']);?>" name="Bilan_lipidique_TG" required>
                </div><br>
                <div style="width:100%">
                    <label>Cholestérol</label><input type="text" value="<?php print($row_info['Bilan_lipidique_Cholesterol']);?>" name="Bilan_lipidique_Cholesterol" required>
                    <label>HDLc:</label><input type="text" value="<?php print($row_info['Bilan_lipidique_LDLc']);?>" name="Bilan_lipidique_LDLc" required>
                    <label>LDLc:</label><input type="text" value="<?php print($row_info['Bilan_lipidique_HDLc']);?>" name="Bilan_lipidique_HDLc" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan protidique :</b></legend>

                <div style="width:100%">
                    <label>Protides tot:</label><input type="text" value="<?php print($row_info['Bilan_protidique_Protides_tot']);?>" name="Bilan_protidique_Protides_tot" required>
                    <label>Albumine:</label><input type="text" value="<?php print($row_info['Bilan_protidique_Albumine']);?>" name="Bilan_protidique_Albumine" required>
                    <label>Fibrinogéne:</label><input type="text" value="<?php print($row_info['Bilan_protidique_Fibrinogene']);?>" name="Bilan_protidique_Fibrinogene" required>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Monogramme :</b></legend>
                <div style="width:20%">
                </div>
                <div style="width:20%">
                </div>
                <div>
                    <label>Kaliémie:</label><input type="text" value="<?php print($row_info['Monogramme_Kaliemie']);?>" name="Monogramme_Kaliemie" required style="width:60%"><br><br>
                    <label>Natrémie:</label><input type="text" value="<?php print($row_info['Monogramme_Natremie']);?>" name="Monogramme_Natremie" required style="width:60%"><br><br>
                    <label>Magnésium:</label><input type="text" value="<?php print($row_info['Monogramme_Magnesium']);?>" name="Monogramme_Magnesium" required style="width:60%"><br>
                </div>
            </fieldset>
            <fieldset class="fild">
                <legend><b>Bilan protidique :</b></legend>
                <div style="width:100%">
                    <label>VS:</label><input type="text" value="<?php print($row_info['Bilan_inflammatoire_VS']);?>" name="Bilan_inflammatoire_VS" required>
                    <label>CRP</label><input type="text" value="<?php print($row_info['Bilan_inflammatoire_CRP']);?>" name="Bilan_inflammatoire_CRP" required>
                </div>
            </fieldset>
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