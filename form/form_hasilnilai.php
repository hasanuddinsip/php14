<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil Nilai Rata Rata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<!-- menerima inputan dari form input.php -->
<!-- sesuaikan methode yg dipakai  -->

<?php
$nilai_uts = $_POST['nilaiuts'];
$nilai_uas = $_POST['nilaiuas'];

include 'function.php';
$hasil = nilaiRata($nilai_uts, $nilai_uas);

// include'../1text.php';
?>

<body >
    <div class="container">
    <table class="table table-bordered table-striped">
        <tr>
            <td>Nilai UTS</td>
            <td>: </td>
            <td><?php echo $nilai_uts?></td>
        </tr>

        <tr>
            <td>Nilai UAS</td>
            <td>: </td>
            <td><?php echo $nilai_uas?></td>
        </tr>
        <tr>
            <td>Nilai Rata Rata</td>
            <td>: </td>
            <td><?php echo $hasil['nilaiRata']?></td>
        </tr>
        <tr>
            <td>$keterangan</td>
            <td>: </td>
            <td><?php echo $hasil['keterangan']?></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>: </td>
            <td><?php echo $hasil['message']?></td>
        </tr>
    </table>
    </div>
</body>

</html>