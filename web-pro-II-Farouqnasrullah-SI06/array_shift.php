<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Irfan", "Gilang", "Algifari", "Domami"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>