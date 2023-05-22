<?php
require("../setting/connect_databes.php");
require("../setting/header_medcin.php");
$selectPT = mysqli_query($conn, "SELECT * FROM patient WHERE `status`= 2");
unset($_SESSION['PationId']);
?>
<main id="main" class="main_medcin">


    <br>
    <br>
    <hr>
    <a href="add_patient_form.php" class="add-patient">add-patient</a>
    <h2>Patients</h2>
    <table>
        <thead>
            <tr>
                <th class="ths">Id</th>
                <th class="ths">Name</th>
                <th class="ths">Date de naissance</th>
                <th class="ths">Num de telephone</th>
                <th class="ths">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rowPT = mysqli_fetch_assoc($selectPT)) { ?>
                <tr>
                    <td class="tds">
                        <?php echo $rowPT["id"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowPT["nom"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowPT["date_naissance"]; ?>
                    </td>
                    <td class="tds">
                        <?php echo $rowPT["telephone"]; ?>
                    </td>
                    <td class="tds">
                       
                            <div class="buttons">
                               
                                <form action="examen_complementairres.php" method="post">
                                    <input type="hidden" name="pation_id" value=" <?php print $rowPT["id"] ?>">
                                    <input type="submit"class="edit-button" name="Edit Profile">
                                </form>
                                
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