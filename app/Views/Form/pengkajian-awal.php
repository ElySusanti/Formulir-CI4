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
        <?php foreach ($dataAssessmentformempat as $row) : ?>
            <form action="">
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
                            <table class="table table-bordered" align="right" style="border: 3px solid black; border-radius: 10px; width: 100%; font-family: Calibri;">
                                <tr>
                                    <td>
                                        <div class="row mb-1">
                                            <div class="col-md-4">
                                                <label for="no_Registration">No. MR</label>
                                            </div>
                                            <div class="col-md-6">
                                                : <input type="text" id="no_Registration" name="no_Registration" style="width: 150px;" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-4">
                                                <label for="thename">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-6">
                                                : <input type="text" id="thename" name="thename" style="width: 150px;" value="<?php echo $row->THENAME; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-4">
                                                <label for="date_of_birth">Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                : <input type="date" id="date_of_birth" name="date_of_birth" style="width: 150px;" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <h4><b>Pengkajian Awal Keperawatan dan Medis Instalasi Gawat Darurat (Diisi oleh perawat IGD)</b></h4>
                <div class="row card">
                    <table class="table table-bordered" style="border: 1px solid black; width: 100%;">
                        <tbody>
                            <tr style="text-align: center;">
                                <td colspan="2"><label for="v_04">Tanggal, </label><label for="v_05">Jam Pengkajian</label></td>
                                <td colspan="2" style="width: 28%;">Status Peminjaman</td>
                                <td colspan="2" style="width: 20%;">Sumber Data</td>
                                <td colspan="2" style="width: 24%;"><label for="v_08">Penanggung Jawab, </label><label for="v_09">Hubungan</label></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td colspan="2">
                                    <input type="date" id="v_04" name="v_04" style="width: 150px;">,
                                    <input type="time" id="v_05" name="v_05" style="width: 100px;">
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
                                        <label class="form-check-label" for=""> </label>
                                        <input type="text" id="v_06" name="v_06" style="width: 100px;" disabled>
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
                                        <input type="text" id="v_07" name="v_07" style="width: 100px;" disabled>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <input type="text" id="v_08" name="v_08" style="width: 150px;">,
                                    <input type="text" id="v_09" name="v_09" style="width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" rowspan="3" style="height: 200px"><label for="anamnase">Keluhan utama </label><label for="anamnase" style="font-style: italic;">(Riwayat kejadian):</label><br><textarea name="anamnase" id="anamnase" style="width: 100%; height: 180px;"></textarea></td>
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
                                        <input type="text" id="Riwayat_alergi" name="Riwayat_alergi" style="width: 200px;" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="diagnosa_history">Riwayat Kesehatan</label></td>
                                <td colspan="3">
                                    <input type="text" id="diagnosa_history" name="diagnosa_history" style="width: 300px;">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="riwayat_obat">Pengobatan</label></td>
                                <td colspan="3">
                                    <input type="text" id="riwayat_obat" name="riwayat_obat" style="width: 300px;">
                                </td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td rowspan="2">Tanda-tanda Vital</td>
                                <td colspan="3" style="height: 60px;">
                                    <label for="tension_upper">TD: </label>
                                    <input type="number" id="tension_upper" name="tension_upper" style="width: 50px;"> / <input type="number" id="tension_bellow" name="tension_upper" style="width: 50px;"> mmHg &nbsp;
                                    <label for="nadi">HR: </label>
                                    <input type="number" id="nadi" name="nadi" style="width: 50px;"> x/Mnt &nbsp;
                                    <label for="nafas">RR: </label>
                                    <input type="number" id="nafas" name="nafas" style="width: 50px;"> x/mnt
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="vertical-align: middle;">
                                    <label for="saturasi">SPO2: </label>
                                    <input type="number" id="saturasi" name="saturasi" style="width: 50px;"> % &nbsp;
                                    <label for="temperature">Suhu: </label>
                                    <input type="number" id="temperature" name="temperature" style="width: 50px;"> &nbsp;
                                    <label for="weight">BB/TB/PB: </label>
                                    <input type="number" id="weight" name="weight" style="width: 50px;">
                                    <input type="number" id="height" name="height" style="width: 50px;">
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
                                                <input class="form-check-input" type="checkbox" name="t_020" id="t_020_tidakada" onclick="fungsi4()">
                                                <label class="form-check-label" for="t_020_tidakada"> Tidak ada </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="t_020" id="t_020_merokok">
                                                <label class="form-check-label" for="t_020_merokok"> Merokok </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="t_020" id="t_020_minumalkohol">
                                                <label class="form-check-label" for="t_020_minumalkohol"> Minum alkohol </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="t_020" id="t_020_input" onclick="fungsi4_input()">
                                                <input type="text" id="v_20" name="v_20" style="width: 100px;" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for=""><label for="v_21">Nilai kepercayaan terhadap penyakit</label></label>
                                            <input type="text" id="v_21" name="v_21" style="width: 100px;">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2" rowspan="3">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_021" id="t_021_tidaknyeri" value="0">
                                                <label class="form-check-label" for="t_021_tidaknyeri">Tidak nyeri</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            : 0
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_021" id="t_021_ringan" value="1">
                                                <label class="form-check-label" for="t_021_ringan">Ringan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            : 1-3
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_021" id="t_021_sedang" value="2">
                                                <label class="form-check-label" for="t_021_sedang">Sedang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            : 4-6
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_021" id="t_021_berat" value="3">
                                                <label class="form-check-label" for="t_021_berat">Berat</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            : 7-10
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_022" id="t_022_akut" value="4">
                                                <label class="form-check-label" for="t_022_akut">Akut</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="t_022" id="t_022_kronis" value="5">
                                                <label class="form-check-label" for="t_022_kronis">Kronis</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2" rowspan="3">
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="v_22">Lokasi</label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea id="v_22" name="v_22" style="width: 150px; height: 70px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="v_23">Frekuensi</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="v_23" name="v_23" style="width: 150px;">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="v_24">Karakteristik</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="v_24" name="v_24" style="width: 150px;">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="v_25">Durasi</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="v_25" name="v_25" style="width: 150px;">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Riwayat Gangguan Jiwa</td>
                                <td colspan="3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidakada" value="0" onclick="fungsi5_disabled()">
                                        <label class="form-check-label" for="t_023_tidakada"> Tidak ada </label>&nbsp;
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1" onclick="fungsi5_enable()">
                                        <label class="form-check-label" for="t_023_ada"> Ada </label>
                                        <input type="text" id="v_26" name="v_26" style="width: 200px;" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Trauma Psikis</td>
                                <td colspan="3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_024" id="t_024_tidakada" value="0">
                                        <label class="form-check-label" for="t_024_tidakada"> Tidak ada </label>&nbsp;
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_024" id="t_024_aniaya" value="1">
                                        <label class="form-check-label" for="t_024_aniaya"> Aniaya fisik/psikologi/KDRT/kriminal </label>
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
                                                <input class="form-check-input" type="radio" name="t_025" id="t_025_baik" value="0">
                                                <label class="form-check-label" for="t_025_baik"> Baik</label>&nbsp;
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="t_025" id="t_025_tidak" value="1">
                                                <label class="form-check-label" for="t_025_tidak"> Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Tempat tinggal:
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="t_026" id="t_026_rumahsendiri" value="0" onclick="fungsi6_disabled()">
                                                <label class="form-check-label" for="t_026_rumahsendiri"> Rumah sendiri</label>&nbsp;
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="t_026" id="t_026_input" value="1" onclick="fungsi6_enable()">
                                                <input type="text" id="v_27" name="v_27" style="width: 150px;" disabled>
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
                                            <input class="form-check-input" type="radio" name="t_027" id="t_027_ya" value="0">
                                            <label class="form-check-label" for="t_027_ya"> Ya</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="t_027" id="t_027_tidak" value="1">
                                            <label class="form-check-label" for="t_027_tidak"> Tidak</label>
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
                                                    <label for="v_28">Pekerjaan: </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" id="v_28" name="v_28" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Hambatan ekonomi: </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="t_028" id="t_028_tidak" value="0" onclick="fungsi7_disabled()">
                                                        <label class="form-check-label" for="t_028_tidak"> Tidak </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="t_028" id="t_028_ya" value="1" onclick="fungsi7_enable()">
                                                        <label class="form-check-label" for="t_028_ya"> Ya </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" id="v_29" name="v_29" style="width: 100%;" disabled>
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
                                            <label for="">Membutuhkan konseling Spiritual/Agama:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="t_029" id="t_029_tidak" value="0" onclick="fungsi8_disabled()">
                                                <label class="form-check-label" for="t_029_tidak"> Tidak </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="t_029" id="t_029_ya" value="1" onclick="fungsi8_enable()">
                                                <label class="form-check-label" for="t_029_ya"> Ya </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" id="v_30" name="v_30" style="width: 100%;" disabled>
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
                                                        <input class="form-check-input" type="checkbox" name="t_031" id="t_031_pola">
                                                        <label class="form-check-label" for="t_031_pola">Pola napas tidak efektif </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_031" id="t_031_pembersihan">
                                                        <label class="form-check-label" for="t_031_pembersihan">Pembersihan jalan napas tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_031" id="t_031_gangguan">
                                                        <label class="form-check-label" for="t_031_gangguan">Gangguan pertukaran gas</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <b>Sirkulasi Cardovasculer</b><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_032" id="t_032_gangguan">
                                                        <label class="form-check-label" for="t_032_gangguan">Gangguan perfusi jaringan perifer/serebral tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_032" id="t_032_penurunan">
                                                        <label class="form-check-label" for="t_032_penurunan">Penurunan curah jantung</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_032" id="t_032_resiko">
                                                        <label class="form-check-label" for="t_032_resiko">Resiko pendarahan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <b>Nutrisi dan cairan</b><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_033" id="t_033_hipervolmia">
                                                        <label class="form-check-label" for="t_033_hipervolmia">Hipervolemia/hipovolemia</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_033" id="t_033_berkurangnya">
                                                        <label class="form-check-label" for="t_033_berkurangnya">Berkurangnya cairan tubuh</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_033" id="t_033_devisit">
                                                        <label class="form-check-label" for="t_033_devisit">Devisit nutrisi/resiko devisit nutrisi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_033" id="t_033_resiko">
                                                        <label class="form-check-label" for="t_033_resiko">Resiko syok</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <b>Nyeri dan kenyamanan</b><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_034" id="t_034_nyeri">
                                                        <label class="form-check-label" for="t_034_nyeri">Nyeri akut/kronis</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_034" id="t_034_gangguan">
                                                        <label class="form-check-label" for="t_034_gangguan">Gangguan rasa nyaman</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_034" id="t_034_resiko">
                                                        <label class="form-check-label" for="t_034_resiko">Resiko syok</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_034" id="t_034_input" onclick="fungsi9()">
                                                        <input type="text" id="v_31" name="v_31" style="width: 200px;" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <b>Keamanan dan proteksi</b><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_hipotermia">
                                                        <label class="form-check-label" for="t_035_hipotermia">Hipotermia/hipertermia</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_resikoinfeksi">
                                                        <label class="form-check-label" for="t_035_resikoinfeksi">Resiko infeksi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_resikocedera">
                                                        <label class="form-check-label" for="t_035_resikocedera">Resiko cedera / jatuh</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_resiko">
                                                        <label class="form-check-label" for="t_035_resiko">Resiko / aktual gangguan interritas kulit</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_input1" onclick="fungsi10()">
                                                        <input type="text" id="v_32" name="v_32" style="width: 200px;" disabled>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_035" id="t_035_input2" onclick="fungsi11()">
                                                        <input type="text" id="v_33" name="v_33" style="width: 200px;" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <b>Psikologis</b><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="t_036" id="t_036_resiko">
                                                        <label class="form-check-label" for="t_036_resiko">Resiko mencederai diri sendiri dan lingkungan</label>
                                                    </div>
                                                    <div class="form-check mb-5">
                                                        <input class="form-check-input" type="checkbox" name="t_036" id="t_036_input1" onclick="fungsi12()">
                                                        <input type="text" id="v_34" name="v_34" style="width: 200px;" disabled>
                                                    </div>
                                                    <div class="form-check mb-5">
                                                        <input class="form-check-input" type="checkbox" name="t_036" id="t_036_input2" onclick="fungsi13()">
                                                        <input type="text" id="v_35" name="v_35" style="width: 200px;" disabled>
                                                    </div>
                                                    <div class="form-check mb-5">
                                                        <input class="form-check-input" type="checkbox" name="t_036" id="t_036_input3" onclick="fungsi14()">
                                                        <input type="text" id="v_36" name="v_36" style="width: 200px;" disabled>
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
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_lakukanmanuver">
                                                <label class="form-check-label" for="t_037_lakukanmanuver">Lakukan manuver jaw trust, head thin chin lift</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_keluarkanbendaasing">
                                                <label class="form-check-label" for="t_037_keluarkanbendaasing">Keluarkan benda asing, lakukan section</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_berikanbantuan">
                                                <label class="form-check-label" for="t_037_berikanbantuan">Berikan bantuan napas < Bag valve mask</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_ajarkan">
                                                <label class="form-check-label" for="t_037_ajarkan">Ajarkan teknik batuk efektif / nafas dalam</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_berikanposisi">
                                                <label class="form-check-label" for="t_037_berikanposisi">Berikan posisi miring mantap pada pasien tidak sadar</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_observasi">
                                                <label class="form-check-label" for="t_037_observasi">Observasi frekuensi, irama dan kedalaman pernapasan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_berikanoksigen">
                                                <label class="form-check-label" for="t_037_berikanoksigen">Berikan oksigen sesuai kebutuhan melauali nasal kanul, masker oksigen</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_monitorsaturasi">
                                                <label class="form-check-label" for="t_037_monitorsaturasi">Monitor saturasi okigen</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_monitorvital">
                                                <label class="form-check-label" for="t_037_monitorvital">Monitor tanda-tanda vital secara periodik/saturasi oksigen</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_monitorkesadaran">
                                                <label class="form-check-label" for="t_037_monitorkesadaran">Monitor tingkat kesadaran (GCS) secara periodik</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_tinggikankepala">
                                                <label class="form-check-label" for="t_037_tinggikankepala">Tinggikan kepala 15-30 jika tidak ada kontra indikasi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_berikanposisisemi">
                                                <label class="form-check-label" for="t_037_berikanposisisemi">Berikan posisi semi fowler bila tidak ada kontra indikasi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_pasanginfus">
                                                <label class="form-check-label" for="t_037_pasanginfus">Pasang infus, ambil sampel darah, cek AGD</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_kolaborasi">
                                                <label class="form-check-label" for="t_037_kolaborasi">Kolaborasi pemberian cairan intravena, ciran koloid, darah, produk darah/obat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_berikancairan">
                                                <label class="form-check-label" for="t_037_berikancairan">Berikan cairan intravena, cairan koloid, darah, produk darah</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_pasangcateter">
                                                <label class="form-check-label" for="t_037_pasangcateter">Pasang cateter urin untuk monitor cairan keluar</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_lakukanperawatan">
                                                <label class="form-check-label" for="t_037_lakukanperawatan">Lakukan perawatan luka</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_kajinyeri">
                                                <label class="form-check-label" for="t_037_kajinyeri">Kaji nyeri/tanda-tanda infeksi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_037" id="t_037_input" onclick="fungsi15()">
                                                <input type="text" id="v_37" name="v_37" style="width: 300px;" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hambatan pelayanan<br>komunikasi, edukasi</td>
                                <td colspan="5" style="vertical-align: middle;">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_tidak" value="0" onclick="fungsi16_disabled()" checked>
                                        <label class="form-check-label" for="t_038_tidak"> Tidak </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_ada" value="1" onclick="fungsi16_enable()">
                                        <label class="form-check-label" for="t_038_ada"> Ada: </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_pendengaran">
                                        <label class="form-check-label" for="t_039_pendengaran"> Pendengaran </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_penglihatan">
                                        <label class="form-check-label" for="t_039_penglihatan"> Penglihatan </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_kognitif">
                                        <label class="form-check-label" for="t_039_kognitif"> Kognitif </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_fisik">
                                        <label class="form-check-label" for="t_039_fisik"> Fisik </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_budaya">
                                        <label class="form-check-label" for="t_039_budaya"> Budaya </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_emosi">
                                        <label class="form-check-label" for="t_039_emosi"> Emosi </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input hambatan" type="checkbox" name="t_039" id="t_039_bahasa">
                                        <label class="form-check-label" for="t_039_bahasa"> Bahasa </label>
                                    </div>
                                </td>
                                <td colspan="2" rowspan="2">
                                    <div class="row">
                                        <div class="col">
                                            <label for="v_38">Jam selesai pengkajian</label>
                                            <input type="time" id="v_38" name="v_38" style="width: 100px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table style="justify-content: center; width: 100%;">
                                            <tr>
                                                <td style="text-align: center; width: 50%;">
                                                    <label for="v_39" style="text-align: center;">Perawat Pengkaji (PPJA)</label>
                                                    <br>
                                                    <div id="sig"></div>
                                                    <br>( <input type="text" id="v_39" name="v_39" style="width: 150px;"> )
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
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_manajemennyeri">
                                                <label class="form-check-label" for="t_040_manajemennyeri">Manajemen nyeri</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_nutrisi">
                                                <label class="form-check-label" for="t_040_nutrisi">Nutrisi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_perawatan">
                                                <label class="form-check-label" for="t_040_perawatan">Perawatan luka</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_jaminan">
                                                <label class="form-check-label" for="t_040_jaminan">Jaminan finansial</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_input" onclick="fungsi17()">
                                                <input type="text" id="v_40" name="v_40" style="width: 300px;" disabled>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="t_040" id="t_040_lainlain" onclick="fungsi18()">
                                                <label class="form-check-label" for="t_040_lainlain">Lain-lain</label>
                                                <input type="text" id="v_41" name="v_41" style="width: 200px;" disabled>
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
        <?php endforeach; ?>
    </div>
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
            var sig = $('#sig').signature();
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
                $("#v_06").attr("disabled", true);
                $("#v_06").val("");
            } else {
                $("#v_06").removeAttr("disabled");
            }
        }

        function fungsi1_enable() {
            $("#v_06").attr("disabled", true);
            if (this.click) {
                $("#v_06").removeAttr("disabled");
                $("#v_06").focus();
            } else {
                $("#v_06").attr("disabled", true);
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
                $("#v_07").attr("disabled", true);
                $("#v_07").val("");
            } else {
                $("#v_07").removeAttr("disabled");
            }
        }

        function fungsi2_enable() {
            if (this.click) {
                $("#v_07").removeAttr("disabled");
                $("#v_07").focus();
            } else {
                $("#v_07").attr("disabled", true);
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
                $("#Riwayat_alergi").attr("disabled", true);
                $("#Riwayat_alergi").val("");
            } else {
                $("#Riwayat_alergi").removeAttr("disabled");
            }
        }

        function fungsi3_enable() {
            if (this.click) {
                $("#Riwayat_alergi").removeAttr("disabled");
                $("#Riwayat_alergi").focus();
            } else {
                $("#Riwayat_alergi").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4() {
            if ($("#t_020_tidakada").is(":checked")) {
                $("#t_020_merokok, #t_020_minumalkohol, #t_020_input").attr("disabled", true);
                $("#t_020_merokok, #t_020_minumalkohol, #t_020_input").prop("checked", false);
                $("#v_20").attr("disabled", true);
                $("#v_20").val("");
            } else {
                $("#t_020_merokok, #t_020_minumalkohol, #t_020_input").removeAttr("disabled");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4_input() {
            if ($("#t_020_input").is(":checked")) {
                $("#v_20").removeAttr("disabled");
                $("#v_20").focus();
            } else {
                $("#v_20").attr("disabled", true);
                $("#v_20").val("");
            }
        }
    </script>
    <script>
        $(function() {
            fungsi5_disabled();
            $("#t_023_tidakada").click(fungsi5_disabled);
        });
        $(function() {
            fungsi5_enable();
            $("#t_023_ada").click(fungsi5_enable);
        });

        function fungsi5_disabled() {
            if (this.click) {
                $("#v_26").attr("disabled", true);
                $("#v_26").val("");
            } else {
                $("#v_26").removeAttr("disabled");
            }
        }

        function fungsi5_enable() {
            if (this.click) {
                $("#v_26").removeAttr("disabled");
                $("#v_26").focus();
            } else {
                $("#v_26").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi6_disabled();
            $("#t_026_rumahsendiri").click(fungsi6_disabled);
        });
        $(function() {
            fungsi6_enable();
            $("#t_026_input").click(fungsi6_enable);
        });

        function fungsi6_disabled() {
            if (this.click) {
                $("#v_27").attr("disabled", true);
                $("#v_27").val("");
            } else {
                $("#v_27").removeAttr("disabled");
            }
        }

        function fungsi6_enable() {
            if (this.click) {
                $("#v_27").removeAttr("disabled");
                $("#v_27").focus();
            } else {
                $("#v_27").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi7_disabled();
            $("#t_028_tidak").click(fungsi7_disabled);
        });
        $(function() {
            fungsi7_enable();
            $("#t_028_ya").click(fungsi7_enable);
        });

        function fungsi7_disabled() {
            if (this.click) {
                $("#v_29").attr("disabled", true);
                $("#v_29").val("");
            } else {
                $("#v_29").removeAttr("disabled");
            }
        }

        function fungsi7_enable() {
            if (this.click) {
                $("#v_29").removeAttr("disabled");
                $("#v_29").focus();
            } else {
                $("#v_29").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi8_disabled();
            $("#t_029_tidak").click(fungsi8_disabled);
        });
        $(function() {
            fungsi8_enable();
            $("#t_029_ya").click(fungsi8_enable);
        });

        function fungsi8_disabled() {
            if (this.click) {
                $("#v_30").attr("disabled", true);
                $("#v_30").val("");
            } else {
                $("#v_30").removeAttr("disabled");
            }
        }

        function fungsi8_enable() {
            if (this.click) {
                $("#v_30").removeAttr("disabled");
                $("#v_30").focus();
            } else {
                $("#v_30").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#t_034_input").is(":checked")) {
                $("#v_31").removeAttr("disabled");
                $("#v_31").focus();
            } else {
                $("#v_31").attr("disabled", true);
                $("#v_31").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi10() {
            if ($("#t_035_input1").is(":checked")) {
                $("#v_32").removeAttr("disabled");
                $("#v_32").focus();
            } else {
                $("#v_32").attr("disabled", true);
                $("#v_32").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi11() {
            if ($("#t_035_input2").is(":checked")) {
                $("#v_33").removeAttr("disabled");
                $("#v_33").focus();
            } else {
                $("#v_33").attr("disabled", true);
                $("#v_33").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi12() {
            if ($("#t_036_input1").is(":checked")) {
                $("#v_34").removeAttr("disabled");
                $("#v_34").focus();
            } else {
                $("#v_34").attr("disabled", true);
                $("#v_34").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi13() {
            if ($("#t_036_input2").is(":checked")) {
                $("#v_35").removeAttr("disabled");
                $("#v_35").focus();
            } else {
                $("#v_35").attr("disabled", true);
                $("#v_35").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi14() {
            if ($("#t_036_input3").is(":checked")) {
                $("#v_36").removeAttr("disabled");
                $("#v_36").focus();
            } else {
                $("#v_36").attr("disabled", true);
                $("#v_36").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi15() {
            if ($("#t_037_input").is(":checked")) {
                $("#v_37").removeAttr("disabled");
                $("#v_37").focus();
            } else {
                $("#v_37").attr("disabled", true);
                $("#v_37").val("");
            }
        }
    </script>
    <script>
        $(function() {
            fungsi16_disabled();
            $("#t_038_tidak").click(fungsi16_disabled);
        });
        $(function() {
            fungsi16_enable();
            $("#t_038_ada").click(fungsi16_enable);
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
            if ($("#t_040_input").is(":checked")) {
                $("#v_40").removeAttr("disabled");
                $("#v_40").focus();
            } else {
                $("#v_40").attr("disabled", true);
                $("#v_40").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi18() {
            if ($("#t_040_lainlain").is(":checked")) {
                $("#v_41").removeAttr("disabled");
                $("#v_41").focus();
            } else {
                $("#v_41").attr("disabled", true);
                $("#v_41").val("");
            }
        }
    </script>
    <script>
        $("#tension_upper, #tension_bellow, #nadi, #nafas, #saturasi, #temperature, #weight, #height").keydown(function(e) {
            !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
        });
    </script>
</body>

</html>