<?php
include("koneksi.php");

if (isset($_GET['kdbarang'])) {

    $kdbarang = $_GET['kdbarang'];
    $sql ="DELETE FROM barang WHERE kdbarang=$kdbarang";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>