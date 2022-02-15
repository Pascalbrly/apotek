<!doctype html>
<?php include'koneksi.php'; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang Admin</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
          </h5>

        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="member.html"><i class="fas fa-user mr-2"></i> Daftar Member</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="obat.html"><i class="fas fa-capsules mr-2"></i> Daftar Obat</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pegawai.html"><i class="fas fa-user-tie mr-2"></i> Daftar Pegawai</a><hr class="bg-secondary">
        </li>
      </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-capsules mr-2"></i></i>Daftar Obat</h3><hr>

        <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Tambah Data Obat</a>
        <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Obat</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th colspan="3" scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>ob01</td>
            <td>promag</td>
            <td>2</td>
            <td>3000</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="far fa-edit bg-success p-2 text-black rounded"></i></td>
            <td><i class="far fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>ob02</td>
            <td>betadine</td>
            <td>1</td>
            <td>5000</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="far fa-edit bg-success p-2 text-white rounded"></i></td>
            <td><i class="far fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
          </tr>
           <tr>
            <th scope="row">1</th>
            <td>ob01</td>
            <td>promag</td>
            <td>2</td>
            <td>3000</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="far fa-edit bg-success p-2 text-white rounded"></i></td>
            <td><i class="far fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>

  </body>
</html>