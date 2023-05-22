<!DOCTYPE html>
<html>

<head>
    <title>ORDONNANCE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_forms.css">
    <?php
    require("../setting/header_medcin.php");
    ?>
    <title>Document</title>
    <style>
        @media print {


            @page {
                size: A5;
            }


            .body-ord {
                margin: 0;
                padding: 0;
                top: 0;

            }

            .ord {
                margin: 0;
                padding: 0;
                top: 0;
                border: none;
            }

            .main-ord {
                margin: 0;
                padding: 0;
                right: 0;
            }


            .no-print {
                display: none;
            }
        }
    </style>
</head>

<main id="main" class="main-ord">
    <div class="ord" id="ord" style="width: 65vh; padding: 10px;margin: 20px; border: 1px solid;height: 94vh;">
        <div class="header">
            <div class="logo">
                <div>ولاية غرداية</div>
                <div>المؤسسة العمومية الإستشفائية بالقرارة</div>
            </div>
            <div style="transform: translateY(20px);">
                <label for="location">القرارة في:</label>
                <input type="date" id="location" name="location" style="width: 100px;" class="input">
            </div>
        </div>
        <h1 class="title">وصـــفـــــــــــة </h1>
        <h1 class="title" style="font-size: 17px; ">ORDONNANCE</h1>

        <div style="display: flex; direction: ltr;transform: translateY(10px);">
            <div class="oredonnance" style="width: 70%;">
                <label style=" min-width: 99px">Nom Prénom:</label>
                <input name="" style="width:100%;" class="input">
            </div>
            <div class="oredonnance" style="width: 30%;">
                <label class=""> Age:</label>
                <input name="" style="width:100%;" class="input">
            </div>
        </div>

        <textarea class="textarea" style="height: 49vh;"></textarea>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js">
        </script>

    </div>
    <div class="no-print">
        <button class="button3" onclick="window.print()">طباعة</button>

    </div>

</main>