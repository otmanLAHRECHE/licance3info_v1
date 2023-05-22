<?php
require("../setting/connect_databes.php");

require("../setting/header_medcin.php");
$selectNumPT =mysqli_query($conn,"SELECT COUNT(*) FROM patient WHERE status='2' ");
$selectNumDDC= mysqli_query($conn,"SELECT COUNT(*) FROM demand_document");
$selectNumRDV= mysqli_query($conn,"SELECT COUNT(*) FROM rendez_v WHERE date_ap >=  '".date('Y-m-d')."'");
$rowNumPT =mysqli_fetch_array($selectNumPT);
$rowNumDDC=mysqli_fetch_array($selectNumDDC);
$rowNumRDV=mysqli_fetch_array($selectNumRDV);
?>
<main class="main_medcin" id="main">
    <h2>Page d'accueil</h2>
    <table class="tablem">
        <thead>
            <tr>
                <th class="ths">Statistiques</th>
                <th class="ths">Nombre</th>
                <th class="ths">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="tbody-tr">
                <td class="tds">Nombre de Malades</td>
                <td class="tds"><?php echo $rowNumPT[0]; ?></td>
                <td class="tds">
                    <div class="buttons">
                        <a href="Patients.php" class="button">Patients</a>

                    </div>
                </td>
            </tr>
            <tr>
                <td class="tds">Nombre de Réservations</td>
                <td class="tds"><?php echo $rowNumRDV[0]; ?></td>
                <td class="tds">
                    <div class="buttons">
                        <a href="reservations.php" class="button">Réserva</a>

                    </div>
                </td>
            </tr>
            <tr>
                <td class="tds">Nombre de Demandes</td>
                <td class="tds"><?php echo $rowNumDDC[0]; ?></td>
                <td class="tds">
                    <div class="buttons">
                        <a href="demandes.php" class="button">Demande</a>

                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>