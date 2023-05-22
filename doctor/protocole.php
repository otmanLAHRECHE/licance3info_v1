<?php
require("../setting/connect_databes.php");
require("../setting/session_medcin.php");
if (isset($_POST["envoyerDOC"]) && $_SESSION["MedcinId"]) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_forms.css">
    <title>Document</title>
    <style>
         
    </style>
    <script>
        function printFieldset(){
            window.print();
        }
        
    </script>
</head>
<body class="bodyPRTCL">
    <div class="gg">
        <fieldset class="fieldsetPRTCL">
            <h3 class="hh33"> Republique Algerienne Democratique et Populaire </h3>
            <h3 class="hh33"> Centre d'Hemodialyse Tel:029223292</h3>
            <h3 class="hh33">Hopital de Guerrara</h3>
            <h3 class="hh33"> W.Ghardaia-Algerie </h3>
            <h2 class="hh22"><b><u> PROTOCOLE D'HEMODIALYSE </u></b></h2>
            <div style="width:100%;direction: rtl;"><input class="inputPRTCL" type="date">:Guerrara Le
            </div>
            <label class="labelPRTCL" ><b> Patient:</b></label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" ><b> Date de naissance:</b></label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" ><b> Adresse:</b></label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" ><b> Néphropathie initiale:</b></label><input class="inputPRTCL" type="text"><br><br><br>
            <label class="labelPRTCL" >• Date de la premiere dialyse: </label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Date souhaitee dans votre service: </label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Nombre de seances par semaine: </label><input class="inputPRTCL" type="text"> <b>/fois</b> semaine</label><br>
            <label class="labelPRTCL" >• Jours de dialyse: </label><input class="inputPRTCL" type="text"> <br>
            <label class="labelPRTCL" >• Durée de la séance : </label><input class="inputPRTCL" type="text"><b>min</b><br>
            <label class="labelPRTCL" >• Poids de base :  </label><input class="inputPRTCL" type="text"> <b>kg</b></label><br>
            <label class="labelPRTCL" >• Perte de poids inter dialytique habituelle :</label><input class="inputPRTCL" type="text"><b>kg</b> par séance</label><br>
            <label class="labelPRTCL" >• Abord vasculaire :  </label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Aiguille utilisée:artère:  </label><input class="inputPRTCL" type="text"><b>G 16/veine G16</b></label><br>
            <label class="labelPRTCL" >• Anticoagulant:Lovenox  </label><input class="inputPRTCL" type="text"><b>ml</b></label><br>
            <label class="labelPRTCL" >• Débit de pompe à sang :</label><input class="inputPRTCL" type="text"><b>ml/min</b></label><br>
            <label class="labelPRTCL" >• Dialyseur:Fx</label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Dialyse au Bicarbonate</label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Type de générateur :</label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Groupe sanguin: </label><input class="inputPRTCL" type="text"><br><br>
            <label class="labelPRTCL" >• <u>Sérologie virale:</u> <br>
            <label class="labelPRTCL"  class="sss" ><b class="ge" >•Ag Hbs:</b><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL"  class="sss" ><b class="ge" >•AC anti-HCV:</b><input class="inputPRTCL" type="text"></label><br>
            <label class="labelPRTCL"  class="sss" ><b class="ge" >•ACanti-HIV:</b><input class="inputPRTCL" type="text"></label><br>
            <label class="labelPRTCL" >• Incidents au cours de l'hémodialyse: </label><input class="inputPRTCL" type="text"><br>
            <label class="labelPRTCL" >• Traitement médicale en dialyse:</label><input class="inputPRTCL" type="text"></label><br>
            <label class="labelPRTCL" >• Traitement Martial: </label><input class="inputPRTCL" type="text"><label class="labelPRTCL" for="-----:"><b>amp/mois</b></label><br>
            <label class="labelPRTCL" >• Traitement habituel: </label><input class="inputPRTCL" type="text"><br><br><br>
            <div class="tt">
            <label class="labelPRTCL" for="" >Medecin traitant: Dr: </label><input class="inputPRTCL" type="text"><br>
            </div>
        </fieldset>
        <button class="buttonPRNT" onclick="printFieldset()">طباعة</button>
    </div>
</body>
</html>
<?php }
?>


</main>
<script>
    function saveDivAsImage(){
        // Capture the form element
        const form = document.getElementById('your-form-id');

// Use html2canvas to convert the form to an image
        html2canvas(form).then(function (canvas) {
  // Convert canvas to image data URL
            const imageDataURL = canvas.toDataURL('image/png');

  // Create a link element for downloading
            const link = document.createElement('a');
            link.href = imageDataURL;
            link.download = 'form_image.png';

  // Simulate a click on the link to trigger the download
        link.click();
});
    }
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>