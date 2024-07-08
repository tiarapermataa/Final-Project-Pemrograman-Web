<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM admin WHERE id = $id";
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
    <title>Update Admin Data</title>
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
            padding: 0 20%;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
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
        <h2>Update Admin Data</h2>
        <div class="back-link">
            <a href="dataadmin.php">Back to Data Admin</a>
        </div>

        <form action="editaction.php" method="post" name="updateAdmin">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
            <input type="hidden" name="table" value="admin">

            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>


            <label for="position">Position</label>
            <input type="text" name="position" id="position" value="<?php echo $row['position']; ?>" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>

            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>

</html>