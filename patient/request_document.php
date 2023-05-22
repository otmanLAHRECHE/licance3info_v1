<?php
require("../setting/header_patient.php");
?>
<h3 class="H3_Title">طلب وثيقة</h3>
<section class="section" id="documents">

    <form method="POST" action="insert_req_doc.php">
        <?php if (isset($_SESSION['succes'])) { ?>
            <div class="seccesfull">
                <?php print $_SESSION['succes'];
                unset($_SESSION['succes']); ?>
            </div>
        <?php } else if (isset($_SESSION['error'])) { ?>
                <div class="seccesfull">
                <?php print $_SESSION['error'];
                unset($_SESSION['error']); ?>
                </div>
        <?php } ?>
        <div class="document-type">
            <label class="DOCtype">نوع الوثيقة:</label>
            <select name="document_type" style="width:100%;">
                <option value="protocole">البروتوكول</option>
                <option value="certaficat">شهادة طبية</option>
            </select>
        </div>
        <input name="insertdoc" class="submitB inp" type="submit" value="طلب">
    </form>
</section>

