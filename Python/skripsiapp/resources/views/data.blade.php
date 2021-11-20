<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- My Css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />

    <title>Sistem Prediksi Penyakit Jantung</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sistem Prediksi Penyakit Jantung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav margin ms-auto">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="information">Information</a>
                    <a class="nav-link active" href="data">Data</a>
                    <a class="nav-link" href="preprocessing">Preprocessing</a>
                    <a class="nav-link" href="training">Training</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <img src="images/gambar_data.png" alt="gambar jantung" width="250">
            <h1 class="display-4">Data Yang Digunakan</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,128C560,117,640,75,720,101.3C800,128,880,224,960,224C1040,224,1120,128,1200,106.7C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <section id="isi_informasi" class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-4 text-center">
                <h3>Dataset yang digunakan</h3>
            </div>
        </div>
        <div class="row justify-content-center tabel_data">
            <div class="col-11">
                <table class="table table-striped" id="tabel_isi_data">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">CP</th>
                            <th scope="col">Trestbps</th>
                            <th scope="col">Chol</th>
                            <th scope="col">Fbs</th>
                            <th scope="col">Restecg</th>
                            <th scope="col">Thalach</th>
                            <th scope="col">Exang</th>
                            <th scope="col">Oldpeak</th>
                            <th scope="col">Slope</th>
                            <th scope="col">Ca</th>
                            <th scope="col">Thal</th>
                            <th scope="col">Target</th>
                        </tr>
                    </thead>
                    <tbody id="isi_data">
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Hasil Prediksi -->
    <section id="hasil_prediksi">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9fc55a" fill-opacity="1" d="M0,64L26.7,74.7C53.3,85,107,107,160,101.3C213.3,96,267,64,320,48C373.3,32,427,32,480,42.7C533.3,53,587,75,640,117.3C693.3,160,747,224,800,229.3C853.3,235,907,181,960,181.3C1013.3,181,1067,235,1120,224C1173.3,213,1227,139,1280,101.3C1333.3,64,1387,64,1413,64L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Hasil Prediksi -->

    <!-- Footer -->
    <footer>

        <h5 class="text-center">Reo Sahobby</h5>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#tabel_isi_data").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "scrollX": true,
                "ajax": "http://localhost:8005/heart/all",
                "columns": [{
                        "data": "age"
                    },
                    {
                        "data": "sex"
                    },
                    {
                        "data": "cp"
                    },
                    {
                        "data": "trestbps"
                    },
                    {
                        "data": "chol"
                    },
                    {
                        "data": "fbs"
                    },
                    {
                        "data": "restecg"
                    },
                    {
                        "data": "thalach"
                    },
                    {
                        "data": "exang"
                    },
                    {
                        "data": "oldpeak"
                    },
                    {
                        "data": "slope"
                    },
                    {
                        "data": "ca"
                    },
                    {
                        "data": "thal"
                    },
                    {
                        "data": "target"
                    }
                ]
            });
        });
    </script>
</body>

</html>