<?php 
  function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu, $nama";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan function di php</title>
</head>
<body>
  <h1><?= salam("sore", "agis mubarok");?></h1>
</body>
</html>