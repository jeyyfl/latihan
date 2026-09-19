<!-- Isi dari resources/views/layout/header.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Aplikasi CRUD Laravel</title>
</head>
<body>

  <!-- Bagian Navbar (Menu Atas) -->
  <nav class="navbar bg-body-tertiary shadow-sm mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Aplikasi Penerbangan</span>
      <a href="/logout" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin keluar?');">Logout</a>
    </div>
  </nav>