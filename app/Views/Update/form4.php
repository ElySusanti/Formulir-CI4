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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir/form4" role="button">
        <i class="bi bi-arrow-left"> Back</i>
    </a>
    <div class="container-fluid mt-3" style="font-family: 'Arial Narrow';">
        <form action="<?= base_url('formulir/update/' . $detail['id']); ?>" method="post" autocomplete="off">
            <?= csrf_field(); ?>
            <input type="hidden" id="FORM" name="FORM" value="F4">
            <input type="hidden" id="id" name="id" value="<?= $detail['id']; ?>">
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
                                    : <input type="text" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 150px;" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="THENAME">Nama Lengkap</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="text" id="THENAME" name="THENAME" style="width: 150px;" value="<?= $detail['THENAME']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="DATE_OF_BIRTH">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 150px;" value="" readonly>
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
                            <td colspan="2"><label for="V_01">Tanggal, </label><label for="V_02">Jam Pengkajian</label></td>
                            <td colspan="2" style="width: 28%;">Status Peminjaman</td>
                            <td colspan="2" style="width: 20%;">Sumber Data</td>
                            <td colspan="2" style="width: 24%;"><label for="V_05">Penanggung Jawab, </label><label for="V_06">Hubungan</label></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="2">
                                <input type="date" id="V_01" name="V_01" style="width: 150px;" value="<?= $detail['V_01']; ?>">,
                                <input type="time" id="V_02" name="V_02" style="width: 100px;" value="<?= $detail['V_02']; ?>">
                            </td>
                            <td colspan="2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_01" id="T_01_umum" <?= ($detail['T_01'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi1_disabled()">
                                    <label class="form-check-label" for="T_01_umum"> Umum</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_01" id="T_01_bpjs" <?= ($detail['T_01'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi1_disabled()">
                                    <label class="form-check-label" for="T_01_bpjs"> BPJS</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_01" id="T_01_input" <?= ($detail['T_01'] == "2" ? 'checked' : ''); ?> value="2" onclick="fungsi1_enable()">
                                    <label class="form-check-label"> </label>
                                    <input type="text" id="V_03" name="V_03" style="width: 100px;" value="<?= $detail['V_03']; ?>" disabled>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_02" id="T_02_pasien" <?= ($detail['T_02'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi2_disabled()">
                                    <label class="form-check-label" for="T_02_pasien"> Pasien</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_02" id="T_02_keluarga" <?= ($detail['T_02'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi2_enable()">
                                    <label class="form-check-label" for="T_02_keluarga"> Keluarga/</label>
                                    <input type="text" id="V_04" name="V_04" style="width: 100px;" value="<?= $detail['V_04']; ?>" disabled>
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="text" id="V_05" name="V_05" style="width: 150px;" value="<?= $detail['V_05']; ?>">,
                                <input type="text" id="V_06" name="V_06" style="width: 150px;" value="<?= $detail['V_06']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" style="height: 200px"><label for="ANAMNASE">Keluhan utama </label>
                                <label for="ANAMNASE" style="font-style: italic;">(Riwayat kejadian):</label><br>
                                <textarea name="ANAMNASE" id="ANAMNASE" style="width: 100%; height: 180px;"><?= $detail['ANAMNASE']; ?></textarea>
                            </td>
                            <td style="width: 10%;"><b>Status fungsional</b></td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_03" id="T_03_mandiri" <?= ($detail['T_03'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_03_mandiri"> Mandiri</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_03" id="T_03_ketergantungan" <?= ($detail['T_03'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_03_ketergantungan"> Ketergantungan sebagian/Total</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Resiko jatuh</b></td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_04" id="T_04_tidakberesiko" <?= ($detail['T_04'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_04_tidakberesiko"> Tidak beresiko</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_04" id="T_04_resikorendah" <?= ($detail['T_04'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_04_resikorendah"> Resiko rendah</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_04" id="T_04_resikotinggi" <?= ($detail['T_04'] == "2" ? 'checked' : ''); ?> value="2">
                                    <label class="form-check-label" for="T_04_resikotinggi"> Resiko tinggi</label>&nbsp;
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
                                        <input type="range" name="T_05" id="T_05" min="0" max="10" step="1" style="width: 95%;" value="<?= $detail['T_05']; ?>">
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
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_sakitringan" <?= ($detail['T_06'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_06_sakitringan"> Sakit ringan</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_sakitsedang" <?= ($detail['T_06'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_06_sakitsedang"> Sakit sedang</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_sakitberat" <?= ($detail['T_06'] == "2" ? 'checked' : ''); ?> value="2">
                                    <label class="form-check-label" for="T_06_sakitberat"> Sakit berat</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Riwayat Alergi</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_07" id="T_07_tidakada" <?= ($detail['T_07'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi3_disabled()">
                                    <label class="form-check-label" for="T_07_tidakada"> Tidak ada</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_07" id="T_07_ada" <?= ($detail['T_07'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi3_enable">
                                    <label class="form-check-label" for="T_07_ada"> Ada</label>
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
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td style="width: 10%;">NILAI</td>
                                    </tr>
                                    <tr>
                                        <td>Wajah</td>
                                        <td>Tersenyum, tidak ada ekspresi khusus</td>
                                        <td>Terkadang meringis/menarik diri</td>
                                        <td>Sering menggetarkan dagu dan mengatupkan rahang</td>
                                        <td>
                                            <select type="number" class="number" name="T_08" id="T_08" onchange="myFunction()" style="height: 30px; width: 35px;">
                                                <option selected><?= $detail['T_08']; ?></option>
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
                                            <select type="number" class="number" name="T_09" id="T_09" onchange="myFunction()" style="height: 30px; width: 35px;">
                                                <option selected><?= $detail['T_09']; ?></option>
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
                                            <select type="number" class="number" name="T_010" id="T_010" onchange="myFunction()" style="height: 30px; width: 35px;">
                                                <option selected><?= $detail['T_010']; ?></option>
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
                                            <select type="number" class="number" name="T_011" id="T_011" onchange="myFunction()" style="height: 30px; width: 35px;">
                                                <option selected><?= $detail['T_011']; ?></option>
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
                                            <select type="number" class="number" name="T_012" id="T_012" onchange="myFunction()" style="height: 30px; width: 35px;">
                                                <option selected><?= $detail['T_012']; ?></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td colspan="4">TOTAL SKOR</td>
                                        <td><input type="number" name="T_013" id="T_013" style="width: 40px;" value="<?= $detail['T_013']; ?>" readonly></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Jalan Nafas (A)</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_014" id="T_014_bebas" <?= ($detail['T_014'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_014_bebas"> Bebas</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_014" id="T_014_sumbatan" <?= ($detail['T_014'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_014_sumbatan"> Sumbatan (Oedema/Benda Asing/Cairan)</label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_014" id="T_014_terintubasi" <?= ($detail['T_014'] == "2" ? 'checked' : ''); ?> value="2">
                                    <label class="form-check-label" for="T_014_terintubasi"> Terintubasi</label>&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Pernafasan (B)</td>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_015" id="T_015_normal" <?= ($detail['T_015'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_015_normal"> Normal</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_015" id="T_015_hentinafas" <?= ($detail['T_015'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_015_hentinafas"> Henti nafas</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_015" id="T_015_dsistresringan" <?= ($detail['T_015'] == "2" ? 'checked' : ''); ?> value="2">
                                            <label class="form-check-label" for="T_015_dsistresringan"> Dsistres pernafasan ringan</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_015" id="T_015_dsistressedang" <?= ($detail['T_015'] == "3" ? 'checked' : ''); ?> value="3">
                                            <label class="form-check-label" for="T_015_dsistressedang"> Dsistres pernafasan sedang</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_015" id="T_015_dsistresberat" <?= ($detail['T_015'] == "4" ? 'checked' : ''); ?> value="4">
                                            <label class="form-check-label" for="T_015_dsistresberat"> Dsistres pernafasan berat</label>&nbsp;
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
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_normal" <?= ($detail['T_016'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_016_normal"> Normal</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_hentijantung" <?= ($detail['T_016'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_016_hentijantung"> Henti jantung</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_bradicardi" <?= ($detail['T_016'] == "2" ? 'checked' : ''); ?> value="2">
                                            <label class="form-check-label" for="T_016_bradicardi"> Bradicardi</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_taciadi" <?= ($detail['T_016'] == "3" ? 'checked' : ''); ?> value="3">
                                            <label class="form-check-label" for="T_016_taciadi"> Tacicardi</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_akral" <?= ($detail['T_016'] == "4" ? 'checked' : ''); ?> value="4">
                                            <label class="form-check-label" for="T_016_akral"> Akral dingin</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_016" id="T_016_sianosisi" <?= ($detail['T_016'] == "5" ? 'checked' : ''); ?> value="5">
                                            <label class="form-check-label" for="T_016_sianosisi"> Sianosisi</label>&nbsp;
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
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_14-15" <?= ($detail['T_017'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_017_14-15"> 14-15 Composmentis</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_12-13" <?= ($detail['T_017'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_017_12-13"> 12-13 Apastis</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_10-11" <?= ($detail['T_017'] == "2" ? 'checked' : ''); ?> value="2">
                                            <label class="form-check-label" for="T_017_10-11"> 10-11 Delirium</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_7-9" <?= ($detail['T_017'] == "3" ? 'checked' : ''); ?> value="3">
                                            <label class="form-check-label" for="T_017_7-9"> 7-9 Samnolen</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_5-6" <?= ($detail['T_017'] == "4" ? 'checked' : ''); ?> value="4">
                                            <label class="form-check-label" for="T_017_5-6"> 5-6 Sopor</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_017" id="T_017_3-4" <?= ($detail['T_017'] == "5" ? 'checked' : ''); ?> value="5">
                                            <label class="form-check-label" for="T_017_3-4"> 3-4 Coma</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Eksposur</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_018" id="T_018_TAK" <?= ($detail['T_018'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_018_TAK"> TAK </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_018" id="T_018_paraperesis" <?= ($detail['T_018'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_018_paraperesis"> Paraperesis </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_018" id="T_018_parase" <?= ($detail['T_018'] == "2" ? 'checked' : ''); ?> value="2">
                                    <label class="form-check-label" for="T_018_parase"> Parase </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_018" id="T_018_plegi" <?= ($detail['T_018'] == "3" ? 'checked' : ''); ?> value="3">
                                    <label class="form-check-label" for="T_018_plegi"> Plegi </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_018" id="T_018_perdarahan" <?= ($detail['T_018'] == "4" ? 'checked' : ''); ?> value="4">
                                    <label class="form-check-label" for="T_018_perdarahan"> Pendarahan/fraktur</label>
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 40px; vertical-align: middle;">
                            <td style="vertical-align: middle;">Status Psikologi</td>
                            <td colspan="3">
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_019" id="T_019_stabil" <?= ($detail['T_019'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_019_stabil"> Stabil/tenang</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_019" id="T_019_cemas" <?= ($detail['T_019'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_019_cemas"> Cemas/takut/sedih/depresi</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_019" id="T_019_marah" <?= ($detail['T_019'] == "2" ? 'checked' : ''); ?> value="2">
                                            <label class="form-check-label" for="T_019_marah"> Marah</label>&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_019" id="T_019_potensial" <?= ($detail['T_019'] == "3" ? 'checked' : ''); ?> value="3">
                                            <label class="form-check-label" for="T_019_potensial"> Potensial bunuh diri</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_019" id="T_019_mencederai" <?= ($detail['T_019'] == "4" ? 'checked' : ''); ?> value="4">
                                            <label class="form-check-label" for="T_019_mencederai"> Mencederai orang lain/lingkungan</label>&nbsp;
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
                                            <input class="form-check-input" type="checkbox" name="T_020" id="T_020" <?= ($detail['T_020'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi4()">
                                            <label class="form-check-label" for="T_020"> Tidak ada </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="T_021" id="T_021" <?= ($detail['T_021'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_021"> Merokok </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="T_022" id="T_022" <?= ($detail['T_022'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_022"> Minum alkohol </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="T_023" id="T_023" <?= ($detail['T_023'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi4_input()">
                                            <input type="text" id="V_07" name="V_07" style="width: 100px;" value="<?= $detail['V_07']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label><label for="V_08">Nilai kepercayaan terhadap penyakit</label></label>
                                        <input type="text" id="V_08" name="V_08" style="width: 100px;" value="<?= $detail['V_08']; ?>">
                                    </div>
                                </div>
                            </td>
                            <td colspan="2" rowspan="3">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_024" id="T_024_tidaknyeri" <?= ($detail['T_024'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_024_tidaknyeri">Tidak nyeri</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 0
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_024" id="T_024_ringan" <?= ($detail['T_024'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_024_ringan">Ringan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 1-3
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_024" id="T_024_sedang" <?= ($detail['T_024'] == "2" ? 'checked' : ''); ?> value="2">
                                            <label class="form-check-label" for="T_024_sedang">Sedang</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 4-6
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_024" id="T_024_berat" <?= ($detail['T_024'] == "3" ? 'checked' : ''); ?> value="3">
                                            <label class="form-check-label" for="T_024_berat">Berat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        : 7-10
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_025" id="T_025_akut" <?= ($detail['T_025'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_025_akut">Akut</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="T_025" id="T_025_kronis" <?= ($detail['T_025'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_025_kronis">Kronis</label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2" rowspan="3">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="V_09">Lokasi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea id="V_09" name="V_09" style="width: 150px; height: 70px;"><?= $detail['V_09']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="V_10">Frekuensi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="V_10" name="V_10" style="width: 150px;" value="<?= $detail['V_10']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="V_11">Karakteristik</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="V_11" name="V_11" style="width: 150px;" value="<?= $detail['V_11']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="V_12">Durasi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="V_12" name="V_12" style="width: 150px;" value="<?= $detail['V_12']; ?>">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Riwayat Gangguan Jiwa</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_026" id="T_026_tidakada" <?= ($detail['T_026'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi5_disabled()">
                                    <label class="form-check-label" for="T_026_tidakada"> Tidak ada </label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_026" id="T_026_ada" <?= ($detail['T_026'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi5_enable()">
                                    <label class="form-check-label" for="T_026_ada"> Ada </label>
                                    <input type="text" id="V_13" name="V_13" style="width: 200px;" value="<?= $detail['V_13']; ?>" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle;">
                            <td>Trauma Psikis</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_027" id="T_027_tidakada" <?= ($detail['T_027'] == "0" ? 'checked' : ''); ?> value="0">
                                    <label class="form-check-label" for="T_027_tidakada"> Tidak ada </label>&nbsp;
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_027" id="T_027_aniaya" <?= ($detail['T_027'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="T_027_aniaya"> Aniaya fisik/psikologi/KDRT/kriminal </label>
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
                                            <input class="form-check-input" type="radio" name="T_028" id="T_028_baik" <?= ($detail['T_028'] == "0" ? 'checked' : ''); ?> value="0">
                                            <label class="form-check-label" for="T_028_baik"> Baik</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_028" id="T_028_tidak" <?= ($detail['T_028'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="T_028_tidak"> Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Tempat tinggal:
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_029" id="T_029_rumahsendiri" <?= ($detail['T_029'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi6_disabled()">
                                            <label class="form-check-label" for="T_029_rumahsendiri"> Rumah sendiri</label>&nbsp;
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_029" id="T_029_input" <?= ($detail['T_029'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi6_enable()">
                                            <input type="text" id="V_14" name="V_14" style="width: 150px;" value="<?= $detail['V_14']; ?>" disabled>
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
                                        <input class="form-check-input" type="radio" name="T_030" id="T_030_ya" <?= ($detail['T_030'] == "0" ? 'checked' : ''); ?> value="0">
                                        <label class="form-check-label" for="T_030_ya"> Ya</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_030" id="T_030_tidak" <?= ($detail['T_030'] == "1" ? 'checked' : ''); ?> value="1">
                                        <label class="form-check-label" for="T_030_tidak"> Tidak</label>
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
                                                <label for="V_15">Pekerjaan: </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="V_15" name="V_15" style="width: 100%;" value="<?= $detail['V_15']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col">
                                                <label>Hambatan ekonomi: </label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="T_031" id="T_031_tidak" <?= ($detail['T_031'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi7_disabled()">
                                                    <label class="form-check-label" for="T_031_tidak"> Tidak </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="T_031" id="T_031_ya" <?= ($detail['T_031'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi7_enable()">
                                                    <label class="form-check-label" for="T_031_ya"> Ya </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="V_16" name="V_16" style="width: 100%;" value="<?= $detail['V_16']; ?>" disabled>
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
                                            <input class="form-check-input" type="radio" name="T_032" id="T_032_tidak" <?= ($detail['T_032'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi8_disabled()">
                                            <label class="form-check-label" for="T_032_tidak"> Tidak </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_032" id="T_032_ya" <?= ($detail['T_032'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi8_enable()">
                                            <label class="form-check-label" for="T_032_ya"> Ya </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="V_17" name="V_17" style="width: 100%;" value="<?= $detail['V_17']; ?>" disabled>
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
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_ya" <?= ($detail['T_033'] == "0" ? 'checked' : ''); ?> value="0">
                                        <label class="form-check-label" for="T_033_ya"> Ya</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_tidak" <?= ($detail['T_033'] == "1" ? 'checked' : ''); ?> value="1">
                                        <label class="form-check-label" for="T_033_tidak"> Tidak</label>
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
                                                    <input class="form-check-input" type="checkbox" name="T_034" id="T_034" <?= ($detail['T_034'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_034">Pola napas tidak efektif </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_035" id="T_035" <?= ($detail['T_035'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_035">Pembersihan jalan napas tidak efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_036" id="T_036" <?= ($detail['T_036'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_036">Gangguan pertukaran gas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Sirkulasi Cardovasculer</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_037" id="T_037" <?= ($detail['T_037'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_037">Gangguan perfusi jaringan perifer/serebral tidak efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_038" id="T_038" <?= ($detail['T_038'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_038">Penurunan curah jantung</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_039" id="T_039" <?= ($detail['T_039'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_039">Resiko pendarahan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Nutrisi dan cairan</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_040" id="T_040" <?= ($detail['T_040'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_040">Hipervolemia/hipovolemia</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_041" id="T_041" <?= ($detail['T_041'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_041">Berkurangnya cairan tubuh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_042" id="T_042" <?= ($detail['T_042'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_042">Devisit nutrisi/resiko devisit nutrisi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_043" id="T_043" <?= ($detail['T_043'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_043">Resiko syok</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Nyeri dan kenyamanan</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_044" id="T_044" <?= ($detail['T_044'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_044">Nyeri akut/kronis</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_045" id="T_045" <?= ($detail['T_045'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_045">Gangguan rasa nyaman</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_046" id="T_046" <?= ($detail['T_046'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_046">Resiko syok</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_047" id="T_047" <?= ($detail['T_047'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi9()">
                                                    <input type="text" id="V_18" name="V_18" style="width: 200px;" value="<?= $detail['V_18']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Keamanan dan proteksi</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_048" id="T_048" <?= ($detail['T_048'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_048">Hipotermia/hipertermia</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_049" id="T_049" <?= ($detail['T_049'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_049">Resiko infeksi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="T_050" id="T_050" <?= ($detail['T_050'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="T_050">Resiko cedera / jatuh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_051" id="t_051" <?= ($detail['t_051'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="t_051">Resiko / aktual gangguan interritas kulit</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_052" id="t_052" <?= ($detail['t_052'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi10()">
                                                    <input type="text" id="V_19" name="V_19" style="width: 200px;" value="<?= $detail['V_19']; ?>" disabled>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_053" id="t_053" <?= ($detail['t_053'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi11()">
                                                    <input type="text" id="V_20" name="V_20" style="width: 200px;" value="<?= $detail['V_20']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <b>Psikologis</b><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="t_054" id="t_054" <?= ($detail['t_054'] == "1" ? 'checked' : ''); ?> value="1">
                                                    <label class="form-check-label" for="t_054">Resiko mencederai diri sendiri dan lingkungan</label>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_055" id="t_055" <?= ($detail['t_055'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi12()">
                                                    <input type="text" id="V_21" name="V_21" style="width: 200px;" value="<?= $detail['V_21']; ?>" disabled>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_056" id="t_056" <?= ($detail['t_056'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi13()">
                                                    <input type="text" id="V_22" name="V_22" style="width: 200px;" value="<?= $detail['V_22']; ?>" disabled>
                                                </div>
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" name="t_057" id="t_057" <?= ($detail['t_057'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi14()">
                                                    <input type="text" id="V_23" name="V_23" style="width: 200px;" value="<?= $detail['V_23']; ?>" disabled>
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
                                            <input class="form-check-input" type="checkbox" name="t_058" id="t_058" <?= ($detail['t_058'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_058">Lakukan manuver jaw trust, head thin chin lift</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_059" id="t_059" <?= ($detail['t_059'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_059">Keluarkan benda asing, lakukan section</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_060" id="t_060" <?= ($detail['t_060'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_060">Berikan bantuan napas < Bag valve mask</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_061" id="t_061" <?= ($detail['t_061'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_061">Ajarkan teknik batuk efektif / nafas dalam</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_062" id="t_062" <?= ($detail['t_062'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_062">Berikan posisi miring mantap pada pasien tidak sadar</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_063" id="t_063" <?= ($detail['t_063'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_063">Observasi frekuensi, irama dan kedalaman pernapasan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_064" id="t_064" <?= ($detail['t_064'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_064">Berikan oksigen sesuai kebutuhan melauali nasal kanul, masker oksigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_065" id="t_065" <?= ($detail['t_065'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_065">Monitor saturasi okigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_066" id="t_066" <?= ($detail['t_066'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_066">Monitor tanda-tanda vital secara periodik/saturasi oksigen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_067" id="t_067" <?= ($detail['t_067'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_067">Monitor tingkat kesadaran (GCS) secara periodik</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_068" id="t_068" <?= ($detail['t_068'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_068">Tinggikan kepala 15-30 jika tidak ada kontra indikasi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_069" id="t_069" <?= ($detail['t_069'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_069">Berikan posisi semi fowler bila tidak ada kontra indikasi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_070" id="t_070" <?= ($detail['t_070'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_070">Pasang infus, ambil sampel darah, cek AGD</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_071" id="t_071" <?= ($detail['t_071'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_071">Kolaborasi pemberian cairan intravena, ciran koloid, darah, produk darah/obat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_072" id="t_072" <?= ($detail['t_072'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_072">Berikan cairan intravena, cairan koloid, darah, produk darah</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_073" id="t_073" <?= ($detail['t_073'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_073">Pasang cateter urin untuk monitor cairan keluar</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_074" id="t_074" <?= ($detail['t_074'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_074">Lakukan perawatan luka</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_075" id="t_075" <?= ($detail['t_075'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_075">Kaji nyeri/tanda-tanda infeksi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_076" id="t_076" <?= ($detail['t_076'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi15()">
                                            <input type="text" id="V_24" name="V_24" style="width: 300px;" value="<?= $detail['V_24']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hambatan pelayanan<br>komunikasi, edukasi</td>
                            <td colspan="5" style="vertical-align: middle;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_077" id="t_077_tidak" <?= ($detail['t_077'] == "0" ? 'checked' : ''); ?> value="0" onclick="fungsi16_disabled()" checked>
                                    <label class="form-check-label" for="t_077_tidak"> Tidak </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="t_077" id="t_077_ada" <?= ($detail['t_077'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi16_enable()">
                                    <label class="form-check-label" for="t_077_ada"> Ada: </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_078" id="t_078" <?= ($detail['t_078'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_078"> Pendengaran </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_079" id="t_079" <?= ($detail['t_079'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_079"> Penglihatan </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_080" id="t_080" <?= ($detail['t_080'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_080"> Kognitif </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_081" id="t_081" <?= ($detail['t_081'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_081"> Fisik </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_082" id="t_082" <?= ($detail['t_082'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_082"> Budaya </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_083" id="t_083" <?= ($detail['t_083'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_083"> Emosi </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input hambatan" type="checkbox" name="t_084" id="t_084" <?= ($detail['t_084'] == "1" ? 'checked' : ''); ?> value="1">
                                    <label class="form-check-label" for="t_084"> Bahasa </label>
                                </div>
                            </td>
                            <td colspan="2" rowspan="2">
                                <div class="row">
                                    <div class="col">
                                        <label for="V_25">Jam selesai pengkajian</label>
                                        <input type="time" id="V_25" name="V_25" style="width: 100px;" value="<?= $detail['V_25']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <table style="justify-content: center; width: 100%;">
                                        <tr>
                                            <td style="text-align: center; width: 50%;">
                                                <label for="V_26" style="text-align: center;">Perawat Pengkaji (PPJA)</label>
                                                <br>
                                                <div id="TTD" value="<?= $detail['TTD']; ?>"></div>
                                                <br>( <input type="text" id="V_26" name="V_26" style="width: 150px; text-align: center;" value="<?= $detail['V_26']; ?>"> )
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
                                            <input class="form-check-input" type="checkbox" name="t_085" id="t_085" <?= ($detail['t_085'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_085">Manajemen nyeri</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_086" id="t_086" <?= ($detail['t_086'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_086">Nutrisi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_087" id="t_087" <?= ($detail['t_087'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_087">Perawatan luka</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_088" id="t_088" <?= ($detail['t_088'] == "1" ? 'checked' : ''); ?> value="1">
                                            <label class="form-check-label" for="t_088">Jaminan finansial</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_089" id="t_089" <?= ($detail['t_089'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi17()">
                                            <input type="text" id="V_27" name="V_27" style="width: 300px;" value="<?= $detail['V_27']; ?>" disabled>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_090" id="t_090" <?= ($detail['t_090'] == "1" ? 'checked' : ''); ?> value="1" onclick="fungsi18()">
                                            <label class="form-check-label" for="t_090">Lain-lain</label>
                                            <input type="text" id="V_28" name="V_28" style="width: 200px;" value="<?= $detail['V_28']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
    <script>
        const T_05 = document.querySelector('#T_05');
        const awal = document.querySelector('.awal');
        const akhir = document.querySelector('.akhir');

        awal.innerHTML = T_05.min;
        akhir.innerHTML = T_05.value;
        T_05.addEventListener('input', function() {
            akhir.innerHTML = T_05.value;
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
            $('#T_013').val(sum);
        };
    </script>
    <script>
        $(function() {
            fungsi1_disabled();
            $("#T_01_umum, #T_01_bpjs").click(fungsi1_disabled);
        });
        $(function() {
            fungsi1_enable();
            $("#T_01_input").click(fungsi1_enable);
        });

        function fungsi1_disabled() {
            if (this.click) {
                $("#V_03").attr("disabled", true);
                $("#V_03").val("");
            } else {
                $("#V_03").removeAttr("disabled");
            }
        }

        function fungsi1_enable() {
            $("#V_03").attr("disabled", true);
            if (this.click) {
                $("#V_03").removeAttr("disabled");
                $("#V_03").focus();
            } else {
                $("#V_03").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi2_disabled();
            $("#T_02_pasien").click(fungsi2_disabled);
        });
        $(function() {
            fungsi2_enable();
            $("#T_02_keluarga").click(fungsi2_enable);
        });

        function fungsi2_disabled() {
            if (this.click) {
                $("#V_04").attr("disabled", true);
                $("#V_04").val("");
            } else {
                $("#V_04").removeAttr("disabled");
            }
        }

        function fungsi2_enable() {
            if (this.click) {
                $("#V_04").removeAttr("disabled");
                $("#V_04").focus();
            } else {
                $("#V_04").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi3_disabled();
            $("#T_07_tidakada").click(fungsi3_disabled);
        });
        $(function() {
            fungsi3_enable();
            $("#T_07_ada").click(fungsi3_enable);
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
            if ($("#T_020").is(":checked")) {
                $("#T_021, #T_022, #T_023").attr("disabled", true);
                $("#T_021, #T_022, #T_023").prop("checked", false);
                $("#V_07").attr("disabled", true);
                $("#V_07").val("");
            } else {
                $("#T_021, #T_022, #T_023").removeAttr("disabled");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4_input() {
            if ($("#T_023").is(":checked")) {
                $("#V_07").removeAttr("disabled");
                $("#V_07").focus();
            } else {
                $("#V_07").attr("disabled", true);
                $("#V_07").val("");
            }
        }
    </script>
    <script>
        $(function() {
            fungsi5_disabled();
            $("#T_026_tidakada").click(fungsi5_disabled);
        });
        $(function() {
            fungsi5_enable();
            $("#T_026_ada").click(fungsi5_enable);
        });

        function fungsi5_disabled() {
            if (this.click) {
                $("#V_13").attr("disabled", true);
                $("#V_13").val("");
            } else {
                $("#V_13").removeAttr("disabled");
            }
        }

        function fungsi5_enable() {
            if (this.click) {
                $("#V_13").removeAttr("disabled");
                $("#V_13").focus();
            } else {
                $("#V_13").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi6_disabled();
            $("#T_029_rumahsendiri").click(fungsi6_disabled);
        });
        $(function() {
            fungsi6_enable();
            $("#T_029_input").click(fungsi6_enable);
        });

        function fungsi6_disabled() {
            if (this.click) {
                $("#V_14").attr("disabled", true);
                $("#V_14").val("");
            } else {
                $("#V_14").removeAttr("disabled");
            }
        }

        function fungsi6_enable() {
            if (this.click) {
                $("#V_14").removeAttr("disabled");
                $("#V_14").focus();
            } else {
                $("#V_14").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi7_disabled();
            $("#T_031_tidak").click(fungsi7_disabled);
        });
        $(function() {
            fungsi7_enable();
            $("#T_031_ya").click(fungsi7_enable);
        });

        function fungsi7_disabled() {
            if (this.click) {
                $("#V_16").attr("disabled", true);
                $("#V_16").val("");
            } else {
                $("#V_16").removeAttr("disabled");
            }
        }

        function fungsi7_enable() {
            if (this.click) {
                $("#V_16").removeAttr("disabled");
                $("#V_16").focus();
            } else {
                $("#V_16").attr("disabled", true);
            }
        }
    </script>
    <script>
        $(function() {
            fungsi8_disabled();
            $("#T_032_tidak").click(fungsi8_disabled);
        });
        $(function() {
            fungsi8_enable();
            $("#T_032_ya").click(fungsi8_enable);
        });

        function fungsi8_disabled() {
            if (this.click) {
                $("#V_17").attr("disabled", true);
                $("#V_17").val("");
            } else {
                $("#V_17").removeAttr("disabled");
            }
        }

        function fungsi8_enable() {
            if (this.click) {
                $("#V_17").removeAttr("disabled");
                $("#V_17").focus();
            } else {
                $("#V_17").attr("disabled", true);
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#T_047").is(":checked")) {
                $("#V_18").removeAttr("disabled");
                $("#V_18").focus();
            } else {
                $("#V_18").attr("disabled", true);
                $("#V_18").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi10() {
            if ($("#t_052").is(":checked")) {
                $("#V_19").removeAttr("disabled");
                $("#V_19").focus();
            } else {
                $("#V_19").attr("disabled", true);
                $("#V_19").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi11() {
            if ($("#t_053").is(":checked")) {
                $("#V_20").removeAttr("disabled");
                $("#V_20").focus();
            } else {
                $("#V_20").attr("disabled", true);
                $("#V_20").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi12() {
            if ($("#t_055").is(":checked")) {
                $("#V_21").removeAttr("disabled");
                $("#V_21").focus();
            } else {
                $("#V_21").attr("disabled", true);
                $("#V_21").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi13() {
            if ($("#t_056").is(":checked")) {
                $("#V_22").removeAttr("disabled");
                $("#V_22").focus();
            } else {
                $("#V_22").attr("disabled", true);
                $("#V_22").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi14() {
            if ($("#t_057").is(":checked")) {
                $("#V_23").removeAttr("disabled");
                $("#V_23").focus();
            } else {
                $("#V_23").attr("disabled", true);
                $("#V_23").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi15() {
            if ($("#t_076").is(":checked")) {
                $("#V_24").removeAttr("disabled");
                $("#V_24").focus();
            } else {
                $("#V_24").attr("disabled", true);
                $("#V_24").val("");
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
                $("#V_27").removeAttr("disabled");
                $("#V_27").focus();
            } else {
                $("#V_27").attr("disabled", true);
                $("#V_27").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi18() {
            if ($("#t_090").is(":checked")) {
                $("#V_28").removeAttr("disabled");
                $("#V_28").focus();
            } else {
                $("#V_28").attr("disabled", true);
                $("#V_28").val("");
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