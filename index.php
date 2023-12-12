<?php
include 'conn.php';

$query = "SELECT * FROM tb_user";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD Lorensa</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>Data User</h2>
        <a href="create.php" class="btn btn-primary mt-3 mb-3">Add User <i class="bi bi-plus-lg"></i> </a>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                while ($row = $result->fetch_assoc()):
                ?>
                    <tr class="text-center">
                        <td><?= $nomor++; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['no_hp']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id_user']; ?>" class="btn btn-success btn-sm">Edit <i class="bi bi-pencil-fill"></i> </a>
                            <a href="delete.php?id=<?= $row['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete <i class="bi bi-trash"></i> </a>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>

        <?php if ($result->num_rows === 0): ?>
                    <h2 class="text-center mt-5">Halaman ini kosong</h2>
                <?php endif; ?>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
