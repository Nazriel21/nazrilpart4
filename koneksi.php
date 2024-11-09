<?php
$mysqli=new mysqli("localhost","root","","dbpenjualan");
if($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->connect_error);
}
?>