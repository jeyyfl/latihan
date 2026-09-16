<!doctype html>
<html lang="en">

<?php include_once('layout/header.php'); ?>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA SISWA
          </div>
          <div class="card-body">
 
            <!-- === MULAI KODE ALERT === -->
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "tambah") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data berhasil dibuat!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
              } else if ($_GET['pesan'] == "edit") {
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            Data berhasil di edit!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
              } else if ($_GET['pesan'] == "hapus") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data berhasil dihapus!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
              }
            }
            ?>
            <!-- === AKHIR KODE ALERT === -->

            <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NAMA LENGKAP</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">TANGGAL LAHIR</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('../koneksi/database.php');
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM user");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['tanggal_lahir'] ?></td>
                    <td class="text-center">
                      <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
                  </tr>

                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('layout/script.php'); ?>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>