<?php
require("../setting/header_profil_patient1.php");
if (isset($_SESSION['PationId'])) {
    echo $_SESSION['PationId'];
    echo date('Y-m-d');
    if (isset($_POST['ADD'])) {
        $patient_id = $_SESSION['PationId'];
        $date_d_examen = date('Y-m-d');
        $FNS_GB_x10 = $_POST['FNS_GB_x10'];
        $FNS_GR_x101 = $_POST['FNS_GR_x101'];
        $FNS_Hb = $_POST['FNS_Hb'];
        $FNS_Hte = $_POST['FNS_Hte'];
        $FNS_Reticulocyte = $_POST['FNS_Reticulocyte'];
        $FNS_PLT_x10 = $_POST['FNS_PLT_x10'];
        $FER_Ferritinemie = $_POST['FER_Ferritinemie'];
        $FER_CST = $_POST['FER_CST'];
        $GLYCENIE = $_POST['GLYCENIE'];
        $FRENALE_Uree = $_POST['FRENALE_Uree'];
        $FRENALE_Creat = $_POST['FRENALE_Creat'];
        $FRENALE_Ac_urique = $_POST['FRENALE_Ac_urique'];
        $BILAN_PH_CA_Ca = $_POST['BILAN_PH_CA_Ca'];
        $BILAN_PH_CA_P = $_POST['BILAN_PH_CA_P'];
        $FHEPATIQUE_SGPT_UIP = $_POST['FHEPATIQUE_SGPT_UIP'];
        $FHEPATIQUE_SGOT_UIP = $_POST['FHEPATIQUE_SGOT_UIP'];
        $FHEPATIQUE_PAL_UIP = $_POST['FHEPATIQUE_PAL_UIP'];
        $FHEPATIQUE_BbT = $_POST['FHEPATIQUE_BbT'];
        $FHEPATIQUE_BbD = $_POST['FHEPATIQUE_BbD'];
        $FHEPATIQUE_yGT = $_POST['FHEPATIQUE_yGT'];
        $BILAN_LIPIDIQUE_TG = $_POST['BILAN_LIPIDIQUE_TG'];
        $BILAN_LIPIDIQUE_CH_T = $_POST['BILAN_LIPIDIQUE_CH_T'];
        $BILAN_LIPIDIQUE_HDL = $_POST['BILAN_LIPIDIQUE_HDL'];
        $BILAN_LIPIDIQUE_LDL = $_POST['BILAN_LIPIDIQUE_LDL'];
        $IGON_SANGIUN_Na = $_POST['IGON_SANGIUN_Na'];
        $IGON_SANGIUN_K = $_POST['IGON_SANGIUN_K'];
        $IGON_SANGIUN_Mg = $_POST['IGON_SANGIUN_Mg'];
        $IGON_SANGIUN_Cl = $_POST['IGON_SANGIUN_Cl'];
        $HEMOSTASE_TP = $_POST['HEMOSTASE_TP'];
        $HEMOSTASE_INR = $_POST['HEMOSTASE_INR'];
        $HEMOSTASE_TS = $_POST['HEMOSTASE_TS'];
        $HEMOSTASE_TCK = $_POST['HEMOSTASE_TCK'];
        $ElLECTROPHORESE_De_LHb = $_POST['ElLECTROPHORESE_De_LHb'];
        $Laclairance_a_la_creatinine_CC = $_POST['Laclairance_a_la_creatinine_CC'];
        $PTH = $_POST['PTH'];
        mysqli_query($conn, "INSERT INTO `examen_biologique` (
            `id_ex_bio`,
             `patient_id`,
              `date_d_examen`,
               `FNS_GB_x10`,
                `FNS_GR_x101`,
                 `FNS_Hb`,
                  `FNS_Hte`,
                   `FNS_Reticulocyte`,
                    `FNS_PLT_x10`,
                     `FER_Ferritinemie`,
                      `FER_CST`,
                       `GLYCENIE`,
                        `FRENALE_Uree`,
                         `FRENALE_Creat`,
                          `FRENALE_Ac_urique`,
                           `BILAN_PH_CA_Ca`,
                            `BILAN_PH_CA_P`,
                             `FHEPATIQUE_SGPT_UIP`,
                              `FHEPATIQUE_SGOT_UIP`,
                               `FHEPATIQUE_PAL_UIP`,
                                `FHEPATIQUE_BbT`,
                                 `FHEPATIQUE_BbD`,
                                  `FHEPATIQUE_yGT`,
                                   `BILAN_LIPIDIQUE_TG`,
                                    `BILAN_LIPIDIQUE_CH_T`,
                                     `BILAN_LIPIDIQUE_HDL`,
                                      `BILAN_LIPIDIQUE_LDL`,
                                       `IGON_SANGIUN_Na`,
                                        `IGON_SANGIUN_K`,
                                         `IGON_SANGIUN_Mg`,
                                          `IGON_SANGIUN_Cl`,
                                           `HEMOSTASE_TP`,
                                            `HEMOSTASE_INR`,
                                             `HEMOSTASE_TS`,
                                              `HEMOSTASE_TCK`,
                                               `ElLECTROPHORESE_De_LHb`,
                                                `Laclairance_a_la_creatinine_CC`,
                                                 `PTH`
                                                 ) VALUES (NULL, '$patient_id', '$date_d_examen', '$FNS_GB_x10', '$FNS_GR_x101', '$FNS_Hb', '$FNS_Hte', '$FNS_Reticulocyte', '$FNS_PLT_x10', '$FER_Ferritinemie', '$FER_CST', '$GLYCENIE', '$FRENALE_Uree', '$FRENALE_Creat', '$FRENALE_Ac_urique', '$BILAN_PH_CA_Ca', '$BILAN_PH_CA_P', '$FHEPATIQUE_SGPT_UIP', '$FHEPATIQUE_SGOT_UIP', '$FHEPATIQUE_PAL_UIP', '$FHEPATIQUE_BbT', '$FHEPATIQUE_BbD', '$FHEPATIQUE_yGT', '$BILAN_LIPIDIQUE_TG', '$BILAN_LIPIDIQUE_CH_T', '$BILAN_LIPIDIQUE_HDL', '$BILAN_LIPIDIQUE_LDL', '$IGON_SANGIUN_Na', '$IGON_SANGIUN_K', '$IGON_SANGIUN_Mg', '$IGON_SANGIUN_Cl', '$HEMOSTASE_TP', '$HEMOSTASE_INR', '$HEMOSTASE_TS', '$HEMOSTASE_TCK', '$ElLECTROPHORESE_De_LHb', '$Laclairance_a_la_creatinine_CC', '$PTH')");






        // $inst_query = $conn->prepare("INSERT INTO `examen_biologique` (
        //     `patient_id`,
        //     `date_d_examen`,
        //     `FNS_GB_x10`,
        //     `FNS_GR_x101`,
        //     `FNS_Hb`,
        //     `FNS_Hte`,
        //     `FNS_Reticulocyte`,
        //     `FNS_PLT_x10`,
        //     `FER_Ferritinemie`,
        //     `FER_CST`,
        //     `GLYCENIE`,
        //     `FRENALE_Uree`,
        //     `FRENALE_Creat`,
        //     `FRENALE_Ac_urique`,
        //     `BILAN_PH_CA_Ca`,
        //     `BILAN_PH_CA_P`,
        //     `FHEPATIQUE_SGPT_UIP`,
        //     `FHEPATIQUE_SGOT_UIP`,
        //     `FHEPATIQUE_PAL_UIP`,
        //     `FHEPATIQUE_BbT`,
        //     `FHEPATIQUE_BbD`,
        //     `FHEPATIQUE_yGT`,
        //     `BILAN_LIPIDIQUE_TG`,
        //     `BILAN_LIPIDIQUE_CH_T`,
        //     `BILAN_LIPIDIQUE_HDL`,
        //     `BILAN_LIPIDIQUE_LDL`,
        //     `IGON_SANGIUN_Na`,
        //     `IGON_SANGIUN_K`,
        //     `IGON_SANGIUN_Mg`,
        //     `IGON_SANGIUN_Cl`,
        //     `HEMOSTASE_TP`,
        //     `HEMOSTASE_INR`,
        //     `HEMOSTASE_TS`,
        //     `HEMOSTASE_TCK`,
        //     `ElLECTROPHORESE_De_LHb`,
        //     `Laclairance_a_la_creatinine_CC`,
        //     `PTH`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        // $inst_query->bind_param(
        //     "iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii",
        //     $patient_id,
        //     $date_d_examen,
        //     $FNS_GB_x10,
        //     $FNS_GR_x101,
        //     $FNS_Hb,
        //     $FNS_Hte,
        //     $FNS_Reticulocyte,
        //     $FNS_PLT_x10,
        //     $FER_Ferritinemie,
        //     $FER_CST,
        //     $GLYCENIE,
        //     $FRENALE_Uree,
        //     $FRENALE_Creat,
        //     $FRENALE_Ac_urique,
        //     $BILAN_PH_CA_Ca,
        //     $BILAN_PH_CA_P,
        //     $FHEPATIQUE_SGPT_UIP,
        //     $FHEPATIQUE_SGOT_UIP,
        //     $FHEPATIQUE_PAL_UIP,
        //     $FHEPATIQUE_BbT,
        //     $FHEPATIQUE_BbD,
        //     $FHEPATIQUE_yGT,
        //     $BILAN_LIPIDIQUE_TG,
        //     $BILAN_LIPIDIQUE_CH_T,
        //     $BILAN_LIPIDIQUE_HDL,
        //     $BILAN_LIPIDIQUE_LDL,
        //     $IGON_SANGIUN_Na,
        //     $IGON_SANGIUN_K,
        //     $IGON_SANGIUN_Mg,
        //     $IGON_SANGIUN_Cl,
        //     $HEMOSTASE_TP,
        //     $HEMOSTASE_INR,
        //     $HEMOSTASE_TS,
        //     $HEMOSTASE_TCK,
        //     $ElLECTROPHORESE_De_LHb,
        //     $Laclairance_a_la_creatinine_CC,
        //     $PTH
        // );
        // if ($inst_query->execute()) {
        //     header("location:old_examen_boilogequi.php");
        // }
        header("location:old_examen_boilogequi.php");

    }
}
?>
<main id="main">
    <fieldset style="width: 100%;">
        <form action="" method="post">
            <legend>Examen Biologque </legend>
            <br>
            <br>
            <fieldset>
                <legend>FNS</legend>
                <label for="">GB (x10%):</label><input name="FNS_GB_x10" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">GR (x104):</label><input name="FNS_GR_x101" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Hb (g/dl):</label><input name="FNS_Hb" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">hte (%):</label><input name="FNS_Hte" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Réticulocyte:</label><input name="FNS_Reticulocyte" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">PLT (x101):</label><input name="FNS_PLT_x10" type="number" class="fi1" required>
                <br>
                <br>
            </fieldset>
            <fieldset>
                <legend>FER</legend>
                <label for="">ferritinomy:</label><input name="FER_Ferritinemie" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">TSC:</label><input name="FER_CST" type="number" class="fi1" required>
            </fieldset>
            <br>
            <label for="">GLYCÉMIE (G/dl):</label><input name="GLYCENIE" type="number" class="fi1" required>
            <br>
            <br>
            <fieldset>
                <legend>RENALE</legend>
                <label for="">Urée (g/dl):</label><input name="FRENALE_Uree" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Créat (mg/l):</label><input name="FRENALE_Creat" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Ac.urique (mg/l):</label><input name="FRENALE_Ac_urique" type="number" class="fi1"
                    required>
                <br>
            </fieldset>
            <fieldset>
                <legend>BILAN PH-Ca</legend>
                <label for="">Ca+ (mg/l):</label><input name="BILAN_PH_CA_Ca" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Ca+ (mg/l):</label><input name="BILAN_PH_CA_P" type="number" class="fi1" required>
                <br>
            </fieldset>
            <label for="">PTH</label><input name="PTH" type="number" class="fi1" required>
            <br>
            <br>
            <fieldset>
                <legend>F HEPATIQUE</legend>
                <label for="">SGOT (UI/P):</label><input name="FHEPATIQUE_SGPT_UIP" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">SGPT (UU/P):</label><input name="FHEPATIQUE_SGOT_UIP" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">PAL (UIP):</label><input name="FHEPATIQUE_PAL_UIP" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Bb-T(mg/l):</label><input name="FHEPATIQUE_BbT" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Bb-D (mg/l):</label><input name="FHEPATIQUE_BbD" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">YGT:</label><input name="FHEPATIQUE_yGT" type="number" class="fi1" required>
                <br>
            </fieldset>
            <fieldset>
                <legend>BILAN LIPIDIQUE</legend>
                <label for="">TG (g/l):</label><input name="BILAN_LIPIDIQUE_TG" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">CH T(g/l):</label><input name="BILAN_LIPIDIQUE_CH_T" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">HDL (g/l):</label><input name="BILAN_LIPIDIQUE_HDL" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">LDL (9/1):</label><input name="BILAN_LIPIDIQUE_LDL" type="number" class="fi1" required>
                <br>
            </fieldset>
            <fieldset>
                <legend>ICNO SANGUIN</legend>
                <label for="">Na+:</label><input name="IGON_SANGIUN_Na" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">K+:</label><input name="IGON_SANGIUN_K" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">mg:</label><input name="IGON_SANGIUN_Mg" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">Cl mmol/l:</label><input name="IGON_SANGIUN_Cl" type="number" class="fi1" required>
                <br>
            </fieldset>
            <fieldset>
                <legend>HÉMOSTASE</legend>
                <label for="">TP:</label><input name="HEMOSTASE_TP" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">RNI:</label><input name="HEMOSTASE_INR" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">TS:</label><input name="HEMOSTASE_TS" type="number" class="fi1" required>
                <br>
                <br>
                <label for="">TCK:</label><input name="HEMOSTASE_TCK" type="number" class="fi1" required>
                <br>
            </fieldset>
            <br>
            <label for="">Electrophorèse de l'HD</label><input name="ElLECTROPHORESE_De_LHb" type="number" class="fi1"
                required>
            <br>
            <br>
            <label for="">La clairance à la créatinine CC=</label><input name="Laclairance_a_la_creatinine_CC"
                type="number" class="fi1" required>
            <input name="ADD" type="submit" value="حفظ">
    </fieldset>
    </form>
</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>