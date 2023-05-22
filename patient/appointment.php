<?php
require("../setting/header_patient.php");
?>
<h3 class="H3_Title">حجـــــز مـــــوعد</h3>
<section class="section">
    <form method="post" action="insert_rendezv.php" enctype="multipart/form-data">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert">
                <?php print $_SESSION['message'];
                unset($_SESSION['message']); ?>
            </div>
        <?php } ?>
        <div>
            <label for="date_ap">التاريخ:</label>
            <input type="date" class="form-control mt2" required id="date_ap" name="date_ap">
        </div>
        <div>
            <label>الفـــــــتــرة:</label>
            <select name="period" class="form-control mt2" required>
                <option value="sabah">صباحا</option>
                <option value="massa">مساءا</option>
            </select>
        </div>
        <div>
            <label for="protocole">وثيقة :</label>
            <input type="file" class="form-control mt2" id="protocole" name="protocole">
        </div>
        <div>
            <label for="analytic">تحاليل:</label>
            <input type="file" class="form-control mt2" id="analytic" name="analytic">
        </div>
        <input class="btn" type="submit" name="INSERTRDV" value="حجز">
    </form>
</section>

<?php
require("../setting/footer_patient.php");
?>