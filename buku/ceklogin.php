<?php
if(isset($_POST['btnlogin'])){
    $username=$_POST['username'];
    $password=$_POSTT['password'];

    if ($username=="admin"){
        if($password=="admin"){
            //login valid
            header('location:index.php');
        }else{
            //password salah 
            header('location:login.php?pesan= Password Salah');
        }
    }else{
        //username salah 
        header('location:login.php?pesan= Username Salah');
    }
}
