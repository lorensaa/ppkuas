<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO tb_user (name, email, alamat, no_hp) VALUES ('$name', '$email', '$alamat', '$no_hp')";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal menambah data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add User</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container mt-5">
        
        <form action="" method="POST">
            <h2>Add User</h2>
            <div class="mb-3">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat:</label>
                <input type="alamat" name="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="no_hp">No. HP:</label>
                <input type="number" name="no_hp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-25">Add <i class="bi bi-plus-lg"></i> </button>
            <a href="index.php" class="btn btn-danger w-25"><i class="bi bi-arrow-left-circle"></i> Back</a>
        </form>
    </div>
    
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
