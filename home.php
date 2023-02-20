<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog/blog.php">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- content home -->
<div class="container">
<br>
<a class="btn btn-primary bg-dark" href="create_kategori.php" role="button">Tambah</a>

<div class="table-responsive">
  <table class="table align-middle">
    <th>
      <tr>
        <th>No.</th>
        <th>Nama Kategori</th>
        <th>Action</th>
    </th>
    <tbody>
      <tr>
        <td>1.</td>
        <td>HTML</td>
        <td>
        <button type="button" class="btn btn-success btn-sm">Ubah</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        </td>
      </tr>
      <tr>
        <td>2.</td>
        <td>CSS</td>
        <td>
        <button type="button" class="btn btn-success btn-sm">Ubah</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>PHP</td>
        <td>
        <button type="button" class="btn btn-success btn-sm">Ubah</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>MySQL</td>
        <td>
        <button type="button" class="btn btn-success btn-sm">Ubah</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>