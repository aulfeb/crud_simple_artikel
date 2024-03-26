<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Admin</title>
</head>

<body>

    <header>
        <div class="container">
            <h6 class="display-6 text-black text-center">Halaman Admin - Artikel</h6>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="float-md-end">
                        <button type="button" class="btn btn-success">Tambah Artikel</button>
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
                    </tr>
                </thead>
            </table>
        </div>
    </section>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</html>