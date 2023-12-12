<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id_user = $_GET['id'];

    $query = "DELETE FROM tb_user WHERE id_user=$id_user";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
}
?>
