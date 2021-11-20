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
                    <a class="nav-link active" href="preprocessing">Preprocessing</a>
                    <a class="nav-link" href="training">Training</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <img src="images/preprocessing.png" alt="gambar jantung" width="250">
            <h1 class="display-4">Preprocessing Data</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,128C560,117,640,75,720,101.3C800,128,880,224,960,224C1040,224,1120,128,1200,106.7C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Hasil Menghapus Outlier -->
    <section id="isi_informasi" class="container">
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <h3>Data Hasil Menghapus Outlier</h3>
            </div>
        </div>
        <div class="row justify-content-center tabel_data">
            <div class="col-12">
                <table class="table table-striped" id="tabel_isi_data">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
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
    <!-- AKhir Hasil Menghapus Outlier -->

    <!-- Menampilkan X -->
    <section id="data_x" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Data X (Features)</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="tabel_x">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
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
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan X -->

    <!-- Menampilkan X_train -->
    <section id="data_train" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Data X_train</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="tabel_x_train">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
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
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan X_train -->

    <!-- Menampilkan X_train Hasil Scaling -->
    <section id="data_train_scaling" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Data X_train Hasil Scaling</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-striped" id="tabel_x_train_scaling">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Age</th>
                            <th scope="col">Trestbps</th>
                            <th scope="col">Chol</th>
                            <th scope="col">Thalach</th>
                            <th scope="col">Oldpeak</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan X_train Hasil Scaling -->

    <!-- Menampilkan X_train Hasil OneHotEncoding -->
    <section id="data_train_onehot" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Data X_train Hasil OneHotEncoding</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped" id="tabel_x_train_onehot">
                    <thead class="table-dark">
                        <tr>
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
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- AKhir Menampilkan X_train Hasil OneHotEncoding -->

    <!-- Menampilkan Data Hasil Preprocessing -->
    <section id="data_hasil_preprocessing" class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Data X_train Hasil Preprocessing</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped" id="tabel_data_hasil_preprocessing">
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
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Menampilkan Data Hasil Preprocessing -->

    <section id="hasil_prediksi">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9fc55a" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,202.7C640,213,800,203,960,202.7C1120,203,1280,213,1360,218.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </section>

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
                "ajax": "http://localhost:8005/preprocessing/hapusoutlier",
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

            $("#tabel_x").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "ajax": "http://localhost:8005/preprocessing/x",
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
                    }
                ]
            });

            $("#tabel_x_train").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "ajax": "http://localhost:8005/preprocessing/xtrain",
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
                    }
                ]
            });

            $("#tabel_x_train_scaling").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "ajax": "http://localhost:8005/preprocessing/scaling",
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
                    }
                ]
            });

            $("#tabel_x_train_onehot").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "scrollX": true,
                "ajax": "http://localhost:8005/preprocessing/onehot",
                "columns": [{
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
                    }
                ]
            });

            $("#tabel_data_hasil_preprocessing").DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "scrollX": true,
                "ajax": "http://localhost:8005/preprocessing/hasil",
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
                    }
                ]
            });
        });
    </script>
</body>

</html>