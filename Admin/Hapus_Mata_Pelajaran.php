<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query("delete from mata_pelajaran where kode_mata_pelajaran='$Kode'");
header('location:mata_pelajaran.php');
?>