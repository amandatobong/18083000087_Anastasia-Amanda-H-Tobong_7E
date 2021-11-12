<?php
include("koneksi.php");

if(isset($_POST['input'])){ 

    $kdbarang = $_POST['kdbarang'];
    $namabarang = $_POST['namabarang'];
    $qty = $_POST['qty'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $ketstok = $_POST['ketstok'];

    $sql = "INSERT INTO barang (namabarang, qty, kategori, harga, keterangan, ketstok) VALUES 
    ('$namabarang','$qty','$kategori','$harga','$keterangan','$ketstok')";
    $query = mysqli_query($db, $sql);

if($query){
    header('Location: list.php?status=sukses');

} else {
    header('Location: list.php?status=gagal');
}
    }else {
    die("Akses Dilarang....");

}
?>