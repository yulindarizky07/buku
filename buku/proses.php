<?php
include "konek.php";
if(isset($_POST['btnproses'])){
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $kategori=$_POST['kategori'];
    
    if($_POST['btnproses']=="tambah"){
        $gambar=$_FILES['gambar']['name'];
        $dir="gambar/";
        $dirfile=$_FILES['gambar']['tmp_name'];
        move_uploaded_file($dirfile, $dir . $gambar);

        $query="INSERT INTO tb_buku VALUES ('','$judul','$pengarang','$penerbit','$kategori','$gambar')";
        $sql=mysqli_query($konek,$query);
        if($sql){
            header('location:index.php');
        }
    }
    else{
        if($_FILES['gambar']['name']!=""){
            $queryhapus="SELECT gambar FROM tb_buku WHERE id='$_POST[id]'";
            $sqlhapus=mysqli_query($konek,$queryhapus);
            $data=mysqli_fetch_array($sqlhapus);

            unlink("gambar/" . $data['gambar']);

            $gambar=$_FILES['gambar']['name'];
            $dir="gambar/";
            $dirfile=$_FILES['gambar']['tmp_name'];
            move_uploaded_file($dirfile, $dir . $gambar);

            $query="UPDATE tb_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kategori='$kategori', gambar='$gambar' WHERE id='$_POST[id]'";
            
            }else{
                $query="UPDATE tb_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kategori='$kategori' WHERE id='$_POST[id]'";
            }
            $sql=mysqli_query($konek,$query);
            if($sql){
                header('location:index.php');
        }

    }
}elseif($_GET['hapus']){
    $queryhapus="SELECT gambar FROM tb_buku WHERE id='$_GET[hapus]'";
    $sqlhapus=mysqli_query($konek,$queryhapus);
    $data=mysqli_fetch_array($sqlhapus);

    unlink("gambar/" . $data['gambar']);

    $query="DELETE FROM tb_buku WHERE id='$_GET[hapus]'";
    $sql=mysqli_query($konek,$query);
        if($sql){
            header('location:index.php');
        }
}

?>