<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Admin</title>
</head>

<body>
    <?php
    // Panggil file koneksi_db.php
    include "koneksi_db.php";

    $query = "SELECT * FROM post";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);
    ?>
    <header>
        <div class="container">
            <h6 class="display-6 text-black text-center">Halaman Admin - Artikel</h6>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Daftar Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar AKun</a>
                </li>
            </ul>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="d-flex justify-content-end">
                        <a href="tambah_artikel.php">
                            <button type="button" class="btn btn-success">Tambah Artikel</button>
                        </a>
                        <a href="logout.php">
                            <button type="button" class="btn btn-danger mx-4">Keluar</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Tabel untuk menampilkan data artikel -->
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Kontent</th>
                        <th scope="col">Tanggal Dipost</th>
                        <th scope="col">Nama Penulis</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; // Inisialisasi nomor urut
                    while ($row = mysqli_fetch_array($result)) {
                        // Menampilkan data dalam baris tabel
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['content'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>
                                        <button type='button' class='btn btn-primary'>Edit</button>
                                        <button type='button' class='btn btn-danger'>Hapus</button>
                                      </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</html>
