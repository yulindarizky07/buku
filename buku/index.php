<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>DATA BUKU</title>
  </head>
  <?php
  include "konek.php";
  ?>
  <body>
    <div class="container">
      <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Buku</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <figure class="text-center mt-5">
        <blockquote class="blockquote">
          <p>Data Buku yang Tersedia</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">CRUD : Create, Read, Update dan Delete</cite>
        </figcaption>
      </figure>
      <a href="olah.php"><button type="button" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg>Tambah</button></a>
      <table class="table table-hover table-bordered align-middle">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query="SELECT * FROM tb_buku";
          $sql=mysqli_query($konek,$query);
          $no=1;
          while($data=mysqli_fetch_array($sql)){
          ?>
          <tr>
            <th scope="row"><?php echo $no ?></th>
            <td><?php echo $data ['judul'];?></td>
            <td><?php echo $data ['pengarang'];?></td>
            <td><?php echo $data ['penerbit'];?></td>
            <td><?php echo $data ['kategori'];?></td>
            <td><img src="gambar/<?php echo $data ['gambar'];?>" alt="foto" style="width: 100px;"></td>
            <td><a href="olah.php?edit=<?php echo $data ['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>  
<a href="proses.php?hapus=<?php echo $data ['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>
          </td>
          </tr>
          <?php
          $no++;
          }
          ?>
          
        </tbody>
      </table>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    
  </body>
</html>