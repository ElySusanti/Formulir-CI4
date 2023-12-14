<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Pengkajian Awal Keperawatan dan Medis Instalasi Gawat Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <!-- <link href="css/jquery.signature.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 150px;
            height: 90px;
        }
    </style>
    <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.signature.js"></script>
    <style>
        td {
            height: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-3" style="font-family: 'Arial Narrow';">
        <a class="btn btn-outline-dark" href="/Formulir" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
        </a>
        <form action="<?= base_url('formulir/simpan') ?>" method="post" autocomplete="off">
            <table style="width: 100%;">
                <tr>
                    <td>
                        <img src="/img/logo.png" alt="" style="width: 70px;">
                    </td>
                    <td>
                        <h4>RSUD Dr. M Yunus Bengkulu<br>Badan Layanan Umum Daerah<br></h4>
                        <h5>Jl. Bhayangkara Bengkulu38229 Tlp. (0736) 52004 - 51111 Fax. (0736) 52007</h5>
                    </td>
                    <td>
                        <div class="container align:right" style="border: 3px solid black; border-radius: 10px; width: 100%; font-family: Calibri; text-align: left;">
                            <div class="row mb-1 mt-3">
                                <div class="col-md-4">
                                    <label for="NO_REGISTRATION">No. MR</label>
                                </div>
                                <div class="col-md-6">
                                    : <select name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 150px; height: 30PX;" required>
                                        <option value="" selected disabled>--Pilih Nomor Rekam Medis--</option>
                                        <?php foreach ($Biodata as $value) : ?>
                                            <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="THENAME">Nama Lengkap</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="text" id="THENAME" name="THENAME" style="width: 150px;" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="DATE_OF_BIRTH">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 150px;" readonly>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <h4><b>Pengkajian Awal Keperawatan dan Medis Instalasi Gawat Darurat (Diisi oleh perawat IGD)</b></h4>
            <div class="row card">
                <table class="table table-bordered" style="border: 1px solid black; width: 100%;">
                    <tbody>
                        <tr style="text-align: center;">
                            <td colspan="2"><label for="v_01">Tanggal, </label><label for="v_02">Jam Pengkajian</label></td>
                            <td colspan="2" style="width: 28%;">Status Peminjaman</td>
                            <td colspan="2" style="width: 20%;">Sumber Data</td>
                            <td colspan="2" style="width: 24%;"><label for="v_05">Penanggung Jawab, </label><label for="v_06">Hubungan</label></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="2">
                                <input type="date" id="v_01" name="v_01" style="width: 150px;">,
                                <input type="time" id="v_02" name="v_02" style="width: 100px;">
                            </td>
                            <td colspan="2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_01" id="t_01_umum" value="0" onclick="fungsi1_disabled()">
                                    <label class="form-check-label" for="t_01_umum"> Umum</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_01" id="t_01_bpjs" value="1" onclick="fungsi1_disabled()">
                                    <label class="form-check-label" for="t_01_bpjs"> BPJS</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_01" id="t_01_input" value="2" onclick="fungsi1_enable()">
                                    <label class="form-check-label"> </label>
                                    <input type="text" id="v_03" name="v_03" style="width: 100px;" disabled>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_02" id="t_02_pasien" value="0" onclick="fungsi2_disabled()">
                                    <label class="form-check-label" for="t_02_pasien"> Pasien</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_02" id="t_02_keluarga" value="1" onclick="fungsi2_enable()">
                                    <label class="form-check-label" for="t_02_keluarga"> Keluarga/</label>
                                    <input type="text" id="v_04" name="v_04" style="width: 100px;" disabled>
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="text" id="v_05" name="v_05" style="width: 150px;">,
                                <input type="text" id="v_06" name="v_06" style="width: 150px;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" style="height: 200px"><label for="ANAMNASE">Keluhan utama </label>
                                <label for="ANAMNASE" style="font-style: italic;">(Riwayat kejadian):</label><br>
                                <textarea name="ANAMNASE" id="ANAMNASE" style="width: 100%; height: 180px;"></textarea>
                            </td>
                            <td style="width: 10%;"><b>Status fungsional</b></td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_03" id="t_03_mandiri" value="0">
                                    <label class="form-check-label" for="t_03_mandiri"> Mandiri</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_03" id="t_03_ketergantungan" value="1">
                                    <label class="form-check-label" for="t_03_ketergantungan"> Ketergantungan sebagian/Total</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Resiko jatuh</b></td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_04" id="t_04_tidakberesiko" value="0">
                                    <label class="form-check-label" for="t_04_tidakberesiko"> Tidak beresiko</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_04" id="t_04_resikorendah" value="1">
                                    <label class="form-check-label" for="t_04_resikorendah"> Resiko rendah</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_04" id="t_04_resikotinggi" value="2">
                                    <label class="form-check-label" for="t_04_resikotinggi"> Resiko tinggi</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="4" rowspan="6">
                                <div class="row mb-5">
                                    <div class="col">
                                        <b>Pengkajian Nyeri Dewasa:</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <img src="/img/skala_angka.png" alt="" style="width: 100%;" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <span class="awal"></span>
                                        <input type="range" name="t_05" id="t_05" min="0" max="10" step="1" style="width: 95%;">
                                        <span class="akhir"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <img src="/img/skala_animasi.png" alt="" style="width: 95%;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 15%;">Keadaan Umum</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_06" id="t_06_sakitringan" value="0">
                                    <label class="form-check-label" for="t_06_sakitringan"> Sakit ringan</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_06" id="t_06_sakitsedang" value="1">
                                    <label class="form-check-label" for="t_06_sakitsedang"> Sakit sedang</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_06" id="t_06_sakitberat" value="2">
                                    <label class="form-check-label" for="t_06_sakitberat"> Sakit berat</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Riwayat Alergi</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_07" id="t_07_tidakada" value="0" onclick="fungsi3_disabled()">
                                    <label class="form-check-label" for="t_07_tidakada"> Tidak ada</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_07" id="t_07_ada" value="1" onclick="fungsi3_enable">
                                    <label class="form-check-label" for="t_07_ada"> Ada</label>
                                    <input type="text" id="RIWAYAT_ALERGI" name="RIWAYAT_ALERGI" style="width: 200px;" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="DIAGNOSA_HISTORY">Riwayat Kesehatan</label></td>
                            <td colspan="3">
                                <input type="text" id="DIAGNOSA_HISTORY" name="DIAGNOSA_HISTORY" style="width: 300px;">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="RIWAYAT_OBAT">Pengobatan</label></td>
                            <td colspan="3">
                                <input type="text" id="RIWAYAT_OBAT" name="RIWAYAT_OBAT" style="width: 300px;">
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td rowspan="2">Tanda-tanda Vital</td>
                            <td colspan="3" style="height: 60px;">
                                <label for="TENSION_UPPER">TD: </label>
                                <input type="number" id="TENSION_UPPER" name="TENSION_UPPER" style="width: 50px;"> /
                                <input type="number" id="TENSION_BELOW" name="TENSION_BELOW" style="width: 50px;"> mmHg &nbsp;
                                <label for="NADI">HR: </label>
                                <input type="number" id="NADI" name="NADI" style="width: 50px;"> x/Mnt &nbsp;
                                <label for="NAFAS">RR: </label>
                                <input type="number" id="NAFAS" name="NAFAS" style="width: 50px;"> x/mnt
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="vertical-align: middle;">
                                <label for="SATURASI">SPO2: </label>
                                <input type="number" id="SATURASI" name="SATURASI" style="width: 50px;"> % &nbsp;
                                <label for="TEMPERATURE">Suhu: </label>
                                <input type="number" id="TEMPERATURE" name="TEMPERATURE" style="width: 50px;"> &nbsp;
                                <label for="WEIGHT">BB/TB/PB: </label>
                                <input type="number" id="WEIGHT" name="WEIGHT" style="width: 50px;">
                                <input type="number" id="HEIGHT" name="HEIGHT" style="width: 50px;">
                            </td>
                            <td colspan="4" rowspan="7" style="text-align: center;">
                                <b>Skala Nyeri Untuk Anak (Skala Flacc):</b><br>
                                <table class="table table-bordered" align="center" style="border: 1px solid black; width: 97%; text-align: left;">
                                    <tr style="text-align: center;">
                                        <td style="width: 10%;">PENGKAJIAN</td>
                                        <td style="width: 26%;">0</td>
                                        <td style="width: 26%;">1</td>
                                        <td style="width: 26%;">2</td>
                                        <td style="width: 7%;">NILAI</td>
                                    </tr>
                                    <tr>
                                        <td>Wajah</td>
                                        <td>Tersenyum, tidak ada ekspresi khusus</td>
                                        <td>Terkadang meringis/menarik diri</td>
                                        <td>Sering menggetarkan dagu dan mengatupkan rahang</td>
                                        <td>
                                            <select type="number" class="number" name="t_08" id="t_08" onchange="myFunction()" style="height: 30px; width: 30px;">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kaki</td>
                                        <td>Gerakan normal/relaksasi</td>
                                        <td>Tidak tenang/tegang</td>
                                        <td>Kaki dibuat menendang/menarik diri</td>
                                        <td>
                                            <select type="number" class="number" name="t_09" id="t_09" onchange="myFunction()" style="height: 30px; width: 30px;">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aktifitas</td>
                                        <td>Tidur, posisi normal, mudah bergerak</td>
                                        <td>Gerakan menggeliat/berguling/kaku</td>
                                        <td>Melengkungkan punggung/kaku/menghentak</td>
                                        <td>
                                            <select type="number" class="number" name="t_010" id="t_010" onchange="myFunction()" style="height: 30px; width: 30px;">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Menangis</td>
                                        <td>Tidak menangis (bangun/tidur)</td>
                                        <td>Mengerang, merengek-rengek</td>
                                        <td>Menangis terus menerus, terisak, menjerit</td>
                                        <td>
                                            <select type="number" class="number" name="t_011" id="t_011" onchange="myFunction()" style="height: 30px; width: 30px;">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bersuara</td>
                                        <td>Bersuara normal, tenang</td>
                                        <td>Tenang bila dipeluk, digendong atau diajak bicara</td>
                                        <td>Sulit untuk menenangkan</td>
                                        <td>
                                            <select type="number" class="number" name="t_012" id="t_012" onchange="myFunction()" style="height: 30px; width: 30px;">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td colspan="4">TOTAL SKOR</td>
                                        <td><input type="number" id="total" name="t_013" id="t_013" style="width: 30px;" disabled /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Jalan Nafas (A)</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_014" id="t_014_bebas" value="0">
                                    <label class="form-check-label" for="t_014_bebas"> Bebas</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_014" id="t_014_sumbatan" value="1">
                                    <label class="form-check-label" for="t_014_sumbatan"> Sumbatan (Oedema/Benda Asing/Cairan)</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_014" id="t_014_terintubasi" value="2">
                                    <label class="form-check-label" for="t_014_terintubasi"> Terintubasi</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Pernafasan (B)</td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_015" id="t_015_normal" value="0">
                                            <label class="form-check-label" for="t_015_normal"> Normal</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_015" id="t_015_hentinafas" value="1">
                                            <label class="form-check-label" for="t_015_hentinafas"> Henti nafas</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_015" id="t_015_dsistresringan" value="2">
                                            <label class="form-check-label" for="t_015_dsistresringan"> Dsistres pernafasan ringan</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_015" id="t_015_dsistressedang" value="3">
                                            <label class="form-check-label" for="t_015_dsistressedang"> Dsistres pernafasan sedang</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_015" id="t_015_dsistresberat" value="4">
                                            <label class="form-check-label" for="t_015_dsistresberat"> Dsistres pernafasan berat</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Cirkulasi (C)</td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_normal" value="0">
                                            <label class="form-check-label" for="t_016_normal"> Normal</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_hentijantung" value="1">
                                            <label class="form-check-label" for="t_016_hentijantung"> Henti jantung</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_bradicardi" value="2">
                                            <label class="form-check-label" for="t_016_bradicardi"> Bradicardi</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_taciadi" value="3">
                                            <label class="form-check-label" for="t_016_taciadi"> Tacicardi</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_akral" value="4">
                                            <label class="form-check-label" for="t_016_akral"> Akral dingin</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_016" id="t_016_sianosisi" value="5">
                                            <label class="form-check-label" for="t_016_sianosisi"> Sianosisi</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Kesadaran (D)</td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_14-15" value="0">
                                            <label class="form-check-label" for="t_017_14-15"> 14-15 Composmentis</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_12-13" value="1">
                                            <label class="form-check-label" for="t_017_12-13"> 12-13 Apastis</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_10-11" value="2">
                                            <label class="form-check-label" for="t_017_10-11"> 10-11 Delirium</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_7-9" value="3">
                                            <label class="form-check-label" for="t_017_7-9"> 7-9 Samnolen</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_5-6" value="4">
                                            <label class="form-check-label" for="t_017_5-6"> 5-6 Sopor</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_017" id="t_017_3-4" value="5">
                                            <label class="form-check-label" for="t_017_3-4"> 3-4 Coma</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Eksposur</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_018" id="t_018_TAK" value="0">
                                    <label class="form-check-label" for="t_018_TAK"> TAK </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_018" id="t_018_paraperesis" value="1">
                                    <label class="form-check-label" for="t_018_paraperesis"> Paraperesis </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_018" id="t_018_parase" value="2">
                                    <label class="form-check-label" for="t_018_parase"> Parase </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_018" id="t_018_plegi" value="3">
                                    <label class="form-check-label" for="t_018_plegi"> Plegi </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_018" id="t_018_perdarahan" value="4">
                                    <label class="form-check-label" for="t_018_perdarahan"> Pendarahan/fraktur</label>
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 40px; vertical-align: middle;">
                            <td style="vertical-align: middle;">Status Psikologi</td>
                            <td colspan="3">
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_019" id="t_019_stabil" value="0">
                                            <label class="form-check-label" for="t_019_stabil"> Stabil/tenang</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_019" id="t_019_cemas" value="2">
                                            <label class="form-check-label" for="t_019_cemas"> Cemas/takut/sedih/depresi</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_019" id="t_019_marah" value="3">
                                            <label class="form-check-label" for="t_019_marah"> Marah</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_019" id="t_019_potensial" value="4">
                                            <label class="form-check-label" for="t_019_potensial"> Potensial bunuh diri</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_019" id="t_019_mencederai" value="5">
                                            <label class="form-check-label" for="t_019_mencederai"> Mencederai orang lain/lingkungan</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Budaya / Kebiasaan</td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="t_020" id="t_020" value="1" onclick="fungsi4()">
                                            <label class="form-check-label" for="t_020"> Tidak ada </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="t_021" id="t_021" value="1">
                                            <label class="form-check-label" for="t_021"> Merokok </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="t_022" id="t_022" value="1">
                                            <label class="form-check-label" for="t_022"> Minum alkohol </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="t_023" id="t_023" value="1" onclick="fungsi4_input()">
                                            <input type="text" id="v_07" name="v_07" style="width: 100px;" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label><label for="v_08">Nilai kepercayaan terhadap penyakit</label></label>
                                        <input type="text" id="v_08" name="v_08" style="width: 100px;">
                                    </div>
                                </div>
                            </td>
                            <td colspan="2" rowspan="3">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_024" id="t_024_tidaknyeri" value="0">
                                            <label class="form-check-label" for="t_024_tidaknyeri">Tidak nyeri</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 0
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_024" id="t_024_ringan" value="1">
                                            <label class="form-check-label" for="t_024_ringan">Ringan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 1-3
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_024" id="t_024_sedang" value="2">
                                            <label class="form-check-label" for="t_024_sedang">Sedang</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 4-6
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_024" id="t_024_berat" value="3">
                                            <label class="form-check-label" for="t_024_berat">Berat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 7-10
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_025" id="t_025_akut" value="4">
                                            <label class="form-check-label" for="t_025_akut">Akut</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="t_025" id="t_025_kronis" value="5">
                                            <label class="form-check-label" for="t_025_kronis">Kronis</label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2" rowspan="3">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="v_09">Lokasi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea id="v_09" name="v_09" style="width: 150px; height: 70px;"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="v_10">Frekuensi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="v_10" name="v_10" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="v_11">Karakteristik</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="v_11" name="v_11" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="v_12">Durasi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="v_12" name="v_12" style="width: 150px;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Riwayat Gangguan Jiwa</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_026" id="t_026_tidakada" value="0" onclick="fungsi5_disabled()">
                                    <label class="form-check-label" for="t_026_tidakada"> Tidak ada </label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_026" id="t_026_ada" value="1" onclick="fungsi5_enable()">
                                    <label class="form-check-label" for="t_026_ada"> Ada </label>
                                    <input type="text" id="v_13" name="v_13" style="width: 200px;" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Trauma Psikis</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_tidakada" value="0">
                                    <label class="form-check-label" for="t_027_tidakada"> Tidak ada </label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_aniaya" value="1">
                                    <label class="form-check-label" for="t_027_aniaya"> Aniaya fisik/psikologi/KDRT/kriminal </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: middle;">Status Sosial</td>
                            <td colspan="3" rowspan="2">
                                <div class="row">
                                    <div class="col">
                                        Hubungan dengan anggota keluarga:
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_028" id="t_028_baik" value="0">
                                            <label class="form-check-label" for="t_028_baik"> Baik</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_028" id="t_028_tidak" value="1">
                                            <label class="form-check-label" for="t_028_tidak"> Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Tempat tinggal:
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_029" id="t_029_rumahsendiri" value="0" onclick="fungsi6_disabled()">
                                            <label class="form-check-label" for="t_029_rumahsendiri"> Rumah sendiri</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_029" id="t_029_input" value="1" onclick="fungsi6_enable()">
                                            <input type="text" id="v_14" name="v_14" style="width: 150px;" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td colspan="3" style="text-align: center;"><b>Skrining Gizi Dewasa</b></td>
                            <td style="text-align: center;"><b>Hasil</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" colspan="3">
                                <div class="row">
                                    <div class="col">Apakah terdapat penyakit resiko malnutrisi seperti</div>
                                </div>
                                <div class="row">
                                    <div class="col">(DM, CKD, Troid, Kanker, dll)</div>
                                </div>
                            </td>
                            <td rowspan="2" style="text-align: center;">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_ya" value="0">
                                        <label class="form-check-label" for="t_030_ya"> Ya</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_tidak" value="1">
                                        <label class="form-check-label" for="t_030_tidak"> Tidak</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: middle;">Ekonomi</td>
                            <td colspan="3" rowspan="2" style="vertical-align: middle;">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="v_15">Pekerjaan: </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="v_15" name="v_15" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col">
                                                <label>Hambatan ekonomi: </label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="t_031" id="t_031_tidak" value="0" onclick="fungsi7_disabled()">
                                                    <label class="form-check-label" for="t_031_tidak"> Tidak </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="t_031" id="t_031_ya" value="1" onclick="fungsi7_enable()">
                                                    <label class="form-check-label" for="t_031_ya"> Ya </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="v_16" name="v_16" style="width: 100%;" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;"><b>Skrining Gizi Anak</b></td>
                            <td style="text-align: center;"><b>Hasil</b></td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Spiritual</td>
                            <td colspan="3">
                                <div class="row mb-1">
                                    <div class="col">
                                        <label>Membutuhkan konseling Spiritual/Agama:</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_032" id="t_032_tidak" value="0" onclick="fungsi8_disabled()">
                                            <label class="form-check-label" for="t_032_tidak"> Tidak </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="t_032" id="t_032_ya" value="1" onclick="fungsi8_enable()">
                                            <label class="form-check-label" for="t_032_ya"> Ya </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="v_17" name="v_17" style="width: 100%;" disabled>
                                    </div>
                                </div>
                            </td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">Apakah terdapat penyakit resiko malnutrisi seperti</div>
                                </div>
                                <div class="row">
                                    <div class="col">(TBC, Kelainan Anatomis, dll)</div>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_ya" value="0">
                                        <label class="form-check-label" for="t_033_ya"> Ya</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_tidak" value="1">
                                        <label class="form-check-label" for="t_033_tidak"> Tidak</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="row mb-1">
                                    <div class="col"><b>DAFTAR MASALAH KEPERAWATAN</b></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Respirasi</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_034" id="t_034" value="1">
                                                    <label class="form-check-label" for="t_034">Pola napas tidak efektif </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_035" id="t_035" value="1">
                                                    <label class="form-check-label" for="t_035">Pembersihan jalan napas tidak efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_036" id="t_036" value="1">
                                                    <label class="form-check-label" for="t_036">Gangguan pertukaran gas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Sirkulasi Cardovasculer</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_037" id="t_037" value="1">
                                                    <label class="form-check-label" for="t_037">Gangguan perfusi jaringan perifer/serebral tidak efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_038" id="t_038" value="1">
                                                    <label class="form-check-label" for="t_038">Penurunan curah jantung</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_039" id="t_039" value="1">
                                                    <label class="form-check-label" for="t_039">Resiko pendarahan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Nutrisi dan cairan</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_040" id="t_040" value="1">
                                                    <label class="form-check-label" for="t_040">Hipervolemia/hipovolemia</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_041" id="t_041" value="1">
                                                    <label class="form-check-label" for="t_041">Berkurangnya cairan tubuh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042" value="1">
                                                    <label class="form-check-label" for="t_042">Devisit nutrisi/resiko devisit nutrisi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_043" id="t_043" value="1">
                                                    <label class="form-check-label" for="t_043">Resiko syok</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Nyeri dan kenyamanan</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_044" id="t_044" value="1">
                                                    <label class="form-check-label" for="t_044">Nyeri akut/kronis</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_045" id="t_045" value="1">
                                                    <label class="form-check-label" for="t_045">Gangguan rasa nyaman</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_046" id="t_046" value="1">
                                                    <label class="form-check-label" for="t_046">Resiko syok</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_047" id="t_047" value="1" onclick="fungsi9()">
                                                    <input type="text" id="v_18" name="v_18" style="width: 200px;" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Keamanan dan proteksi</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_048" id="t_048" value="1">
                                                    <label class="form-check-label" for="t_048">Hipotermia/hipertermia</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_049" id="t_049" value="1">
                                                    <label class="form-check-label" for="t_049">Resiko infeksi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_050" id="t_050" value="1">
                                                    <label class="form-check-label" for="t_050">Resiko cedera / jatuh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_051" id="t_051" value="1">
                                                    <label class="form-check-label" for="t_051">Resiko / aktual gangguan interritas kulit</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_052" id="t_052" value="1" onclick="fungsi10()">
                                                    <input type="text" id="v_19" name="v_19" style="width: 200px;" disabled>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_053" id="t_053" value="1" onclick="fungsi11()">
                                                    <input type="text" id="v_20" name="v_20" style="width: 200px;" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Psikologis</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_054" id="t_054" value="1">
                                                    <label class="form-check-label" for="t_054">Resiko mencederai diri sendiri dan lingkungan</label>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_055" id="t_055" value="1" onclick="fungsi12()">
                                                    <input type="text" id="v_21" name="v_21" style="width: 200px;" disabled>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_056" id="t_056" value="1" onclick="fungsi13()">
                                                    <input type="text" id="v_22" name="v_22" style="width: 200px;" disabled>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_057" id="t_057" value="1" onclick="fungsi14()">
                                                    <input type="text" id="v_23" name="v_23" style="width: 200px;" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="row"><b>RENCANA ASUHAN KEPERAWATAN</b></div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_058" id="t_058" value="1">
                                            <label class="form-check-label" for="t_058">Lakukan manuver jaw trust, head thin chin lift</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_059" id="t_059" value="1">
                                            <label class="form-check-label" for="t_059">Keluarkan benda asing, lakukan section</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_060" id="t_060" value="1">
                                            <label class="form-check-label" for="t_060">Berikan bantuan napas < Bag valve mask</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_061" id="t_061" value="1">
                                            <label class="form-check-label" for="t_061">Ajarkan teknik batuk efektif / nafas dalam</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_062" id="t_062" value="1">
                                            <label class="form-check-label" for="t_062">Berikan posisi miring mantap pada pasien tidak sadar</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_063" id="t_063" value="1">
                                            <label class="form-check-label" for="t_063">Observasi frekuensi, irama dan kedalaman pernapasan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_064" id="t_064" value="1">
                                            <label class="form-check-label" for="t_064">Berikan oksigen sesuai kebutuhan melauali nasal kanul, masker oksigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_065" id="t_065" value="1">
                                            <label class="form-check-label" for="t_065">Monitor saturasi okigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_066" id="t_066" value="1">
                                            <label class="form-check-label" for="t_066">Monitor tanda-tanda vital secara periodik/saturasi oksigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_067" id="t_067" value="1">
                                            <label class="form-check-label" for="t_067">Monitor tingkat kesadaran (GCS) secara periodik</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_068" id="t_068" value="1">
                                            <label class="form-check-label" for="t_068">Tinggikan kepala 15-30 jika tidak ada kontra indikasi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_069" id="t_069" value="1">
                                            <label class="form-check-label" for="t_069">Berikan posisi semi fowler bila tidak ada kontra indikasi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_070" id="t_070" value="1">
                                            <label class="form-check-label" for="t_070">Pasang infus, ambil sampel darah, cek AGD</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_071" id="t_071" value="1">
                                            <label class="form-check-label" for="t_071">Kolaborasi pemberian cairan intravena, ciran koloid, darah, produk darah/obat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_072" id="t_072" value="1">
                                            <label class="form-check-label" for="t_072">Berikan cairan intravena, cairan koloid, darah, produk darah</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_073" id="t_073" value="1">
                                            <label class="form-check-label" for="t_073">Pasang cateter urin untuk monitor cairan keluar</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_074" id="t_074" value="1">
                                            <label class="form-check-label" for="t_074">Lakukan perawatan luka</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_075" id="t_075" value="1">
                                            <label class="form-check-label" for="t_075">Kaji nyeri/tanda-tanda infeksi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_076" id="t_076" value="1" onclick="fungsi15()">
                                            <input type="text" id="v_24" name="v_24" style="width: 300px;" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hambatan pelayanan<br>komunikasi, edukasi</td>
                            <td colspan="5" style="vertical-align: middle;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_077" id="t_077_tidak" value="0" onclick="fungsi16_disabled()" checked>
                                    <label class="form-check-label" for="t_077_tidak"> Tidak </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_077" id="t_077_ada" value="1" onclick="fungsi16_enable()">
                                    <label class="form-check-label" for="t_077_ada"> Ada: </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_078" id="t_078" value="1">
                                    <label class="form-check-label" for="t_078"> Pendengaran </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_079" id="t_079" value="1">
                                    <label class="form-check-label" for="t_079"> Penglihatan </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_080" id="t_080" value="1">
                                    <label class="form-check-label" for="t_080"> Kognitif </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_081" id="t_081" value="1">
                                    <label class="form-check-label" for="t_081"> Fisik </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_082" id="t_082" value="1">
                                    <label class="form-check-label" for="t_082"> Budaya </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_083" id="t_083" value="1">
                                    <label class="form-check-label" for="t_083"> Emosi </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_084" id="t_084" value="1">
                                    <label class="form-check-label" for="t_084"> Bahasa </label>
                                </div>
                            </td>
                            <td colspan="2" rowspan="2">
                                <div class="row">
                                    <div class="col">
                                        <label for="v_25">Jam selesai pengkajian</label>
                                        <input type="time" id="v_25" name="v_25" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <table style="justify-content: center; width: 100%;">
                                        <tr>
                                            <td style="text-align: center; width: 50%;">
                                                <label for="v_26" style="text-align: center;">Perawat Pengkaji (PPJA)</label>
                                                <br>
                                                <div id="TTD"></div>
                                                <br>( <input type="text" id="v_26" name="v_26" style="width: 150px; text-align: center;"> )
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Kebutuhan Edukasi</td>
                            <td colspan="5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_085" id="t_085" value="1">
                                            <label class="form-check-label" for="t_085">Manajemen nyeri</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_086" id="t_086" value="1">
                                            <label class="form-check-label" for="t_086">Nutrisi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_087" id="t_087" value="1">
                                            <label class="form-check-label" for="t_087">Perawatan luka</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_088" id="t_088" value="1">
                                            <label class="form-check-label" for="t_088">Jaminan finansial</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_089" id="t_089" value="1" onclick="fungsi17()">
                                            <input type="text" id="v_27" name="v_27" style="width: 300px;" disabled>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_090" id="t_090" value="1" onclick="fungsi18()">
                                            <label class="form-check-label" for="t_090">Lain-lain</label>
                                            <input type="text" id="v_28" name="v_28" style="width: 200px;" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>
    <script>
        $('#NO_REGISTRATION').on('change', (event) => {
            getBiodata(event.target.value).then(Biodata => {
                $('#THENAME').val(Biodata.THENAME);
                $('#DATE_OF_BIRTH').val(Biodata.DATE_OF_BIRTH);
            });
        });

        async function getBiodata(BODY_ID) {
            let response = await fetch('/api/databiodata/show/' + BODY_ID)
            let data = await response.json();

            return data;
        }
    </script>
    <script>
        const t_05 = document.querySelector('#t_05');
        const awal = document.querySelector('.awal');
        const akhir = document.querySelector('.akhir');

        awal.innerHTML = t_05.min;
        akhir.innerHTML = t_05.value;
        t_05.addEventListener('input', function() {
            akhir.innerHTML = t_05.value;
        })
    </script>
    <script>
        $(function() {
            var sig = $('#TTD').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
            $('#json').click(function() {
                alert(sig.signature('toJSON'));
            });
            $('#svg').click(function() {
                alert(sig.signature('toSVG'));
            });
        });
    </script>
    <script>
        function myFunction() {
            var sum = 0;
            $('.number').each(function() {
                sum += Number($(this).val());
            });
            $('#total').val(sum);
        };
    </script>
    <script>
        $(function() {
            fungsi1_disabled();
            $("#t_01_umum, #t_01_bpjs").click(fungsi1_disabled);
        });
        $(function() {
            fungsi1_enable();
            $("#t_01_input").click(fungsi1_enable);
        });

        function fungsi1_disabled() {
            if (this.click) {
                $("#v_03").attr("disabled", true);
                $("#v_03").val("");
            } else {
                $("#v_03").removeAttr("disabled");
            }
        }

        function fungsi1_enable() {
            $("#v_03").attr("disabled", true);
            if (this.click) {
                $("#v_03").removeAttr("disabled");
                $("#v_03").focus();
            } else {
                $("#v_03").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi2_disabled();
            $("#t_02_pasien").click(fungsi2_disabled);
        });
        $(function() {
            fungsi2_enable();
            $("#t_02_keluarga").click(fungsi2_enable);
        });

        function fungsi2_disabled() {
            if (this.click) {
                $("#v_04").attr("disabled", true);
                $("#v_04").val("");
            } else {
                $("#v_04").removeAttr("disabled");
            }
        }

        function fungsi2_enable() {
            if (this.click) {
                $("#v_04").removeAttr("disabled");
                $("#v_04").focus();
            } else {
                $("#v_04").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi3_disabled();
            $("#t_07_tidakada").click(fungsi3_disabled);
        });
        $(function() {
            fungsi3_enable();
            $("#t_07_ada").click(fungsi3_enable);
        });

        function fungsi3_disabled() {
            if (this.click) {
                $("#RIWAYAT_ALERGI").attr("disabled", true);
                $("#RIWAYAT_ALERGI").val("");
            } else {
                $("#RIWAYAT_ALERGI").removeAttr("disabled");
            }
        }

        function fungsi3_enable() {
            if (this.click) {
                $("#RIWAYAT_ALERGI").removeAttr("disabled");
                $("#RIWAYAT_ALERGI").focus();
            } else {
                $("#RIWAYAT_ALERGI").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4() {
            if ($("#t_020").is(":checked")) {
                $("#t_021, #t_022, #t_023").attr("disabled", true);
                $("#t_021, #t_022, #t_023").prop("checked", false);
                $("#v_07").attr("disabled", true);
                $("#v_07").val("");
            } else {
                $("#t_021, #t_022, #t_023").removeAttr("disabled");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4_input() {
            if ($("#t_023").is(":checked")) {
                $("#v_07").removeAttr("disabled");
                $("#v_07").focus();
            } else {
                $("#v_07").attr("disabled", true);
                $("#v_07").val("");
            }
        }
    </script>
    <script>
        $(function() {
            fungsi5_disabled();
            $("#t_026_tidakada").click(fungsi5_disabled);
        });
        $(function() {
            fungsi5_enable();
            $("#t_026_ada").click(fungsi5_enable);
        });

        function fungsi5_disabled() {
            if (this.click) {
                $("#v_13").attr("disabled", true);
                $("#v_13").val("");
            } else {
                $("#v_13").removeAttr("disabled");
            }
        }

        function fungsi5_enable() {
            if (this.click) {
                $("#v_13").removeAttr("disabled");
                $("#v_13").focus();
            } else {
                $("#v_13").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi6_disabled();
            $("#t_029_rumahsendiri").click(fungsi6_disabled);
        });
        $(function() {
            fungsi6_enable();
            $("#t_029_input").click(fungsi6_enable);
        });

        function fungsi6_disabled() {
            if (this.click) {
                $("#v_14").attr("disabled", true);
                $("#v_14").val("");
            } else {
                $("#v_14").removeAttr("disabled");
            }
        }

        function fungsi6_enable() {
            if (this.click) {
                $("#v_14").removeAttr("disabled");
                $("#v_14").focus();
            } else {
                $("#v_14").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi7_disabled();
            $("#t_031_tidak").click(fungsi7_disabled);
        });
        $(function() {
            fungsi7_enable();
            $("#t_031_ya").click(fungsi7_enable);
        });

        function fungsi7_disabled() {
            if (this.click) {
                $("#v_16").attr("disabled", true);
                $("#v_16").val("");
            } else {
                $("#v_16").removeAttr("disabled");
            }
        }

        function fungsi7_enable() {
            if (this.click) {
                $("#v_16").removeAttr("disabled");
                $("#v_16").focus();
            } else {
                $("#v_16").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi8_disabled();
            $("#t_032_tidak").click(fungsi8_disabled);
        });
        $(function() {
            fungsi8_enable();
            $("#t_032_ya").click(fungsi8_enable);
        });

        function fungsi8_disabled() {
            if (this.click) {
                $("#v_17").attr("disabled", true);
                $("#v_17").val("");
            } else {
                $("#v_17").removeAttr("disabled");
            }
        }

        function fungsi8_enable() {
            if (this.click) {
                $("#v_17").removeAttr("disabled");
                $("#v_17").focus();
            } else {
                $("#v_17").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#t_047").is(":checked")) {
                $("#v_18").removeAttr("disabled");
                $("#v_18").focus();
            } else {
                $("#v_18").attr("disabled", true);
                $("#v_18").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi10() {
            if ($("#t_052").is(":checked")) {
                $("#v_19").removeAttr("disabled");
                $("#v_19").focus();
            } else {
                $("#v_19").attr("disabled", true);
                $("#v_19").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi11() {
            if ($("#t_053").is(":checked")) {
                $("#v_20").removeAttr("disabled");
                $("#v_20").focus();
            } else {
                $("#v_20").attr("disabled", true);
                $("#v_20").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi12() {
            if ($("#t_055").is(":checked")) {
                $("#v_21").removeAttr("disabled");
                $("#v_21").focus();
            } else {
                $("#v_21").attr("disabled", true);
                $("#v_21").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi13() {
            if ($("#t_056").is(":checked")) {
                $("#v_22").removeAttr("disabled");
                $("#v_22").focus();
            } else {
                $("#v_22").attr("disabled", true);
                $("#v_22").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi14() {
            if ($("#t_057").is(":checked")) {
                $("#v_23").removeAttr("disabled");
                $("#v_23").focus();
            } else {
                $("#v_23").attr("disabled", true);
                $("#v_23").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi15() {
            if ($("#t_076").is(":checked")) {
                $("#v_24").removeAttr("disabled");
                $("#v_24").focus();
            } else {
                $("#v_24").attr("disabled", true);
                $("#v_24").val("");
            }
        }
    </script>
    <script>
        $(function() {
            fungsi16_disabled();
            $("#t_077_tidak").click(fungsi16_disabled);
        });
        $(function() {
            fungsi16_enable();
            $("#t_077_ada").click(fungsi16_enable);
        });

        function fungsi16_disabled() {
            if (this.click) {
                $("input.hambatan").attr("disabled", true);
                $("input.hambatan").prop("checked", false);
            } else {
                $("input.hambatan").removeAttr("disabled");
            }
        }

        function fungsi16_enable() {
            if (this.click) {
                $("input.hambatan").removeAttr("disabled");
            } else {
                $("input.hambatan").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi17() {
            if ($("#t_089").is(":checked")) {
                $("#v_27").removeAttr("disabled");
                $("#v_27").focus();
            } else {
                $("#v_27").attr("disabled", true);
                $("#v_27").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi18() {
            if ($("#t_090").is(":checked")) {
                $("#v_28").removeAttr("disabled");
                $("#v_28").focus();
            } else {
                $("#v_28").attr("disabled", true);
                $("#v_28").val("");
            }
        }
    </script>
    <script>
        $("#TENSION_UPPER, #TENSION_BELOW, #NADI, #NAFAS, #SATURASI, #TEMPERATURE, #WEIGHT, #HEIGHT").keydown(function(e) {
            !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
        });
    </script>
</body>

</html>