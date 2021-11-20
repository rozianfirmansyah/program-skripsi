<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- My Css -->
    <link rel="stylesheet" href="style.css" />

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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="information">Information</a>
                    <a class="nav-link" href="data">Data</a>
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
            <img src="images/gambar_jantung.png" alt="gambar jantung" width="200">
            <h1 class="display-4">Prediksi Dini Penyakit Jantung</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,64L26.7,69.3C53.3,75,107,85,160,85.3C213.3,85,267,75,320,101.3C373.3,128,427,192,480,202.7C533.3,213,587,171,640,144C693.3,117,747,107,800,128C853.3,149,907,203,960,197.3C1013.3,192,1067,128,1120,101.3C1173.3,75,1227,85,1280,90.7C1333.3,96,1387,96,1413,96L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Form Input Data -->
    <Section id="form_input_data">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>Form Input Data User</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="" method="" id="form_inputan">
                        @csrf
                        <!-- Umur -->
                        <div class="mb-3">
                            <label for="input_umur" class="form-label fs-5">Umur</label>
                            <input id="input_umur" type="text" class="form-control" id="input_umur" name="input_umur">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group mb-3">
                            <label for="input_jenis_kelamin" class="form-label fs-5">Jenis Kelamin</label>
                            <select class="form-select" name="input_jenis_kelamin" id="input_jenis_kelamin">
                                <option value=""></option>
                                <option value="1">1: Pria</option>
                                <option value="0">0: Wanita</option>
                            </select>
                        </div>

                        <!-- CP -->
                        <div class="form-group mb-3">
                            <label for="input_cp" class="form-label fs-5">CP</label>
                            <select class="form-select" name="input_cp" id="input_cp">
                                <option value=""></option>
                                <option value="1">1: typical angina</option>
                                <option value="2">2: atypical agina</option>
                                <option value="3">3: non-angina pain</option>
                                <option value="4">4: asympotomatic</option>
                            </select>
                        </div>

                        <!-- Trestbps -->
                        <div class="mb-3">
                            <label for="input_trstbps" class="form-label fs-5">Trestbps</label>
                            <input type="text" class="form-control" id="input_trestbps" id="input_trestbps" name="input_trstbps">
                        </div>

                        <!-- Chol -->
                        <div class="mb-3">
                            <label for="input_chol" class="form-label fs-5">Chol</label>
                            <input type="text" class="form-control" id="input_chol" name="input_chol" id="input_chol">
                        </div>

                        <!-- FBS -->
                        <div class="form-group mb-3">
                            <label for="input_fbs" class="form-label fs-5">FBS</label>
                            <select class="form-select" name="input_fbs" id="input_fbs">
                                <option value=""></option>
                                <option value="0">0: False</option>
                                <option value="1">1: True</option>
                            </select>
                        </div>

                        <!-- Restecg -->
                        <div class="form-group mb-3">
                            <label for="input_restecg" class="form-label fs-5">Restecg</label>
                            <select class="form-select" name="input_restecg" id="input_restecg">
                                <option value=""></option>
                                <option value="0">0: Normal</option>
                                <option value="1">1: Abnormal</option>
                                <option value="2">2: Hipertrofil Ventrikel</option>
                            </select>
                        </div>

                        <!-- Thalach -->
                        <div class="mb-3">
                            <label for="input_thalac" class="form-label fs-5">Thalac</label>
                            <input type="text" class="form-control" id="input_thalach" name="input_thalach" id="input_thalach">
                        </div>

                        <!-- Exang -->
                        <div class="mb-3">
                            <label for="input_exang" class="form-label fs-5">Exang</label>
                            <select class="form-select" id="input_exang" name="input_exang">
                                <option value=""></option>
                                <option value="0">0: No</option>
                                <option value="1">1: Yes</option>
                            </select>
                        </div>

                        <!-- Oldpeak -->
                        <div class="mb-3">
                            <label for="input_oldpeak" class="form-label fs-5">Oldpeak</label>
                            <input type="text" class="form-control" id="input_oldpeak" name="input_oldpeak">
                        </div>

                        <!-- Slope -->
                        <div class="mb-3">
                            <label for="input_slope" class="form-label fs-5">Slope</label>
                            <select class="form-select" name="input_slope" id="input_slope">
                                <option value=""></option>
                                <option value="0">0: Upsloping</option>
                                <option value="1">1: Flat</option>
                                <option value="2">2: Downsloping</option>
                            </select>
                        </div>

                        <!-- CA -->
                        <div class="mb-3">
                            <label for="input_ca" class="form-label fs-5">CA</label>
                            <select class="form-select" name="input_ca" id="input_ca">
                                <option value=""></option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <!-- Thal -->
                        <div class="mb-3">
                            <label for="input_thal" class="form-label fs-5">Thal</label>
                            <select class="form-select" name="input_thal" id="input_thal">
                                <option value=""></option>
                                <option value="1">1: Normal</option>
                                <option value="2">2: Cacat Tetap</option>
                                <option value="3">3: Cacat Reversible</option>
                            </select>
                        </div>

                        <!-- Button -->
                        <div class="text-center">
                            <button type="submit" id="tombol_proses" class="btn btn-center" style="color:aliceblue" name="tombol_proses">Lihat Prediksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </Section>
    <!-- Akhir Form Input Data -->

    <!-- Hasil Prediksi -->
    <section id="hasil_prediksi">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4>Hasil Prediksi adalah</h4>
                    <h3 id="tempat_hasil_prediksi"></h3>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9fc55a" fill-opacity="1" d="M0,128L16,128C32,128,64,128,96,112C128,96,160,64,192,58.7C224,53,256,75,288,96C320,117,352,139,384,133.3C416,128,448,96,480,80C512,64,544,64,576,64C608,64,640,64,672,101.3C704,139,736,213,768,208C800,203,832,117,864,90.7C896,64,928,96,960,138.7C992,181,1024,235,1056,213.3C1088,192,1120,96,1152,90.7C1184,85,1216,171,1248,176C1280,181,1312,107,1344,90.7C1376,75,1408,117,1424,138.7L1440,160L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Hasil Prediksi -->

    <!-- Footer -->
    <footer>
        <h5 class="text-center" style="color:black">Reo Sahobby</h5>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="jquery-3.6.0.js"></script>

    <script>
        $(document).ready(function() {
            $("#form_inputan").submit(function(ev) {
                ev.preventDefault();
                name = $(this).val();
                from = $(this);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    data: { //form.serialize(),
                        age: $('#input_umur').val(),
                        sex: $('#input_jenis_kelamin option:selected').val(),
                        cp: $('#input_cp option:selected').val(),
                        trestbps: $('#input_trestbps').val(),
                        chol: $('#input_chol').val(),
                        fbs: $('#input_fbs option:selected').val(),
                        restecg: $('#input_restecg option:selected').val(),
                        thalach: $('#input_thalach').val(),
                        exang: $('#input_exang option:selected').val(),
                        oldpeak: $('#input_oldpeak').val(),
                        slope: $('#input_slope option:selected').val(),
                        ca: $('#input_ca option:selected').val(),
                        thal: $('#input_thal option:selected').val()
                    },
                    url: "http://localhost:8005/predict",
                    success: function(data) {
                        console.log(data);
                        $('#tempat_hasil_prediksi').text(data.prediksi)
                    }
                });
            });
        });
    </script>
</body>

</html>