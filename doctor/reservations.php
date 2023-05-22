<?php
require("../setting/connect_databes.php");

require("../setting/header_medcin.php");
$selectRDV = mysqli_query($conn, "SELECT * FROM patient JOIN rendez_v ON patient.id = rendez_v.patient_id WHERE date_ap >=  '".date('Y-m-d')."'");


?>
<main class="main_medcin" id="main">
    <form method="post" style="float: right;">
        <label for="">Réservations</label><input name="fiter_all" type="checkbox">
        <label for="" style="color:#f2f2f2">__</label><label for="">Réserv-accept</label><input name="fiter_accept"
            type="checkbox">
    </form>
    <h2>Réservations</h2>
    <table>
        <thead>
            <tr>
                <th class="ths">Id</th>
                <th class="ths">Name</th>
                <th class="ths">Prenom</th>
                <th class="ths">Date</th>
                <th class="ths">period</th>
                <th class="ths">protocol</th>
                <th class="ths">bilan</th>
                <th class="ths">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rowRDV = mysqli_fetch_assoc($selectRDV)) { ?>
                <tr class="tbody-tr">
                    <td class="tds"><?php echo $rowRDV["patient_id"];?></td>
                    <td class="tds"><?php echo $rowRDV["nom"];?></td>
                    <td class="tds"><?php echo $rowRDV["prenom"];?></td>
                    <td class="tds"><?php echo $rowRDV["date_ap"];?></td>
                    <td class="tds"><?php echo $rowRDV["period"];?></td>
                    <td class="tds">
                        <div class="img" id="img"
                            style="background-image: url('<?php echo "../patient/documents/".$rowRDV["protocole"]; ?>')">
                    </td>
                    <td class="tds">
                        <div class="img" id="img"
                            style="background-image: url('<?php echo "../patient/documents/".$rowRDV["protocole"]; ?>')">
                    </td>
                    <td class="tds">
                        <div class="buttons">
                            <a href="#" class="button1">Accept</a>
                            <a href="#" class="button2">Rejeter</a>
                        </div>
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