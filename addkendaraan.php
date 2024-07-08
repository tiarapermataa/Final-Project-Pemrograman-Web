<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan | Web Pendataan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon' />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .nav {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }

        .nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-start;
        }

        .nav ul li {
            margin-right: 20px;
        }

        .nav ul li a {
            color: white;
            text-decoration: none;
        }

        .judul {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .judul h2 {
            margin: 0;
            font-size: 2em;
        }

        .judul h3 {
            margin: 5px 0;
            font-size: 1.2em;
            color: #555;
        }

        .button-container {
            text-align: center;
            margin: 20px 0;
        }

        .button-container a button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin: 10px 0;
        }

        .button-container a button:hover {
            background-color: #0056b3;
        }

        .table-container {
            overflow: auto;
            max-width: 100%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#judul">Kehilangan Motor</a></li>
        </ul>
    </nav>

    <div id="judul" class="judul">
        <h2>Web Pendataan Kehilangan Kendaraan Bermotor</h2>
        <h3>Polrestabes Semarang</h3>
    </div>

    <br />
    <div class="button-container">
        <a href="addaction.php">
            <button>+ Tambah Data Baru</button>
        </a>
    </div>

    <h3>Data Kendaraan</h3>
    <div class="table-container">
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Jenis Kendaraan</th>
                <th>Merk/Type</th>
                <th>Warna Kendaran</th>
                <th>Tahun Kendaraan</th>
                <th>Nomor Polisi</th>
                <th>Nomor Rangka</th>
                <th>Nomor Mesin</th>
                <th>Pemilik</th>
                <th>Alamat Pemilik</th>
                <th>Status</th>
            </tr>
            <?php
            include "koneksi.php";
            if (!$mysqli) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $query = mysqli_query($mysqli, "SELECT * FROM kendaraan") or die(mysqli_error($mysqli));
            $nomor = 1;
            while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?>.</td>
                    <td><?php echo $data['jenis_kendaraan']; ?></td>
                    <td><?php echo $data['merk_type']; ?></td>
                    <td><?php echo $data['warna_kendaraan']; ?></td>
                    <td><?php echo $data['tahun_kendaraan']; ?></td>
                    <td><?php echo $data['nomor_polisi']; ?></td>
                    <td><?php echo $data['nomor_rangka']; ?></td>
                    <td><?php echo $data['nomor_mesin']; ?></td>
                    <td><?php echo $data['pemilik']; ?></td>
                    <td><?php echo $data['alamat_pemilik']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
</body>

</html>