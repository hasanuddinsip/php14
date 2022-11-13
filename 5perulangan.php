<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 (Perulangan)</title>
</head>

<body>
    <?php
    //looping For => perulangan yang diketahui nilai akhirnya
    // for ($nilaiawal; $variabel <= $batasan; $variabel++){

    // }

    //increment
    for ($i = 1; $i <= 10; $i++) {
        // menampilkan Hello sebanyak perulangan yang di setting
        echo "Hello semua - $i <br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    //decrement
    for ($a = 10; $a >= 1; $a--) {
        echo "Hello -$a <br> ";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    /*
    // looping WHILE => perulangan yang tidak diketahui batas akhirnya
// menampilkan Hello sebanyak perulangan yang di setting
Kondisi ++ atau --
    $nilaiawal = 1;
    while()
*/
    $nilaiawal = 1;
    while ($nilaiawal <= 10) {
        //apa yang dilakukan
        echo "Hello While Tambah = $nilaiawal <br>";

        //kondisi
        $nilaiawal++;
    }

    echo "<br>";
    echo "<hr>";

    $nilaiakhir = 11;
    while ($nilaiakhir >= 1) {
        //apa yang dilakukan
        echo "Hello While Kurang= $nilaiakhir <br>";

        //kondisi
        $nilaiakhir--;
    }

    echo "<br>";
    // perulangan FOREACH => biasa dipakai untuk perulangan pada type data ARRAY
    $data1 = [
        'BA0001',
        'BA0002',
        'BA0003'
    ];

    $data2 = [
        'CA0001',
        'CA0002',
        'CA0003'
    ];
    /*
// foreach ($variabel as $vr){
   // lakukan apa yang akan dilakukan
}
*/

    foreach ($data1 as $dt1) {
        echo "$dt1 <br>";
    }

    foreach ($data2 as $dt1) {
        echo "$dt2 <br>";
    }
    ?>

</body>

</html>