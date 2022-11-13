<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 (If Else)</title>
</head>

<body>
    <?php
    $nilaiUTS = 140;
    $nilaiUAS = 97;
    $nilai_rata = ($nilaiUTS + $nilaiUAS) / 2;

    //percabangan 1 kondisi
    if ($nilai_rata == 100) { //== (sama dengan dobel itu membandingkan suatu nilai, bukan memberikan nilai)
        // sama dengan tiga === membandingkan suatu nilai (isinya) dan juga tipe datanya)
        $keterangan1 = "LULUS";
    } else {
        $keterangan1 = " SEMANGAT , BELAJAR LAGI YA";
    }

    // percabangan 3 kondisi
    if ($nilai_rata >= 100) {
        $keterangan2 = "ket 2 : LULUS";
    } else if ($nilai_rata >= 90 && $nilai_rata <= 99) {
        $keterangan2 = "ket 2 : Rata-Rata";
    } else {
        $keterangan2 = "Ket 2 : TIDAK LULUS";
    }


    $username = "Sydemy";
    $password = 123;
    // kondisi membandingkan nilai dari variabel beserta tipe datanya
    if ($username === "Sydemy" && $password === 123) {
        $sucess = "SESUAI ANGKA DAN TIPE DATA";
    } else {
        $sucess = "TIDAK SESUAI";
    }

    $data = "DATA";
    if ($data == "DATA") :
        $valid = true;
    else :
        $valid = false;
    endif;

    ?>

    <p> Keterangan1 : <?php echo $keterangan1; ?></p>
    <p> Keterangan2 : <?= $keterangan2; ?></p>
    <p> Keterangan3 : <?= $sucess; ?></p>
    <p> Valid tidak? : <?= $valid; ?></p>
</body>

</html>