<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Lab Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.signature.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        .kbw-signature {
            width: 150px;
            height: 70px;
        }
    </style>
    <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.signature.js"></script>
</head>

<body>
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir/form6" role="button">
        <i class="bi bi-arrow-left"> Back</i>
    </a>
    <div class="container" style="font-family: Verdana;">
        <form>
            <?= csrf_field(); ?>
            <input type="hidden" id="FORM" name="FORM" value="F6">
            <div class="row mt-5">
                <div class="col" style="text-align: center;">
                    <h4><b>DR. M YUNUS BENGKULU<br></b></h4>
                    <h5>Jl. Bhayangkara, Sidomulyo, Kec. Gading Cemp., Kota Bengkulu 38211<br>
                        Telp.(0736) 52004
                    </h5>
                </div>
                <hr style="border: 1px solid black;">
            </div>
            <div class="row">
                <div class="col" style="text-align: center;">
                    <h5><b>FORMULIR PERMINTAAN LABORATORIUM</b></h5>
                </div>
            </div>
            <div class="row mt-3 mb-1">
                <div class="col-md-2" style="text-align: right;">
                    <label for="NO_REGISTRATION">No RM : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 250px;" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>
                </div>
                <div class="col-md-2" style="text-align: right;">
                    <label for="GENDER">Jenis Kelamin : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="GENDER" id="GENDER" style="width: 200px;" value="<?= $detail['GENDER']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-2" style="text-align: right;">
                    <label for="THENAME">Nama : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="THENAME" id="THENAME" style="width: 300px;" value="<?= $detail['THENAME']; ?>" readonly>
                </div>
                <div class="col-md-2" style="text-align: right;">
                    <label for="DATE_OF_BIRTH">Tanggal Lahir : </label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" style="width: 200px;" min="0" value="<?= $detail['']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2" style="text-align: right;">
                    <label for="THEADDRESS">Alamat : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="THEADDRESS" id="THEADDRESS" style="width: 300px;" value="<?= $detail['THEADDRESS']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <i>Kode Lembar Permintaan : 202311251357360130017 / No. ID Kunjungan : 20230831192</i>
                <hr style="border: 2px solid black;">
            </div>
            <div class="row mb-1">
                <div class="col-md-2" style="text-align: right;">
                    <label for="CARA_BAYAR"><b>Cara Bayar :</b></label>
                </div>
                <div class="col">
                    <input type="text" name="CARA_BAYAR" id="CARA_BAYAR" style="width: 300px;" value="<?= $detail['']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2" style="text-align: right;">
                    <label for="EMPLOYEE_ID"><b>Pengirim :</b></label>
                </div>
                <div class="col">
                    <input type="text" name="EMPLOYEE_ID" id="EMPLOYEE_ID" style="width: 300px;" value="<?= $detail['EMPLOYEE_ID']; ?>" readonly>&nbsp;
                    <input type="text" name="CLINIC_ID" id="CLINIC_ID" style="width: 200px;" value="<?= $detail['CLINIC_ID']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <label for="VACTINATION_DATE">Tanggal Periksa</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="VACTINATION_DATE" id="VACTINATION_DATE" style="width: 200px;" value="<?= $detail['']; ?>" readonly>
                </div>
                <div class="col-md-3" style="color: red; border-color: red;">
                    <input class="form-check-input" type="checkbox" name="patient_category_id" id="patient_category_id" <?= ($detail['patient_category_id'] == "0" ? 'checked' : ''); ?> disabled>
                    <label for="patient_category_id"><b>CITO</b></label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="validation" id="validation" <?= ($detail['validation'] == "0" ? 'checked' : ''); ?> disabled>
                    <label for="validation"><b>Hasil</b></label>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-2">
                    <label for="DESCRIPTION"><b>Diagnosis Klinis</b></label>
                </div>
                <div class="col">
                    <input type="text" name="DESCRIPTION" id="DESCRIPTION" style="width: 200px;" value="<?= $detail['DESCRIPTION']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>HEMATOLOGI</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_011" id="pl_011" <?= ($detail['pl_011'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_011">Laju Endap Darah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_010" id="pl_010" <?= ($detail['pl_010'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_010">Hematokrit</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_024" id="pl_024" <?= ($detail['pl_024'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_024">Haemoglobin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_025" id="pl_025" <?= ($detail['pl_025'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_025">Eritrosit</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_029" id="pl_029" <?= ($detail['pl_029'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_029">Leukosit</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_037" id="pl_037" <?= ($detail['pl_037'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_037">Trombosit</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_022" id="pl_022" <?= ($detail['pl_022'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_022">Retikulosit</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_064" id="pl_064" <?= ($detail['pl_064'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_064">Hitung Jenis Leukosit Sdif</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_065" id="pl_065" <?= ($detail['pl_065'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_065">Masa Pendarahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_051" id="pl_051" <?= ($detail['pl_051'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_051">Masa Pembekuan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_041" id="pl_041" <?= ($detail['pl_041'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_041">Tes Rumpel Leede</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_046" id="pl_046" <?= ($detail['pl_046'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_046">Gambar Darah Tepi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_178" id="pl_178" <?= ($detail['pl_178'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_178">MCV</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_179" id="pl_179" <?= ($detail['pl_179'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_179">MCHC</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_087" id="pl_087" <?= ($detail['pl_087'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_087">RDW</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_086" id="pl_086" <?= ($detail['pl_086'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_086">SI TIBC</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_005" id="pl_005" <?= ($detail['pl_005'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_005">APTT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_115" id="pl_115" <?= ($detail['pl_115'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_115">Fibrinogen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_117" id="pl_117" <?= ($detail['pl_117'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_117">D. Dimer</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_116" id="pl_116" <?= ($detail['pl_116'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_116">PT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_122" id="pl_122" <?= ($detail['pl_122'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_122">INR</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>KIMIA DARAH</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_006" id="pl_006" <?= ($detail['pl_006'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_006">Gula Darah Sewaktu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_021" id="pl_021" <?= ($detail['pl_021'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_021">Gula Darah Puasa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_001" id="pl_001" <?= ($detail['pl_001'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_001">Gula Darah Post Prandial</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_026" id="pl_026" <?= ($detail['pl_026'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_026">Cholesterol Total</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_028" id="pl_028" <?= ($detail['pl_028'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_028">Trigliserida</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_031" id="pl_031" <?= ($detail['pl_031'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_031">HDL Cholesterol</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_020" id="pl_020" <?= ($detail['pl_020'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_020">LDL Cholesterol</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_033" id="pl_033" <?= ($detail['pl_033'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_033">Uric Acid</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_066" id="pl_066" <?= ($detail['pl_066'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_066">Ureum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_039" id="pl_039" <?= ($detail['pl_039'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_039">Creatinin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_048" id="pl_048" <?= ($detail['pl_048'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_048">Protein Total</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_063" id="pl_063" <?= ($detail['pl_063'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_063">Albumin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_181" id="pl_181" <?= ($detail['pl_181'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_181">Globulin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_069" id="pl_069" <?= ($detail['pl_069'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_069">Bilirubin Total</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_059" id="pl_059" <?= ($detail['pl_059'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_059">Bilirubin Direct</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_044" id="pl_044" <?= ($detail['pl_044'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_044">Bilirubin Indirect</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_125" id="pl_125" <?= ($detail['pl_125'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_125">Alkaline Phosphatase</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_096" id="pl_096" <?= ($detail['pl_096'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_096">Gamma-GT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_113" id="pl_113" <?= ($detail['pl_113'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_113">SGOT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_114" id="pl_114" <?= ($detail['pl_114'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_114">SGPT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_060" id="pl_060" <?= ($detail['pl_060'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_060">LDH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_102" id="pl_102" <?= ($detail['pl_102'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_102">CK</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_120" id="pl_120" <?= ($detail['pl_120'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_120">CK-MB</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_119" id="pl_119" <?= ($detail['pl_119'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_119">HB A1C</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>ELEKTROLIT</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_075" id="pl_075" <?= ($detail['pl_075'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_075">Natrium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_072" id="pl_072" <?= ($detail['pl_072'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_072">Kalium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_071" id="pl_071" <?= ($detail['pl_071'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_071">AGD</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_018" id="pl_018" <?= ($detail['pl_018'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_018">Clorida</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_019" id="pl_019" <?= ($detail['pl_019'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_019">Calsium</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_079" id="pl_079" <?= ($detail['pl_079'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_079">Magnesium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_173" id="pl_173" <?= ($detail['pl_173'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_173">TPSA</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>SEROLOGI / IMUNOLOGI</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_013" id="pl_013" <?= ($detail['pl_013'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_013">Hbs Ag</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_008" id="pl_008" <?= ($detail['pl_008'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_008">Anti HBS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_034" id="pl_034" <?= ($detail['pl_034'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_034">VDRL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_017" id="pl_017" <?= ($detail['pl_017'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_017">ASTO</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_015" id="pl_015" <?= ($detail['pl_015'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_015">CRP</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_184" id="pl_184" <?= ($detail['pl_184'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_184">Rhemotoid Factor</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_070" id="pl_070" <?= ($detail['pl_070'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_070">Widal Test</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_073" id="pl_073" <?= ($detail['pl_073'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_073">HIV</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_074" id="pl_074" <?= ($detail['pl_074'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_074">Serologi DHF</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_108" id="pl_108" <?= ($detail['pl_108'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_108">TORCH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_139" id="pl_139" <?= ($detail['pl_139'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_139">T3</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_140" id="pl_140" <?= ($detail['pl_140'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_140">T4</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_112" id="pl_112" <?= ($detail['pl_112'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_112">TSH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_109" id="pl_109" <?= ($detail['pl_109'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_109">Troponin</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>PARASITOLOGI</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_007" id="pl_007" <?= ($detail['pl_007'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_007">Malaria</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_036" id="pl_036" <?= ($detail['pl_036'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_036">Telur Cacing</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_050" id="pl_050" <?= ($detail['pl_050'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_050">BTA Sputum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_009" id="pl_009" <?= ($detail['pl_009'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_009">Filaria</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_077" id="pl_077" <?= ($detail['pl_077'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_077">Secret Urethra</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_110" id="pl_110" <?= ($detail['pl_110'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_110">Secret Vagina</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="row mb-1">
                        <div class="col-md-9" style="background-color: rgb(138, 207, 224);">
                            <b>KLINIK RUTIN</b>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_027" id="pl_027" <?= ($detail['pl_027'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_027">Urine Lengkap</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_016" id="pl_016" <?= ($detail['pl_016'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_016">Faeces Lengkap</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-5" style="background-color: rgb(138, 207, 224);">
                            <b>MIKROBIOLOGI</b>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_050" id="pl_050" <?= ($detail['pl_050'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_050">BTA Sputum</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_040" id="pl_040" <?= ($detail['pl_040'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_040">Analisa Sperma</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_068" id="pl_068" <?= ($detail['pl_068'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_068">None-Pandy</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_154" id="pl_154" <?= ($detail['pl_154'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_154">Narkoba Test</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pl_152" id="pl_152" <?= ($detail['pl_152'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="pl_152">Test Kelamin</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="row mb-1">
                        <div class="col-md-3" style="background-color: rgb(138, 207, 224);">
                            <b>LAIN-LAIN</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_038" id="pl_038" <?= ($detail['pl_038'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_038">Analisa Fluera / Acites</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_012" id="pl_012" <?= ($detail['pl_012'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_012">Analisa LCS</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pl_049" id="pl_049" <?= ($detail['pl_049'] == "0" ? 'checked' : ''); ?> disabled>
                                <label for="pl_049">Analisa Cairan Sendi</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-7">
                    <label for="pemeriksaan_lain"><b><i>Pemeriksaan Lain</i></b></label><br>
                    <textarea name="pemeriksaan_lain" id="pemeriksaan_lain" style="width: 500px; height: 100px;" readonly><?= $detail['pemeriksaan_lain']; ?></textarea>
                </div>
                <div class="col-md-5 mb-3" style="text-align:center">
                    <div class="row">
                        <div class="col">
                            <label for="doctor">Tanda Tangan Dokter</label>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col">
                            <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                            <input type="hidden" name="TTD" id="TTD" value="<?= $detail['TTD']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            ( <input type="text" name="doctor" id="doctor" style="width: 150px;" value="" readonly> )
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var imageUrl = '<?= $detail['TTD'] ?>';
        var img = new Image();
        img.src = imageUrl;
        img.onload = function() {
            context.drawImage(img, 0, 0, canvas.width, canvas.height);
        };
    </script>
</body>

</html>