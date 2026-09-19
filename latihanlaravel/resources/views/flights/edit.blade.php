<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">     
    <title>Edit Data Penerbangan</title>
</head>
<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            EDIT DATA PENERBANGAN
          </div>
          <div class="card-body">
            
            <!-- Arahkan form ke route PUT /flights/id -->
            <form action="/flights/{{ $flight->id }}" method="POST">
                
              @csrf
              @method('PUT') <!-- Wajib ditambahkan untuk proses UPDATE di Laravel -->

              <div class="form-group">
                <label>Nomor Penerbangan</label>
                <!-- Menampilkan data lama menggunakan attribute value -->
                <input type="text" name="flight_number" class="form-control" value="{{ $flight->flight_number }}" required>
              </div>

              <div class="form-group">
                <label>Tujuan</label>
                <input type="text" name="destination" class="form-control" value="{{ $flight->destination }}" required>
              </div>

              <button type="submit" class="btn btn-primary">UPDATE DATA</button>
              <a href="/flights" class="btn btn-warning">BATAL</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>