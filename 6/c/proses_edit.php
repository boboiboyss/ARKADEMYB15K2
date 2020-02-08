<?php
include "koneksi.php";
$id_nama = $_POST['id_nama'];
$nama = $_POST['name'];
$id_work = $_POST['id_work'];
$id_salary = $_POST['id_salary'];

mysqli_query($koneksi, "UPDATE tb_nama SET name = '$nama', id_work = '$id_work', id_salary = '$id_salary' WHERE id_nama = '$id_nama'");
header('location:index.php');
