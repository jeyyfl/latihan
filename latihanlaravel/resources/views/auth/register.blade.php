<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Register Akun</title>
</head>
<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header text-center">
            <strong>REGISTER AKUN BARU</strong>
          </div>
          <div class="card-body">
            
            <form action="/register" method="POST">
              @csrf
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Valid" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Minimal 6 Karakter" required>
              </div>
              <button type="submit" class="btn btn-success btn-block">DAFTAR SEKARANG</button>
            </form>

            <div class="text-center mt-3">
              Sudah punya akun? <a href="/login">Login di sini</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>