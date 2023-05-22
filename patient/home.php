<?php
require("../setting/connect_databes.php");
require("../setting/header_patient.php");
$patient_id = $_SESSION["PatientId"];
$selectPT = mysqli_query($conn, "SELECT * FROM patient WHERE id = $patient_id");
$rowPT = mysqli_fetch_assoc($selectPT);
?>
<h3 class="H3_Title">الـرئـيــســـيــــــــة</h3>
<section class="section">

    <div id="raiisya" class="containeres lapage">
        <?php

        if ($rowPT['status'] == 1) { //1 ->extern
            $selectRDV = mysqli_query($conn, "SELECT * FROM rendez_v WHERE patient_id = $patient_id");

            if ($selectRDV && mysqli_num_rows($selectRDV) > 0) {
                $rowRDV = mysqli_fetch_assoc($selectRDV); ?>
                <br>
                <br>
                <div class="sent-docsys">
                    <p><b>موعدك</b></p>
                    <div class="sent-doc status_color">
                        <style>
                            .sent-docsys {
                                display: block;
                            }

                            .status_color {
                                <?php if ($rowRDV["status"] == 0) { ?>
                                    background: yellow;
                                <?php } else
                                    if ($rowRDV["status"] == 1) { ?>
                                        background: greenyellow;
                                    <?php } ?>
                            }
                        </style>
                        <img src="../images/documentICON.png" alt="document">
                        <div style="display:flex;align-items: center">
                            <p style="font-size:24px">التاريخ:</p><input type="date" value="<?php echo $rowRDV["date_ap"]; ?>" disabled>
                        </div>
                        <div style="display:flex;align-items: center">
                            <p style="font-size:24px">الفترة:</p><input type="text" value="<?php if ($rowRDV["period"] == "sabah")
                                echo "صباحا";
                            else if ($rowRDV["period"] == "massa")
                                echo "مساءا"; ?>" disabled>
                        </div>
                        <div>
                            <?php
                            if ($rowRDV["status"] == 0) { ?>
                                <p>قيد الإنتظار</p>
                                <?php
                            } else if ($rowRDV["status"] == 1) { ?>
                                    <p>تم القبول</p>
                                <?php
                            }
                            ?>

                        </div>

                    </div>
                </div>
                <?php
            }
        } else if ($rowPT['status'] == 2) {
            $selectDOC = mysqli_query($conn, "SELECT * FROM demand_document WHERE patient_id = $patient_id");
            if ($selectDOC && mysqli_num_rows($selectDOC) > 0) { ?>
                    <div class="sent-docsy">
                        <h3 style="font-weight: 00">الوثائق المطلوبة</h3>
                    <?php while ($rowDOC = mysqli_fetch_assoc($selectDOC)) { ?>
                            <div class="sent-doc">
                                <img src="../images/documentICON.png" alt="document">
                                <p>
                                <?php echo $rowDOC["document"]; ?>
                                </p>
                                <button class="Telecharger" onclick="" <?php if ($rowDOC["status"]==0) echo "disabled" ?>>تحميل الوثيقة</button>
                            </div>
                    <?php }
            } ?>
                </div>
        <?php }
        ?>
        <br>
        <br>
        <br>
        <div class="sent-docs">
            <p><b>حمية الغذاية الخاصة بك</b></p><br>
            <div>
                <div class="containere">
                    <div class="lefte">

                        <img src="../images/الحمية.jpg" width="100%" height="500">
                    </div>
                    <div class="righte">

                        <iframe src="../images/الحميات_العلاجية_لأمراض_الكلية_Mss.pdf" width="100%"
                            height="500"></iframe>
                    </div>
                </div>


            </div>

        </div><br><br><br>
        <div class="sent-docsy">
            <p><b>موقع العيادة</b></p>
            <div src="../images/الموقع.jpg" width="100%" style="height: 70vh;background-image: url('../images/الموقع.jpg');"></div>
        </div>
    </div>

    </div>

</section>

<?php
require("../setting/footer_patient.php");
?>