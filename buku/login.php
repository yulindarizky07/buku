<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
    <div class = "container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <?php
          if (isset($_GET['pesan'])){
            ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Login Gagal!</strong> <?php echo $_GET ['pesan'] ; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            <?php } ?>
        <div class="card">
  <div class="card-header text-center">
    Halaman Login
  </div>
  <form action="ceklogin.php" method="post">
  <div class="card-body">
  <label for="username" class="form-label">Username</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></span>
  <input type="text" class="form-control" id="username" name="username" required placeholder= "Masukan Username" aria-describedby="basic-addon3">
</div>
<label for="password" class="form-label">Password</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg></span>
  <input type="password" class="form-control" id="password" name="password" required placeholder= "Masukan Password" aria-describedby="basic-addon3">
</div>
<div class = "row mb-3">
  <button type="submit" class = "btn btn-primary" name="btn-login">Login</button>

</div>
  <div class="text-center">
    Belum punya akun, silahkan <a href="daftar.php">Daftar</a>
  </div>
  </div>
  </form>
</div>
      </div>
    

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    -->
  </body>
</html>