<!doctype html>
<html lang="en">
<head>
    <!-- Pastikan Anda memuat CSS Bootstrap dan DataTables -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Penerbangan</title>
</head>
<body>

  <nav class="navbar bg-body-tertiary shadow-sm mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Latihan CRUD Laravel</span>
      <!-- Fitur logout nanti kita buat terpisah -->
      <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin keluar dari aplikasi?');">Logout</a>
    </div>
  </nav>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA PENERBANGAN
          </div>
          <div class="card-body">

            <!-- Menampilkan Pesan Sukses -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <a href="/flights/create" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NOMOR PENERBANGAN</th>
                  <th scope="col">TUJUAN</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <!-- Melakukan Looping data $flights dari Controller -->
                @foreach ($flights as $index => $flight)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td class="text-center">
                      <!-- Tombol Edit -->
                      <a href="/flights/{{ $flight->id }}/edit" class="btn btn-sm btn-primary">EDIT</a>
                      
                      <!-- Tombol Hapus (Harus pakai Form di Laravel) -->
                      <form action="/flights/{{ $flight->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>
</html>