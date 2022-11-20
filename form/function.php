<?php 
//function luas Persegi Panjang

function luasPersegiPanjang($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

// function nilai rata-rata

function nilaiRata($nilai_UTS, $nilai_UAS){

$nilaiRata= ($nilai_UTS+$nilai_UAS) / 2;

if ($nilaiRata >= 81 AND $nilaiRata <=100) {
    $keterangan = "ket  : A";
    $message= "Excellent!";
} else if ($nilaiRata >= 78 && $nilaiRata <= 80.99) {
    $keterangan = "ket  : A-";
    $message = "Good";
} else if ($nilaiRata >= 75 && $nilaiRata <= 77.99) {
    $keterangan = "ket  : B+";
    $message = "Not Bad";
} else if ($nilaiRata < 75 ) {
    $keterangan = "ket  : Tidak Lulus";
    $message = "Keep Spirit";
} else {
    $keterangan = "Ket  : TIDAK TERDEFINISI";
    $message = "undefined";
}





$data= array (
  'nilaiRata'=> $nilaiRata,
  'keterangan' => $keterangan,
  'message'=> $message
);
return $data;
}
