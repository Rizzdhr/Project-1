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
          <a class="nav-link active" aria-current="page" href="../kategori/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- create_blog.php -->
<br>
<div class="container mt-4">
    <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Tambah Blog
        </div>
    <div class="card-body">
      <form method="post"action="">
        <div class="form-group">
          <label>Judul :</label>
          <input type="text" names="tnim" class="" placeholder="">  
          <br><br>
          <label>Kategori :</label>
          <input type="text" names="tkat" class="" placeholder="">  
          <br><br>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <br><br>
          <input class="btn btn-primary bg-dark" type="submit" value="Simpan">    
        </div>
      </form>
    </div>
  </div>

        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>