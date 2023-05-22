<?php
require("../setting/connect_databes.php");
require("../setting/session_medcin.php");
if (isset($_POST["envoyerDOC"]) && $_SESSION["MedcinId"]) { ?>
    <div class="div">
        <form action="" method="post">
            <fieldset class="fil1">
                <h3><b>REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE</b></h3>
                <h3><b>ETABLISSEMENT PUBLIQUE HOSPITAIER DE GUERRARA WILAYE DE</b></h3>
                <h3><b>GHARDAIA</b></h3>
                <br>
                <h3><b>CENTRE D'HEMODIALYSE</b></h3>
                <br>
                <div class="si">
                    <label for="">Nom :</label><input type="text"><br>
                    <label for="">Prenom :</label><input type="text"><br>
                    <label for="">Date de naissance:</label><input type="text"><br><br>
                    <h3><b>Certificat medical</b></h3>
                    <br>
                    <p>Je soussinge Dr. <input type="text"> certifie que le(la) pation(e) sus nomme(e),</p>
                    <p>presente <b>une insuffisance renalechronique terminale </b> au stade</p>
                    <p>d'epuration extra renale depuis <input type="text">. a nombre de 03 seances par </p>
                    <p>semaine (dimanche-mardi-jeudi),chaque seance dure 4 H.</p>
                    <p>Necesssite <b>un tratement a long terme .</b> et un <b>transport sanitaire </b>lorrs de ses
                        seances
                    </p>
                    <br>
                    <p>Ce certificat est remis aux mains propre de l'interesse pour servis et valoir ce que de droite.
                    </p>
                    <h4><b>Dont de certificat la 30/11/2022</b></h4>
                    <br>
                    <br>
                    <br>
                    <fieldset class="fi1" style="width: 100%; border: 1px solid transparent">

                        <fieldset style="width:50%; direction: ltr ; border: 1px solid transparent">
                            <h3>Etablissement </h3>
                        </fieldset>


                        <fieldset style="width:50%;direction: rtl; border: 1px solid transparent">
                            <h3>Medecin</h3>
                        </fieldset>

                    </fieldset>
            </fieldset>
            <button onclick="printFieldset()">طباعة</button>
            <button type="submit" onclick=""><b>ارسال</b></button>
        </form>
    </div>

<?php } ?>