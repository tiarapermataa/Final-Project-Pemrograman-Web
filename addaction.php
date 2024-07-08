<?php
include 'koneksi.php';

$jenis_kendaraan = $_POST['jenis_kendaraan'];
$merk_kendaraan = $_POST['merk_kendaraan'];
$warna_kendaraan = $_POST['warna_kendaraan'];
$tahun = $_POST['tahun_kendaraan'];
$nomor_polisi = $_POST['nomor_pol'];
$nomor_rangka = $_POST['nomor_rangka'];
$nomor_mesin = $_POST['nomor_mesin'];
$pemilik = $_POST['pemilik'];
$alamat_pemilik = $_POST['alamat'];

// Make sure the database connection is established
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($con, "INSERT INTO kendaraan (jenis_kendaraan, merk_kendaraan, warna_kendaraan, tahun_kendaraan, nomor_polisi, nomor_rangka, nomor_mesin, pemilik, alamat_pemilik) VALUES ('$jenis_kendaraan', '$merk_kendaraan', '$warna_kendaraan', '$tahun', '$nomor_polisi', '$nomor_rangka', '$nomor_mesin', '$pemilik', '$alamat_pemilik')") or die(mysqli_error($con));

if ($query) {
	echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
	echo "<script>alert('Data gagal ditambahkan');</script>";
}
