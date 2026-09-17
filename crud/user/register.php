<?php
include '../koneksi/database.php';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($cek) > 0) {
        $error = "Username sudah digunakan!";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($koneksi, $query)) {
            header("Location: login.php?pesan=registrasi_berhasil");
            exit;
        } else {
            $error = "Gagal mendaftarkan akun!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register - Latihan Crud</title>
    <?php include_once('layout/header.php'); ?>
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow" style="width: 400px;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4">Register Akun</h3>

            <?php if (isset($error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- Menggunakan class btn-success agar warnanya hijau seperti tombol Tambah Data -->
                <button type="submit" name="register" class="btn btn-success w-100 mb-3">Register</button>
            </form>

            <div class="text-center">
                <small class="text-muted">Sudah punya akun? <a href="login.php" class="text-decoration-none">Login di sini</a></small>
            </div>
        </div>
    </div>

  <?php include_once('layout/script.php'); ?>
</body>

</html>