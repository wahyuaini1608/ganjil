<?php
include ("koneksi.php");
if (isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $jk=$_POST['jenis_kendaraan'];

    $sql="INSERT INTO tb_bbm (nik,jenis_kendaraan) VALUES ('$nik','$jk')";
    $query=mysqli_query ($koneksi,$sql);
}else{
    ("akses dilarang");
}
?>