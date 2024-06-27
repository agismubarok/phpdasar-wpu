<?php 
// pengulangan pada array
// for / foreach
$angka = [13, 12, 23, 42, 57, 64, 71, 100];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan array</title>
  <style>
    div {
      background-color: salmon;
      height: 50px;
      width: 50px;
      margin: 5px;
      float: left;
      text-align: center;
      line-height: 50px;
    }
  </style>
</head>
<body>
     <?php for($i = 0; $i < count($angka); $i++) {?>
      <div><?php echo $angka[$i];?></div>
    <?php }?>

    <br>

    <?php foreach($angka as $a) { ?>
      <div><?php echo $a;?></div>
    <?php }?>

    <div class="clear"></div>

    <?php foreach($angka as $a) :?>
    <div><?= $a;?></div>
    <?php endforeach;?>
</body>
</html>