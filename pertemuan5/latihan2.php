<?php

//melakukan pengulangan pada array (for/foreach)
$angka = [2,3,4,5,2,3,5,7];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            float: left;
            margin: 3px;
            line-height: 50px;
        }
        .clear {clear: both}
    </style>
</head>
<body>
    <?php for($i = 0;$i < count($angka); $i++) {?>
    <div class="kotak"><?php echo $angka[$i];?></div>
    <?php }; ?>
    <div class="clear"></div>
    <?php foreach($angka as $a) {?>
    <div class="kotak"><?php echo $a; ?></div>
    <?php };?>
    <div class="clear"></div>
    <?php foreach($angka as $a) :?>
    <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>
</body>
</html>