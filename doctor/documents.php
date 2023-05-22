<?php
require("../setting/connect_databes.php");
require("../setting/header_medcin.php");
$selectPT = mysqli_query($conn, "SELECT * FROM patient WHERE `status`= 2");

?>
<!DOCTYPE html>
<html class="html_sand">

<head>

    <meta charset="UTF-8">
    <title>Document Sending Page</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .body_sand {
            font-family: Arial, sans-serif;
        }

        .container_sand {
            margin-left: 200px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .h1_sand {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .form-group_sand1 {
            padding: 5px;
            background: linear-gradient(#256aff, #0035a7, #0035a7, #0035a7);
            margin-bottom: 20px;
            color: white;
            border-radius: 10px;
        }
        .form-group_sand2 {
            padding: 5px;
            background: linear-gradient(#256aff, #0035a7, #0035a7, #0035a7, #0035a7, #0035a7, #0035a7);
            margin-bottom: 20px;
            color: white;
            border-radius: 10px;
        }
        .form-group_sandbtns {
            margin-bottom: 20px;
        }

        .label_sand {
            display: block;
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .select_sand {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(#aaa,#ccc);
            font-size: 1.2rem;
            appearance: none;
        }

        .select_sand[multiple] {
            height: 200px;
            padding: 15px;
        }

        .btn-send {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .document-type_sand {
            font-size: 34px;
        }

        .btn-send:hover {
            background-color: #0062cc;
        }
    </style>
</head>


<body class="body_sand">
    <div class="container_sand">
        <h2 class="h1_sand">Select Patients to Send Documents</h2>

        <form method="post" action="next_fromDOC.php">
            <div class="form-group_sand1">
                <label class="label_sand" for="document-type_sand">Select Document Type:</label>
                <select class="select_sand" id="document-type_sand" name="DOCtype">
                    <option value="protocole.php">PROTOCOLE</option>
                    <option value="ordennance.php">LES ANALYSES</option>
                    <option value="certaficat.php">CERTAFICAT MEDICALE</option>
                    <option value="ordennance.php">ORDENNANCE</option>
                </select>
            </div>
            <div class="form-group_sand2">
                <label class="label_sand" for="patient-list">Select Patients:</label>
                <select class="select_sand" id="patient-list" name="patientsSEL[]" multiple>
                    <?php
                    while ($rowPT = mysqli_fetch_assoc($selectPT)) { ?>
                        <option value="<?php echo $rowPT["id"]; ?>">
                            <?php echo $rowPT["nom"] . " " . $rowPT["prenom"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group_sandbtns" >
                <button type="submit" name="SUIVANT_doc" class="btn-send">SUIVANT</button>
                <a href="demandes.php" class="btn-send"
                    style="text-decoration-line:none ;background-color: #444;">ANNULER</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php

