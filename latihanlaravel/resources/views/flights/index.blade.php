<!-- Memanggil file header dari folder layout -->
@include('layout.header')

<div class="container" style="margin-top: 40px">
  <div class="row">
    <!-- ... sisa kode di bawahnya tetap sama persis seperti yang kamu tulis ... -->

  <div class="container" style="margin-top: 40px">
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
                <!-- Looping data penerbangan -->
                @foreach ($flights as $index => $flight)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td class="text-center">
                      <a href="/flights/{{ $flight->id }}/edit" class="btn btn-sm btn-primary">EDIT</a>
                      
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

@include('layout.script')
</body>
</html>