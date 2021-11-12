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

    $sql = "UPDATE barang SET namabarang='$namabarang', 
    qty='$qty', kategori= '$kategori', harga='$harga', keterangan='$keterangan', ketstok='$ketstok' WHERE kdbarang=$kdbarang";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

}else{
    die("Akses dilarang...");
}

?>