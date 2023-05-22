<?php
require("../setting/header_patient.php");
$select_query = "SELECT *FROM patient WHERE id = '" . $_SESSION['PatientId'] . "'";
$result_info = mysqli_query($conn, $select_query);
$row_info = mysqli_fetch_assoc($result_info);

?>
<h3 class="H3_Title">معلومات المريض</h3>
<section class="section">
    <form method="post" action="update_info.php" enctype="multipart/form-data">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="seccesfull">
                <?php print $_SESSION['message']; unset($_SESSION['message']); ?>
            </div>
        <?php } ?>

        <div>
            <label>اللقب :</label>
            <input type="text" class="form-control" id="nom" name="nom" required value="<?php echo $row_info["nom"] ?>" placeholder="لقبك">
        </div>
        <div>
            <label>الاسم :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required value="<?php echo $row_info["prenom"] ?>" placeholder="أسمك">
        </div>
        <div>
            <label>تاريخ الميلاد :</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required value="<?php echo $row_info["date_naissance"] ?>" placeholder="تاريخ الميلاد">
        </div>
        <div>
            <label>البريد الالكتروني :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="بريدك الإكتروني" required value="<?php echo $row_info["email"] ?>">
        </div>
        <div>
            <label>الجنس :</label> 
            <select class="form-control" name="sex" id="sex" required>
                <option value="" selected required>
                    الجنس</option>
                <option value="M" <?php $row_info['sex'] == 'M' ? print 'selected' : '' ?>>
                    ذكر </option>
                <option value="F" <?php $row_info['sex'] == 'F' ? print 'selected' : '' ?>>
                    أنثى </option>
            </select>
        </div>
        <div>
            <label>زمرة الدم :</label>
            <select class="form-control" name="groupe_sanguin" id="groupe_sanguin">
                <option value=""> </option>
                <option value="O+" <?php $row_info['groupe_sanguin'] == 'O+' ? print 'selected' : '' ?>> O+
                </option>
                <option value="O-" <?php $row_info['groupe_sanguin'] == 'O-' ? print 'selected' : '' ?>> O-
                </option>
                <option value="A+" <?php $row_info['groupe_sanguin'] == 'A+' ? print 'selected' : '' ?>> A+
                </option>
                <option value="A-" <?php $row_info['groupe_sanguin'] == 'A-' ? print 'selected' : '' ?>> A-
                </option>
                <option value="B+" <?php $row_info['groupe_sanguin'] == 'B+' ? print 'selected' : '' ?>> B+
                </option>
                <option value="B-" <?php $row_info['groupe_sanguin'] == 'B-' ? print 'selected' : '' ?>> B-
                </option>
                <option value="AB+" <?php $row_info['groupe_sanguin'] == 'AB+' ? print 'selected' : '' ?>> AB+
                </option>
                <option value="AB-" <?php $row_info['groupe_sanguin'] == 'AB-' ? print 'selected' : '' ?>> AB-
                </option>
            </select>
        </div>
        <div>
            <label>مكان الاقامة :</label>
            <input type="text" class="form-control" id="address" name="address" required value="<?php echo $row_info["address"] ?>" placeholder="مكان اقامتك">
        </div>
        <div>
            <label>رقم الهاتف :</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required value="<?php echo $row_info["telephone"] ?>" placeholder="مكان اقامتك">
        </div>
        <div>
            <label>الصورة :</label>
            <input type="file" class="form-control" id="image_url" name="image_url">
            <input type="hidden" class="form-control" id="old_image_url" name="old_image_url" value="<?php echo $row_info['image_url'] ?>">
        </div>

        <input class="btn" id="to_popup" type="submit" value="حفظ" name="SAVEINFO">
    </form>
</section>
<?php
require("../setting/footer_patient.php");
?>