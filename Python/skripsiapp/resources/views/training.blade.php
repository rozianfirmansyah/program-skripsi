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
                    <a class="nav-link" href="data">Data</a>
                    <a class="nav-link" href="preprocessing">Preprocessing</a>
                    <a class="nav-link active" href="training">Training</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <img src="images/machine_learning.png" alt="gambar jantung" width="280">
            <h1 class="display-4">Proses Training</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,128C560,117,640,75,720,101.3C800,128,880,224,960,224C1040,224,1120,128,1200,106.7C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Menampilkan contoh data train -->
    <section id="contoh_data_train" class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Contoh Data Training yang digunakan</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped" id="tabel_contoh_training">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">age</th>
                            <th scope="col">trestbps</th>
                            <th scope="col">chol</th>
                            <th scope="col">thalach</th>
                            <th scope="col">oldpeak</th>
                            <th scope="col">sex_0</th>
                            <th scope="col">sex_1</th>
                            <th scope="col">cp_0</th>
                            <th scope="col">cp_1</th>
                            <th scope="col">cp_2</th>
                            <th scope="col">cp_3</th>
                            <th scope="col">fbs_0</th>
                            <th scope="col">fbs_1</th>
                            <th scope="col">restecg_0</th>
                            <th scope="col">restecg_1</th>
                            <th scope="col">exang_0</th>
                            <th scope="col">exang_1</th>
                            <th scope="col">slope_0</th>
                            <th scope="col">slope_1</th>
                            <th scope="col">slope_2</th>
                            <th scope="col">ca_0</th>
                            <th scope="col">ca_1</th>
                            <th scope="col">ca_2</th>
                            <th scope="col">ca_3</th>
                            <th scope="col">ca_4</th>
                            <th scope="col">thal_0</th>
                            <th scope="col">thal_1</th>
                            <th scope="col">thal_2</th>
                            <th scope="col">thal_3</th>
                            <th scope="col">target</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir menampilkan data train -->

    <!-- Menampikan Data train dengan residual -->
    <section id="residual" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Menampilkan Residual</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped" id="tabel_residual">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">age</th>
                            <th scope="col">trestbps</th>
                            <th scope="col">chol</th>
                            <th scope="col">thalach</th>
                            <th scope="col">oldpeak</th>
                            <th scope="col">sex_0</th>
                            <th scope="col">sex_1</th>
                            <th scope="col">cp_0</th>
                            <th scope="col">cp_1</th>
                            <th scope="col">cp_2</th>
                            <th scope="col">cp_3</th>
                            <th scope="col">fbs_0</th>
                            <th scope="col">fbs_1</th>
                            <th scope="col">restecg_0</th>
                            <th scope="col">restecg_1</th>
                            <th scope="col">exang_0</th>
                            <th scope="col">exang_1</th>
                            <th scope="col">slope_0</th>
                            <th scope="col">slope_1</th>
                            <th scope="col">slope_2</th>
                            <th scope="col">ca_0</th>
                            <th scope="col">ca_1</th>
                            <th scope="col">ca_2</th>
                            <th scope="col">ca_3</th>
                            <th scope="col">ca_4</th>
                            <th scope="col">thal_0</th>
                            <th scope="col">thal_1</th>
                            <th scope="col">thal_2</th>
                            <th scope="col">thal_3</th>
                            <th scope="col">target</th>
                            <th scope="col">residual</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhri Menampilkan Data train dengan residual -->

    <!-- Menampilkan HyperParameter Terbaik -->
    <section class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>HyperParameter Terbaik</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">subsample</th>
                            <th scope="col">n_estimators</th>
                            <th scope="col">min_child_weight</th>
                            <th scope="col">max_depth</th>
                            <th scope="col">learning_rate</th>
                            <th scope="col">gamma</th>
                            <th scope="col">colsample_bytree</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>0.86659999</th>
                            <th>44</th>
                            <th>1</th>
                            <th>10</th>
                            <th>0.03510000006</th>
                            <th>3</th>
                            <th>0.98789999998</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan HyperParameter Terbaik -->

    <!-- Menampilkan Gambar Tree -->
    <section class="container" id="gambar_tree">
        <div class="row mt-4">
            <div class="col text-center">
                <h3>Gambar Tree XgBoost</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <img src="images/tree.png" alt="" width="1300">
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan Gambar Tree -->

    <!-- Menampilkan Confussion Matrix -->
    <section class="container " id="tabel_confusion_matrix">
        <div class="row mt-5 justify-content-center">
            <div class="col text-center">
                <h3>Tabel Confusion Matrix</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="images/confusion_matrix_model.png" alt="" width="860">
            </div>
        </div>
    </section>
    <!-- AKhir Menampilkan Confusion Matrix -->

    <!-- Menampilkan Hasil Akurasi -->
    <section class="container" id="hasil_akurasi">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Hasil Akurasi Model Secara Keseluruhan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h5>Akurasi : 90.13%</h5>
                <h5>Presisi : 92.5%</h5>
                <h5>Recall : 84.84%</h5>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan Hasil Akurasi -->

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
            $("#tabel_contoh_training").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "scrollX": true,
                "ajax": "http://localhost:8005/contohdatatrain",
                "columns": [{
                        "data": "age"
                    },
                    {
                        "data": "trestbps"
                    },
                    {
                        "data": "chol"
                    },
                    {
                        "data": "thalach"
                    },
                    {
                        "data": "oldpeak"
                    },
                    {
                        "data": "sex_0"
                    },
                    {
                        "data": "sex_1"
                    },
                    {
                        "data": "cp_0"
                    },
                    {
                        "data": "cp_1"
                    },
                    {
                        "data": "cp_2"
                    },
                    {
                        "data": "cp_3"
                    },
                    {
                        "data": "fbs_0"
                    },
                    {
                        "data": "fbs_1"
                    },
                    {
                        "data": "restecg_0"
                    },
                    {
                        "data": "restecg_1"
                    },
                    {
                        "data": "exang_0"
                    },
                    {
                        "data": "exang_1"
                    },
                    {
                        "data": "slope_0"
                    },
                    {
                        "data": "slope_1"
                    },
                    {
                        "data": "slope_2"
                    },
                    {
                        "data": "ca_0"
                    },
                    {
                        "data": "ca_1"
                    },
                    {
                        "data": "ca_2"
                    },
                    {
                        "data": "ca_3"
                    },
                    {
                        "data": "ca_4"
                    },
                    {
                        "data": "thal_0"
                    },
                    {
                        "data": "thal_1"
                    },
                    {
                        "data": "thal_2"
                    },
                    {
                        "data": "thal_3"
                    },
                    {
                        "data": "label"
                    }
                ]
            });

            $("#tabel_residual").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "scrollX": true,
                "ajax": "http://localhost:8005/residual",
                "columns": [{
                        "data": "age"
                    },
                    {
                        "data": "trestbps"
                    },
                    {
                        "data": "chol"
                    },
                    {
                        "data": "thalach"
                    },
                    {
                        "data": "oldpeak"
                    },
                    {
                        "data": "sex_0"
                    },
                    {
                        "data": "sex_1"
                    },
                    {
                        "data": "cp_0"
                    },
                    {
                        "data": "cp_1"
                    },
                    {
                        "data": "cp_2"
                    },
                    {
                        "data": "cp_3"
                    },
                    {
                        "data": "fbs_0"
                    },
                    {
                        "data": "fbs_1"
                    },
                    {
                        "data": "restecg_0"
                    },
                    {
                        "data": "restecg_1"
                    },
                    {
                        "data": "exang_0"
                    },
                    {
                        "data": "exang_1"
                    },
                    {
                        "data": "slope_0"
                    },
                    {
                        "data": "slope_1"
                    },
                    {
                        "data": "slope_2"
                    },
                    {
                        "data": "ca_0"
                    },
                    {
                        "data": "ca_1"
                    },
                    {
                        "data": "ca_2"
                    },
                    {
                        "data": "ca_3"
                    },
                    {
                        "data": "ca_4"
                    },
                    {
                        "data": "thal_0"
                    },
                    {
                        "data": "thal_1"
                    },
                    {
                        "data": "thal_2"
                    },
                    {
                        "data": "thal_3"
                    },
                    {
                        "data": "label"
                    },
                    {
                        "data": "residual"
                    }
                ]
            });
        });
    </script>
</body>

</html>