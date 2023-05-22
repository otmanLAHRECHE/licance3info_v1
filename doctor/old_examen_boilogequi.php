<?php
require("../setting/header_profil_patient1.php");
if (isset($_SESSION['PationId'])) {
    date('Y-m-d');
    $query = mysqli_query($conn, "SELECT * FROM patient JOIN examen_biologique ON patient.id = examen_biologique.patient_id WHERE id = '" . $_SESSION['PationId'] . "' AND patient.status='2' ORDER BY `date_d_examen` ASC");
    echo mysqli_num_rows($query);
    if (mysqli_num_rows($query) == 0) {
        $query2 = mysqli_query($conn, "SELECT * FROM patient  WHERE id = '" . $_SESSION['PationId'] . "' AND status='2' ");
        if (mysqli_num_rows($query2) == 0)
            header("location:patients.php");
    }
}
?>
<main id="main" class="main_medcin">
    <br>
    <br>
    <hr>
    <a href="examen_biologique.php" class="add-patient">add new examen</a>
    <h2>Les examen Boi</h2>
    <table>
        <thead>
            <tr>
                <th class="ths">Date</th>
                <th class="ths">GB (x1000/)</th>
                <th class="ths">GR (x10/)</th>
                <th class="ths">Hb (g/dl)</th>
                <th class="ths">Hte (%)</th>
                <th class="ths">Réticulocyte</th>
                <th class="ths">PLT (x1000/)</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($row_info = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td class="tds">
                        <?php print($row_info['date_d_examen']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_GB_x10']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_GR_x101']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_Hb']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_Hte']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_Reticulocyte']) ?>
                    </td>
                    <td class="tds">
                        <?php print($row_info['FNS_PLT_x10']) ?>
                    </td>
                </tr>
            <?php }
            ?>

        </tbody>
    </table>
</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>