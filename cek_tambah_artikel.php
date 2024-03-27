<?php
include 'koneksi_db.php';

$idpost = $_POST['idpost'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
$username = $_POST['username'];

if($_POST){
    try {
       $sql = "INSERT INTO post (idpost,title,content,date,username) VALUES ('".$_POST['idpost']."','".$_POST['title']."','".$_POST['content']."','".$_POST['date']."','".$_POST['username']."')";
       if(!$koneksi->query($sql)){
          echo $koneksi->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='home_admin.php';
         </script>";
}
?>