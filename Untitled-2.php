<form action="" method="post">
    <input value="true"type="checkbox" name="ssss" id="">
    <input type="text" name="jjj" required>
    <input type="submit" name="asd">
</form>
<?php 

if(isset($_POST['ssss']))
    echo "true";
else echo "false";
?>