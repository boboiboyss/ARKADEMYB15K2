<?php
include "koneksi.php";
$id_nama = $_GET['id_nama'];
$query = mysqli_query($koneksi, "delete from tb_nama WHERE id_nama='$id_nama'");
header('location:index.php');
