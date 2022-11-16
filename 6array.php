<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 (ARRAY)</title>
</head>

<body>
    <?php
    // Array => tipe data yang bisa menampung lebih dari 1 nilai
    //Array ada 2 jenis 
    // 1. Array indexing => Array yang memiliki index di dalamnya
    $buah = ['Anggur', 'Belimbing', 'Mangga', 'Jambu', 'Semangka'];
    var_dump($buah);


    echo "<br>";
    echo "<hr>";
    // untuk mengambil nilai dari array . kita harus manggil indexnya
    echo " Ambil nilai buah yang :" . $buah[0] . "<br>";
    echo " Ambil nilai buah yang :" . $buah[1] . "<br>";
    echo " Ambil nilai buah yang :" . $buah[2] . "<br>";


    echo "<br>";
    echo "<hr>";

    foreach ($buah as $b) {
        echo " Ambil nilai buah yang :" . $b . "<br>";
    }
    // tidak bisa cetak langsung misal echo $buah;
    echo "<br>";
    echo "<hr>";


    // 2. Array Associative => Array yang terdiri dari key dan value
    $nilai = array(
        // key => value
        'IPA' => 90,
        'IPS' => 85,
        'MTK' => 87
    );

    // untuk mengambil nilai dari array associative , kita panggil key.nya
    echo "Ambil nilai IPA:" . $nilai['IPA'] . "<br>";
    echo "Ambil nilai IPS" . $nilai['IPS'] . "<br>";
    echo "Ambil nilai IPA:" . $nilai['MTK'] . "<br>";

    echo "<br>";
    echo "<hr>";
    ?>

    <?php
    // untuk menampilkan judul key dan isi valuenya , bisa menggunakan foreach
    foreach ($nilai as $key => $n) :
    ?>

        <!-- disini akan ditampilkan foreach dengan kombinasi tag html -->
        <ul>
            <li><?php echo "Key : $key, value : $n " ?> </li>
        </ul>

    <?php
    endforeach;
    ?>

    <!-- contoh lain -->

    <?php
    $angka = array(
        // key => value
        'Sosiologi' => 89,
        'Hukum' => 96,
        'Psikologi' => 87,
    );
    echo "ambil nilai" . $angka['Sosiologi'] . "<br>";
    echo "ambil nilai" . $angka['Hukum'] . "<br>";
    echo "ambil nilai" . $angka['Psikologi'] . "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    foreach ($angka as $nilaiips => $welehweleh) :
    ?>

        <ul>
            <li><?php echo "Nilai Matkul  : $nilaiips, adalah : $welehweleh " ?> </li>
        </ul>

    <?php
    endforeach;
    ?>
</body>

</html>