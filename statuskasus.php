<?php
include 'koneksi.php';

// Mengambil data kasus kehilangan dari database
$sql = "SELECT k.id, k.nomor_polisi, k.deskripsi_kasus, k.status, k.tanggal_laporan, v.jenis_kendaraan, v.merk_type 
        FROM statuskasus k
        JOIN kendaraan v ON k.nomor_polisi = v.nomor_polisi";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kasus Kehilangan Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
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
            background-color: #f2f2f2;
        }

        .status-aktif {
            color: red;
        }

        .status-selesai {
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Status Kasus Kehilangan Motor</h2>
        <table>
            <tr>
                <th>ID Kasus</th>
                <th>Nomor Polisi</th>
                <th>Jenis Kendaraan</th>
                <th>Merk/Type</th>
                <th>Deskripsi Kasus</th>
                <th>Status</th>
                <th>Tanggal Laporan</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $statusClass = $row['status'] == 'aktif' ? 'status-aktif' : 'status-selesai';
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nomor_polisi'] . "</td>";
                    echo "<td>" . $row['jenis_kendaraan'] . "</td>";
                    echo "<td>" . $row['merk_type'] . "</td>";
                    echo "<td>" . $row['deskripsi_kasus'] . "</td>";
                    echo "<td class='$statusClass'>" . $row['status'] . "</td>";
                    echo "<td>" . $row['tanggal_laporan'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada kasus kehilangan motor</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>

<?php
$mysqli->close();
?>