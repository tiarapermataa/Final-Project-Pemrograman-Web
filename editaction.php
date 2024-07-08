<?php

// Include the database connection file
require_once("koneksi.php");

if (isset($_POST['update'])) {
    $table = $_POST['table'];
    if ($table === 'admin') {
        // Proses untuk updateAdmin
        updateAdmin($mysqli);
    } elseif ($table === 'user') {
        // Proses untuk updateUser
        updateUser($mysqli);
    } elseif ($table === 'kendaraan') {

        updateKendaraan($mysqli);
    } else {
        // Tindakan jika tabel tidak valid
        echo "Invalid table!";
    }
}

function updateAdmin($mysqli)
{

    if (isset($_POST['update']) && $_POST['table'] == 'admin') {
        // Escape special characters in a string for use in an SQL statement
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $position = mysqli_real_escape_string($mysqli, $_POST['position']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

        // Check for empty fields
        if (empty($name) || empty($position) || empty($email)) {
            if (empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if (empty($position)) {
                echo "<font color='red'>Position field is empty.</font><br/>";
            }

            if (empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }
        } else {
            // Update the database table
            $result = mysqli_query($mysqli, "UPDATE admin SET `name` = '$name', `position` = '$position', `email` = '$email' WHERE `id` = $id");

            // Display success message
            if ($result) {
                echo "<p><font color='green'>Data updated successfully!</font></p>";
                echo "<a href='dataadmin.php'>View Result</a>";
            } else {
                echo "<p><font color='red'>Error updating data.</font></p>";
            }
        }
    }
}

function updateUser($mysqli)
{

    if (isset($_POST['update']) && $_POST['table'] == 'user') {
        // Escape special characters in a string for use in an SQL statement
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $address = mysqli_real_escape_string($mysqli, $_POST['address']);
        $notelp = mysqli_real_escape_string($mysqli, $_POST['notelp']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

        // Check for empty fields
        if (empty($name) || empty($address) || empty($notelp) || empty($email)) {
            if (empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if (empty($address)) {
                echo "<font color='red'>Address field is empty.</font><br/>";
            }

            if (empty($notelp)) {
                echo "<font color='red'>Phone number field is empty.</font><br/>";
            }

            if (empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }
        } else {
            // Update the database table
            $result = mysqli_query($mysqli, "UPDATE user SET `name` = '$name', `address` = '$address', `notelp` = '$notelp', `email` = '$email' WHERE `id` = $id");

            // Check if the update was successful
            if ($result) {
                echo "<p><font color='green'>Data updated successfully!</p>";
                echo "<a href='datacust.php'>View Result</a>";
            } else {
                echo "<p><font color='red'>Error updating data.</font></p>";
            }
        }
    }
}


function updateKendaraan($mysqli)
{
    if (isset($_POST['update']) && $_POST['table'] == 'kendaraan') {
        // Escape special characters in a string for use in an SQL statement
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $jenis_kendaraan = mysqli_real_escape_string($mysqli, $_POST['jenis_kendaraan']);
        $merk_type = mysqli_real_escape_string($mysqli, $_POST['merk_type']);
        $warna_kendaraan = mysqli_real_escape_string($mysqli, $_POST['warna_kendaraan']);
        $tahun_kendaraan = mysqli_real_escape_string($mysqli, $_POST['tahun_kendaraan']);
        $nomor_polisi = mysqli_real_escape_string($mysqli, $_POST['nomor_polisi']);
        $nomor_rangka = mysqli_real_escape_string($mysqli, $_POST['nomor_rangka']);
        $nomor_mesin = mysqli_real_escape_string($mysqli, $_POST['nomor_mesin']);
        $pemilik = mysqli_real_escape_string($mysqli, $_POST['pemilik']);
        $alamat_pemilik = mysqli_real_escape_string($mysqli, $_POST['alamat_pemilik']);

        // Check for empty fields
        if (empty($jenis_kendaraan) || empty($merk_type) || empty($warna_kendaraan) || empty($tahun_kendaraan) || empty($nomor_polisi) || empty($nomor_rangka) || empty($nomor_mesin) || empty($pemilik) || empty($alamat_pemilik)) {
            if (empty($jenis_kendaraan)) {
                echo "<font color='red'>Jenis Kendaraan field is empty.</font><br/>";
            }

            if (empty($merk_type)) {
                echo "<font color='red'>Merk/Type field is empty.</font><br/>";
            }

            if (empty($warna_kendaraan)) {
                echo "<font color='red'>Warna Kendaraan field is empty.</font><br/>";
            }

            if (empty($tahun_kendaraan)) {
                echo "<font color='red'>Tahun Kendaraan field is empty.</font><br/>";
            }

            if (empty($nomor_polisi)) {
                echo "<font color='red'>Nomor Polisi field is empty.</font><br/>";
            }

            if (empty($nomor_rangka)) {
                echo "<font color='red'>Nomor Rangka field is empty.</font><br/>";
            }

            if (empty($nomor_mesin)) {
                echo "<font color='red'>Nomor Mesin field is empty.</font><br/>";
            }

            if (empty($pemilik)) {
                echo "<font color='red'>Pemilik field is empty.</font><br/>";
            }

            if (empty($alamat_pemilik)) {
                echo "<font color='red'>Alamat Pemilik field is empty.</font><br/>";
            }
        } else {
            // Update the database table
            $result = mysqli_query($mysqli, "UPDATE kendaraan SET `jenis_kendaraan` = '$jenis_kendaraan', `merk_type` = '$merk_type', `warna_kendaraan` = '$warna_kendaraan', `tahun_kendaraan` = '$tahun_kendaraan', `nomor_polisi` = '$nomor_polisi', `nomor_rangka` = '$nomor_rangka', `nomor_mesin` = '$nomor_mesin', `pemilik` = '$pemilik', `alamat_pemilik` = '$alamat_pemilik' WHERE `id` = $id");

            // Check if the update was successful
            if ($result) {
                echo "<p><font color='green'>Data updated successfully!</p>";
                echo "<a href='datakendaraan.php'>View Result</a>";
            } else {
                echo "<p><font color='red'>Error updating data.</font></p>";
            }
        }
    }
}
