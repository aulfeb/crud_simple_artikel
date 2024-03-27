<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="wrapper">
        <form class="form-signin" action="cek_tambah_artikel.php" method="post">
            <h2 class="form-signin-heading">Tambah Artikel</h2>
            <input type="text" class="form-control" name="idpost" placeholder="Masukkan ID Post" required="" autofocus="" />
            <br>
            <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Post" required="" />
            <br>
            <input type="text" class="form-control" name="content" placeholder="Masukkan Content Post" required="" />
            <br>
            <input type="date" class="form-control" name="date" placeholder="Masukkan Tanggal Post" required="" />
            <br>
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required="" />
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>