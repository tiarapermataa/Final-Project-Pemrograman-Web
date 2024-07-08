<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kendaraan WHERE id = $id";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // Mengambil data kendaraan
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan";
        exit;
    }
} else {
    echo "ID tidak disediakan";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .back-link {
            text-align: center;
            margin-bottom: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #007BFF;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Data Kendaraan</h2>
        <div class="back-link">
            <a href="datakendaraan.php">Kembali ke Data Kendaraan</a>
        </div>
        <form action="editaction.php" method="post" name="updateKendaraan">
            <!-- Input tersembunyi untuk menyimpan informasi tabel -->
            <input type="hidden" name="table" value="kendaraan">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" value="<?php echo $row['jenis_kendaraan']; ?>" required>

            <label for="merk_type">Merk/Type</label>
            <input type="text" id="merk_type" name="merk_type" value="<?php echo $row['merk_type']; ?>" required>

            <label for="warna_kendaraan">Warna Kendaraan</label>
            <input type="text" id="warna_kendaraan" name="warna_kendaraan" value="<?php echo $row['warna_kendaraan']; ?>" required>

            <label for="tahun_kendaraan">Tahun Kendaraan</label>
            <input type="number" id="tahun_kendaraan" name="tahun_kendaraan" value="<?php echo $row['tahun_kendaraan']; ?>" required>

            <label for="nomor_polisi">Nomor Polisi</label>
            <input type="text" id="nomor_polisi" name="nomor_polisi" value="<?php echo $row['nomor_polisi']; ?>" required>

            <label for="nomor_rangka">Nomor Rangka</label>
            <input type="text" id="nomor_rangka" name="nomor_rangka" value="<?php echo $row['nomor_rangka']; ?>" required>

            <label for="nomor_mesin">Nomor Mesin</label>
            <input type="text" id="nomor_mesin" name="nomor_mesin" value="<?php echo $row['nomor_mesin']; ?>" required>

            <label for="pemilik">Pemilik</label>
            <input type="text" id="pemilik" name="pemilik" value="<?php echo $row['pemilik']; ?>" required>

            <label for="alamat_pemilik">Alamat Pemilik</label>
            <input type="text" id="alamat_pemilik" name="alamat_pemilik" value="<?php echo $row['alamat_pemilik']; ?>" required>

            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>

</html>