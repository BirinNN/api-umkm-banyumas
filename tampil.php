<?php

header("Content-type:application/json");

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "pegawaii") or die("Error " . mysqli_error($konek));

//menampilkan data dari database, table tb_anggota
$sql = 'select * from pegawai where agama = "Hindu"';
$result = mysqli_query($konek, $sql) or die("Error " . mysqli_error($konek));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {
    $ArrAnggota[] = $row;
}

echo json_encode($ArrAnggota, JSON_PRETTY_PRINT);

//tutup koneksi ke database
mysqli_close($konek);
