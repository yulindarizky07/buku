<!doctype html>
<?php
include "konek.php";
$id="";
$judul="";
$pengarang="";
$penerbit="";
$kategori="";
// $gambar="";

if(isset($_GET['edit'])){
  $id=$_GET['edit'];
  $query="SELECT * FROM tb_buku WHERE id='$id'";
  $sql=mysqli_query($konek, $query);
  $data=mysqli_fetch_array($sql);
  $judul=$data['judul'];
  $pengarang=$data['pengarang'];
  $penerbit=$data['penerbit'];
  $kategori=$data['kategori'];
  $gambar=$data['gambar'];
}

?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>olah</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Buku</a>
          
        </div>
      </nav>

      <figure class="text-center mt-5">
        <blockquote class="blockquote">
          <p>Data Buku yang Tersedia</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Kelola Data Buku</cite>
        </figcaption>
      </figure>
      <form action="proses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul ;?>" placeholder="Masukkan judul buku">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $pengarang ;?>" placeholder="Masukkan nama pengarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $penerbit ;?>" placeholder="Masukkan nama penerbit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select name="kategori" id="kategori" class="form-control">
                    <option value="Umum" <?php if($kategori=="Umum") echo "selected";?>>Umum</option>
                    <option value="Komputer" <?php if($kategori=="Komputer") echo "selected";?>>Komputer</option>
                </select>
            </div>
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
        </div>
        <div class="mb-3 row">
            <?php
            if(isset($_GET['edit'])){
                echo "<button type='submit' class='btn btn-primary' name='btnproses' value='edit'>Simpan Perubahan</button>";
            }else{
                echo "<button type='submit' class='btn btn-primary' name='btnproses' value='tambah'>Tambah</button>";

            }
            ?>
        </div>
        </form>
    </div>

    
  </body>
</html>