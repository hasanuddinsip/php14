
<?php
$title = "Latihan 3 (Operator)";
//variabel
$a=7;
$b=3;

//operator 
$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> </title>
</head>
<body>
<p> Hasil Penjumlahan dari :  <?php echo $penjumlahan ?>  </p>
<p> <?php echo  "Hasil Penjumlahan dari $a + $b = $penjumlahan "; ?> </p>
<p> <?php echo 'Hasil'. $a . '-' . $b . '=' . $pengurangan; ?> </p>
<p> Hasil Pengurangan : <?php echo $pengurangan ?>  </p>
<p> <?php echo  "Hasil Perkalian dari $a * $b = $perkalian "; ?> </p>
<p> Hasil Perkalian : <?php echo $perkalian ?>  </p>
<p> <?php echo " Hasil Pembagian dari $a / $b = $pembagian "; ?></p>
<p> Hasil Pembagian : <?php echo $pembagian ?>  </p>
<p> <?php ?> </p>
<p> Hasil Sisa Bagi : <?php echo $sisabagi ?>  </p>
<p> Hasil Pemangkatan : <?php echo $pangkat ?>  </p>
    




</body>
</html>