<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7 (Function / Method)</title>
</head>

<body>
    <?php
    //function => kelompok script yang berupa instruksi2 (fungsi yang kita buat)
    /* 1. function tanpa menerima parameter

    2. function dengan parameter
*/

    function cetakHello()
    {
        echo "Helloo";
    }

    function getData()
    {
        return "Data berhasil diget";
        //return hanya mengembalikan data
    }

    // function dengan parameter
    function luasSegitiga($alas, $tinggi)
    {
        //proses hitung luas
        $luas = $alas * $tinggi / 2;

        // biar hasil bisa dipakai harus return hasilnya
        return $luas;
    }


    function luasPersegi($sisi1, $sisi2)
    {
        //proses hitung luas
        $luasnya = $sisi1 * $sisi2;

        // biar hasil bisa dipakai harus return hasilnya
        return $luasnya;
    }

    function isiKubus($sisi1, $sisi2, $sisi3)
    {
        //proses hitung luas
        $volumnya = $sisi1 * $sisi2 * $sisi3;

        // biar hasil bisa dipakai harus return hasilnya
        return $volumnya;
    }

    function perkalian($sisi1, $sisi2, $sisi3, $sisi4)
    {
        //proses hitung luas
        $hasilnya = $sisi1 * $sisi2 * $sisi3 * $sisi4;

        // biar hasil bisa dipakai harus return hasilnya
        return $hasilnya;
    }



    //cara panggil function => cetakHello()

    ?>
    <h1> Panggil Function cetakHello()<?php cetakHello() ?></h1>
    <h1> Panggil Function getData()<?php echo getData() ?></h1>
    <h1> Panggil Function luasSegitiga($alas, $tinggi)<?php echo luasSegitiga(20, 80) ?></h1>
    <h1> Panggil Function luasPersegi($sisi1, $sisi2)<?php echo luasPersegi(10, 10) ?></h1>
    <h1> Panggil Function isiKubus($sisi1, $sisi2, $sisi3)<?php echo isiKubus(10, 10, 10) ?></h1>
    <h1> Panggil Function perkalian4($sisi1, $sisi2, $sisi3, $sisi4)<?php echo perkalian(10, 5, 10, 5) ?></h1>
</body>

</html>