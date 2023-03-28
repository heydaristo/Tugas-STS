<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query("delete from murid where nisn='$Kode'");
header('location:murid.php');
?>