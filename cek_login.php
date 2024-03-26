<?php
session_start();

include 'koneksi_db.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi, "select * from account where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:home_admin.php");

        // cek jika user login sebagai author
    } else if ($data['role'] == "author") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "author";
        // alihkan ke halaman dashboard author
        header("location:home_author.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
