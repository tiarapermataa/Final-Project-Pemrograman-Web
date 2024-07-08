<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan | Web Pendataan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon' />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
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

        .button-container a button,
        form button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin: 10px 0;
        }

        .button-container a button:hover,
        form button[type="submit"]:hover {
            background-color: #0056b3;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            vertical-align: top;
        }

        table input[type="text"],
        table input[type="number"],
        table textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        table textarea {
            resize: vertical;
        }
    </style>
</head>

<body>
    <div class="judul">
        <h2>Web Pendataan Kehilangan Kendaraan Bermotor Roda 2</h2>
        <h3>Polrestabes Semarang</h3>
    </div>

    <div class="button-container">
        <a href="addkendaraan.php">
            <button>&lt; Lihat Semua Data</button>
        </a>
    </div>

    <form action="addaction" method="post">
        <h3>Input Kendaraan Baru</h3>
        <table>
            <tr>
                <td>Jenis Kendaraan</td>
                <td><input type="text" name="jenis" required></td>
            </tr>
            <tr>
                <td>Merk / Type</td>
                <td><input type="text" name="merk" required></td>
            </tr>
            <tr>
                <td>Warna Kendaraan</td>
                <td><input type="text" name="warna" required></td>
            </tr>
            <tr>
                <td>Tahun Pembuatan</td>
                <td><input type="number" name="tahun" required></td>
            </tr>
            <tr>
                <td>Bahan Bakar</td>
                <td><input type="text" name="bbm" required></td>
            </tr>
            <tr>
                <td>Nomor Polisi</td>
                <td><input type="text" name="nopol" required></td>
            </tr>
            <tr>
                <td>Nomor Rangka</td>
                <td><input type="text" name="norangka" required></td>
            </tr>
            <tr>
                <td>Nomor Mesin</td>
                <td><input type="text" name="nomesin" required></td>
            </tr>
            <tr>
                <td>Pemilik</td>
                <td><input type="text" name="pemilik" required></td>
            </tr>
            <tr>
                <td>Alamat Pemilik</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>