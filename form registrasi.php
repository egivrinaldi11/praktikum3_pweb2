<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <fieldset> 
            <legend>Form Registrasi IT Club Data Sience</legend>
            <form method="POST" action="proses_registrasi.php">
                <div class="row mb-3">
                    <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="NIM" name="NIM">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nama" name="Nama">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios1" value="Laki-laki" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios2" value="Perempuan">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="Prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="Prodi" name="Prodi">
                            <option value="TI">Teknik Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="BD">Bisnis Digital</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Skills" class="col-sm-2 col-form-label">Skill Web dan Programming</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="HTML" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="CSS" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="JavaScript" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox3">JavaScript</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="RWD Bootstrap" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox4">RWD Bootstrap</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="PHP" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox5">PHP</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Python" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox6">Python</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Java" name="Skills[]">
                            <label class="form-check-label" for="inlineCheckbox7">Java</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Domisili" class="col-sm-2 col-form-label">Tempat Domisili</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="Domisili" name="Domisili">
                            <option value="JKT">Jakarta</option>
                            <option value="DPK">Depok</option>
                            <option value="BGR">Bogor</option>
                            <option value="TGRNG">Tanggerang</option>
                            <option value="BKS">Bekasi</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="Email">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
