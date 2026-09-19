<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Penerbangan</title>
</head>
<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            TAMBAH DATA PENERBANGAN
          </div>
          <div class="card-body">
            
            <!-- Arahkan form ke route POST /flights -->
            <form action="/flights" method="POST">
                
              <!-- Wajib ada @csrf di Laravel untuk keamanan setiap form -->
              @csrf

              <div class="form-group">
                <label>Nomor Penerbangan</label>
                <input type="text" name="flight_number" class="form-control" placeholder="Masukkan Nomor Penerbangan (Misal: GA-101)" required>
              </div>

              <div class="form-group">
                <label>Tujuan</label>
                <input type="text" name="destination" class="form-control" placeholder="Masukkan Kota Tujuan (Misal: Jakarta)" required>
              </div>

              <button type="submit" class="btn btn-success">SIMPAN</button>
              <a href="/flights" class="btn btn-warning">BATAL</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>