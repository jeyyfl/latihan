<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Login Aplikasi</title>
</head>
<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header text-center">
            <strong>LOGIN APLIKASI</strong>
          </div>
          <div class="card-body">
            
            <!-- Menampilkan pesan sukses setelah register/logout -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Menampilkan pesan error jika password salah -->
            @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form action="/login" method="POST">
              @csrf
              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
            </form>

            <div class="text-center mt-3">
              Belum punya akun? <a href="/register">Daftar di sini</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>