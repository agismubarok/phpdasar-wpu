<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 2 php</title>

  <style>
    .warna {
      background-color: red;
    }
  </style>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
  <?php for ($i = 1; $i <= 5; $i++) : ?>
    <?php if ($i % 2 == 1) : ?> 
    <tr class="warna">
    <?php else : ?>
    <tr>
    <?php endif; ?>
      <?php for ($y = 1; $y <= 5; $y++) : ?>
        <td><?= "$i,$y" ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
  </table>
</body>
</html>