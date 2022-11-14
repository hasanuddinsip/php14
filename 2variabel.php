<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 (Variabel)</title>
</head>

<body>

    <?php
    // membuat variabel
    $nama_lengkap = "Hasanuddin";
    $nim = 11112022;
    $nilai = 97.5;
    $umur = 40;
    $lulus = true;
    $lulus2 = "true";
    $lulus3 = false;
    $lulus4 = true;
    
    $array = ['A', 'B', 'C']
    //gettype ($variabelnya) => adalah fungsi dari php untuk mengecek data
    ?>


    <h1>Selamat Datang, <?php echo $nama_lengkap;
                        ?>
    </h1>

    <p> Tipe data dari variabel $nama_lengkap adalah <?php echo gettype($nama_lengkap) ?></p>
    <p> NIM : <?php echo $nim ?> </p>
    <p> Tipe data dari variabel $nim adalah <?php echo gettype($nim) ?></p>

    <p> NILAI : <?php echo $nilai ?> </p>
    <p> Tipe data dari variabel $nilai adalah <?php echo gettype($nilai) ?></p>
    <p> Tipe data dari variabel $umur adalah <?php echo gettype($umur) ?></p>
    <p> LULUS : <?php echo $lulus ?> </p>
    <p> Tipe data dari variabel $lulus adalah <?php echo gettype($lulus) ?></p>
    <p> LULUS : <?php echo $lulus2 ?> </p>
    <p> Tipe data dari variabel $lulus2 adalah <?php echo gettype($lulus2) ?></p>
    <p> LULUS : <?php echo $lulus3 ?> </p>
    <p> Tipe data dari variabel $lulus3 adalah <?php echo gettype($lulus3) ?></p>
    <p> Tipe data dari variabel $lulus4 adalah <?php echo gettype($lulus4) ?></p>
</body>

</html>