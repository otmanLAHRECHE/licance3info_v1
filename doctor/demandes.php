<?php
require("../setting/connect_databes.php");

require("../setting/header_medcin.php");
$selectDDC = mysqli_query($conn, "SELECT * FROM patient JOIN demand_document ON patient.id = demand_document.patient_id");

?>
<main id="main" class="main_medcin">

    <h2>Demandes de documents</h2>
    <table>
        <thead>
            <tr>
                <th class="ths">Id</th>
                <th class="ths">Name</th>
                <th class="ths">Date de le demande</th>
                <th class="ths">Type de document</th>
                <th class="ths">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rowRDV = mysqli_fetch_assoc($selectDDC)) { ?>
                <tr class="tbody-tr">
                    <td class="tds">
                        <?php echo $rowRDV["patient_id"]; $patient_id=$rowRDV["patient_id"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowRDV["nom"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowRDV["date"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowRDV["document"]; ?>
                    </td>
                    <td class="tds">
                        <form class="buttons" method="post" action="<?php echo $rowRDV["document"] ;?>.php" >
                            <input type="hidden" value="<?php echo $patient_id; ?>" hidden>
                            <input type="submit" name="envoyerDOC" class="Envoyer" value="Envoyer">
                        </form>
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