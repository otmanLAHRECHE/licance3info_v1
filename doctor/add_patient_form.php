<?php
require("../setting/header_profil_patient1.php");
if (isset($_POST['ADD'])) {
    date('Y-m-d');
    $two=2;
        echo $_POST['nom'];
        echo $_POST['prenom'];
        echo $_POST['email'];
        echo $_POST['date_naissance'];
        echo $_POST['lieu_naissance'];
        echo $_POST['groupe_sanguin'];
        echo $_POST['address'];
        echo $_POST['telephone'];
        echo $_POST['pass'];
        echo $two;
        echo date('Y-m-d');
    $insert=$conn->prepare("INSERT INTO `patient` ( `nom`, `prenom`, `email`, `date_naissance`, `lieu_naissance`, `groupe_sanguin`, `address`, `telephone`, `password`, `status`, `created_at`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $insert->bind_param("sssssssssis",
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['date_naissance'],
        $_POST['lieu_naissance'],
        $_POST['groupe_sanguin'],
        $_POST['address'],
        $_POST['telephone'],
        $_POST['pass'],
        $two,
        date('Y-m-d'));
        if($insert->execute()){
            
            header("location:patients.php");
        }
        else;
            
}


?>
<style>
    body {
        background-color: aliceblue;
    }

    main {
        padding: 20px;
    }
</style>

<main id="main">
    <Fieldset style="width: 80%;">
        <legend>information personnelles</legend>
        <form action="" method="post">
            <label for="">Nom :</label><input name="nom" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">Prenom :</label><input name="prenom" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">E-mail :</label><input name="email" type="email" class="fi1" required>
            <br>
            <br>
            <label for="">password :</label><input name="pass" type="password" class="fi1" required>
            <br>
            <br>
            <label for="">date de naissance:</label><input name="date_naissance" type="date" class="fi1" required>
            <br>
            <br>
            <label for="">Tel :</label><input name="telephone" type="number" class="fi1" required>
            <br>
            <br>
            <label for="">Lieu de naissance:</label><input name="lieu_naissance" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">Adresse :</label><input name="address" type="text" class="fi1" required>
            <br>
            <br>
            <label for="">Groupe Sanguin :</label>
            <select name="groupe_sanguin" class="fi1">
                <option value="">Groupe Sanguin</option>
                <option value="O+">O+</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O-">O-</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Add" name="ADD">
        </form>
    </Fieldset>
</main>
<script>
    const main = document.getElementById("main");
    const sidebar = document.getElementById("sidebar");
    const width_sidebar = window.getComputedStyle(sidebar).getPropertyValue("width");
    main.style.marginLeft = width_sidebar;
</script>
</body>

</html>