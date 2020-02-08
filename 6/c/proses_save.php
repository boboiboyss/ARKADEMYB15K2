<?php
include "koneksi.php";
$nama = $_POST['name'];
$id_work = $_POST['id_work'];
$id_salary = $_POST['id_salary'];
mysqli_query($koneksi, "INSERT INTO tb_nama (name,id_work,id_salary) VALUES ('$nama','$id_work','$id_salary')");
header('location:index.php');
