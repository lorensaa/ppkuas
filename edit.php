<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id_user = $_GET['id'];

    $query = "SELECT * FROM tb_user WHERE id_user=$id_user";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = $_POST['id_user'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $query = "UPDATE tb_user SET name='$name', email='$email', alamat='$alamat', no_hp='$no_hp' WHERE id_user=$id_user";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal mengedit data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Pengguna</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="" method="POST">
            <div class="mb-3" hidden>
                <label for="id_user">ID User :</label>
                <input type="text" name="id_user" class="form-control" value="<?= $data['id_user']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="name">Nama :</label>
                <input type="text" name="name" class="form-control" value="<?= $data['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat :</label>
                <input type="alamat" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_hp">NO. HP:</label>
                <input type="number" name="no_hp" class="form-control" value="<?= $data['no_hp']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success w-25">Edit <i class="bi bi-pencil-fill"></i></button>
            <a href="index.php" class="btn btn-danger w-25"><i class="bi bi-arrow-left-circle"></i> Back</a>
        </form>
    </div>
    
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
