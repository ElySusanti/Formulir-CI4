<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>DAFTAR TILIK KESELAMATAN PASIEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
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
</head>

<body>
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir/form2" role="button">
        <i class="bi bi-arrow-left"> Back</i>
    </a>
    <div class="container-fluid" style="font-family: 'Arial Narrow';">
        <form action="<?= base_url('formulir/update2') ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" id="FORM" name="FORM" value="F2">
            <div class="row">
                <div class="col md-6 text-start">
                    <h4><b>RSUD Dr. M. YUNUS BENGKULU</b></h4>
                </div>
                <div class="col md-6 text-end">
                    <h4><b>RM. 10 Lanjutan 3</b></h4>
                </div>
            </div>
            <table class="table table-bordered mb-1" align="right" style="border: 1px; color: black; width: auto;">
                <tr>
                    <td>
                        <table style="text-align: left;">
                            <tr>
                                <td>
                                    <label for="THENAME">Nama </label>
                                </td>
                                <td>
                                    : <input type="text" name="THENAME" id="THENAME" style="width: 100px;" value="<?= $detail['THENAME']; ?>" readonly>&nbsp;
                                    <input type="text" name="GENDER" id="GENDER" style="width: 100px;" value="<?= $detail['GENDER']; ?>" readonly>
                                </td>
                                <td>
                                    <label for="NO_REGISTRATION">No. Reg </label>
                                </td>
                                <td>
                                    : <input type="text" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 250px;" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="DATE_OF_BIRTH">Tanggal Lahir </label>
                                </td>
                                <td>: <input type="date" name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" style="width: 100px;" value="" readonly></td>
                                <td>
                                    <label for="CLASS_ROOM_ID">Ruang Rawat </label>
                                </td>
                                <td>: <input type="text" name="CLASS_ROOM_ID" id="CLASS_ROOM_ID" style="width: 100px;" value="<?= $detail['CLASS_ROOM_ID']; ?>" readonly></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mb-0" style="border: 1px; color: black;width: 100%; font-family: 'Arial Narrow'; height: auto">
                <tr>
                    <td colspan="3" style="font-family: Calibri; text-align: center; font-size: 18px;"><b>DAFTAR TILIK KESELAMATAN PASIEN (SURGICAL SAFETY CHECKLIST)</b></td>
                </tr>
                <tr style="font-size: 13px; text-align: center;">
                    <td><b>SIGN IN<br>Sebelum Dilakukan Induksi Anestesi</b></td>
                    <td><b>TIME OUT<br>Sebelum Dilakukan Insisi Kulit</b></td>
                    <td><b>SIGN OUT<br>Sebelum pasien keluar dari ruang operasi</b></td>
                </tr>
                <tr style="font-size: 13px; text-align: center;">
                    <td>Dilakukan oleh Perawat dan Dokter Ahli Anestesi</td>
                    <td>Dilakukan oleh Perawat, Dokter Ahli Anestesi dan Dokter Ahli Bedah</td>
                    <td>Dilakukan oleh Perawat, Dokter Ahli Anestesi dan Dokter Ahli Bedah</td>
                </tr>
                <tr style="font-size: 13px; text-align: left;">
                    <td style="width: 33%;">
                        <div class="row">
                            <label>1. Konfirmasi:</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_01" id="T_01" <?= ($detail['T_01'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_01">Identitas dan gelang pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_02" id="T_02" <?= ($detail['T_02'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_02">Informed consent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_03" id="T_03" <?= ($detail['T_03'] == "1" ? 'checked' : ''); ?> onclick="fungsi1()">
                                    <label class="form-check-label" for="T_03">Dokter ahli bedah, </label>
                                    (dr. <input type="text" name="V_01" id="V_01" style="width: 200px;" value="<?= $detail['V_01']; ?>" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_04" id="T_04" <?= ($detail['T_04'] == "1" ? 'checked' : ''); ?> onclick="fungsi2()">
                                    <label class="form-check-label" for="T_04">Dokter ahli anestesi, </label>
                                    (dr. <input type="text" name="V_02" id="V_02" style="width: 200px;" value="<?= $detail['V_02']; ?>" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_05" id="T_05" <?= ($detail['T_05'] == "1" ? 'checked' : ''); ?> onclick="fungsi3()">
                                    <label class="form-check-label" for="T_05">Nama tindakan operasi: </label>
                                    <input type="text" name="V_03" id="V_03" style="width: 200px;" value="<?= $detail['V_03']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>2. Pemberian tanda lokasi operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_06" id="T_06" <?= ($detail['T_06'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_06">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_07" id="T_07" <?= ($detail['T_07'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_07">Tidak diperlukan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>3. Pemeriksaan kelengkapan anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_08" id="T_08" <?= ($detail['T_08'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_08">Mesin anastesi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_09" id="T_09" <?= ($detail['T_09'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_09">Obat-obatan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_010" id="T_010" <?= ($detail['T_010'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_010">IV line</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_011" id="T_011" <?= ($detail['T_011'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_011">Laboratorium</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Apakah monitor sudah terpasang (EKG, pulse oxymetri, RR, nadi dan TD)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_012" id="T_012" <?= ($detail['T_012'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_012">Terpasang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_013" id="T_013" <?= ($detail['T_013'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_013">Tidak terpasang</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>5. Riwayat alergi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_014" id="T_014" <?= ($detail['T_014'] == "1" ? 'checked' : ''); ?> onclick="fungsi4()">
                                    <label class="form-check-label" for="T_014">Ada, keterangan </label>
                                    <input type="text" name="V_04" id="V_04" style="width: 200px;" value="<?= $detail['V_04']; ?>" disabled>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_015" id="T_015" <?= ($detail['T_015'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_015">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>6. Resiko aspirasi atau resiko sulit diintubasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_016" id="T_016" <?= ($detail['T_016'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_016">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_017" id="T_017" <?= ($detail['T_017'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_017">Ya, bantuan lain tersedia</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>7. Resiko pendarahan<br>&nbsp;&nbsp;&nbsp;&nbsp;Kehilangan darah > 500 ml (7ml/kgBB pada anak)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_018" id="T_018" <?= ($detail['T_018'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_018">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_019" id="T_019" <?= ($detail['T_019'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_019">Ya, dengan IV line atau CVC</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>8. Rencana Anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_020" id="T_020" <?= ($detail['T_020'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_020">Narkose umum</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_021" id="T_021" <?= ($detail['T_021'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_021">Spinal/Epidural</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_022" id="T_022" <?= ($detail['T_022'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_022">Blok</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_023" id="T_023" <?= ($detail['T_023'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_023">Lokal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>9. Rencana pemasangan implant</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_024" id="T_024" <?= ($detail['T_024'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_024">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_025" id="T_025" <?= ($detail['T_025'] == "1" ? 'checked' : ''); ?> onclick="fungsi5()">
                                    <label class="form-check-label" for="T_025">Ya, </label>
                                    <input type="text" name="V_05" id="V_05" style="width: 200px;" value="<?= $detail['V_05']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="V_06">Tanggal Verifikasi </label>
                                : <input type="date" name="V_06" id="V_06" style="width: 100px;" value="<?= $detail['V_06']; ?>">
                                <label for="V_07">Jam</label>
                                <input type="time" name="V_07" id="V_07" style="width: 100px;" value="<?= $detail['V_07']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label>Nama dan Tanda Tangan</label>
                        </div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <br><br><br><br><br><br>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="V_08" style="text-align: center;">Perawat IBS</label>
                                        <br>
                                        <div id="TTD" value="<?= $detail['TTD']; ?>"></div>
                                        <br>( <input type="text" id="V_08" name="V_08" style="width: 150px; text-align: center;" value="<?= $detail['V_08']; ?>"> )
                                    </td>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="V_09" style="text-align: center;">Dokter Ahli Anastesi</label>
                                        <br>
                                        <div id="TTD_1" value="<?= $detail['TTD_1']; ?>"></div>
                                        <br>( <input type="text" id="V_09" name="V_09" style="width: 150px; text-align: center;" value="<?= $detail['V_09']; ?>"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="row">
                            <label>1. Kelengkapan tim operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_026" id="T_026" <?= ($detail['T_026'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_026">Lengkap, anggota tim menyebutkan nama dan perannya masing-masing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_027" id="T_027" <?= ($detail['T_027'] == "1" ? 'checked' : ''); ?> onclick="fungsi6()">
                                    <label class="form-check-label" for="T_027">Tidak lengkap, alasan </label>
                                    <input type="text" name="V_10" id="V_10" style="width: 200px;" value="<?= $detail['V_10']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>2. Dokter bedah mengkonfirmasi identifikasi pasien (verbal dan visual), diagnosa<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;preoperasi, prosedur operasi, lokasi insisi dan posisi operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_028" id="T_028" <?= ($detail['T_028'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_028">Dilakukan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_029" id="T_029" <?= ($detail['T_029'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_029">Tidak dilakukan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>3. Antisipasi kondisi kritis</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label><b>Untuk ahli bedah</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_030" id="T_030" <?= ($detail['T_030'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_030">Berapa perkiraan darah yang hilang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_031" id="T_031" <?= ($detail['T_031'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_031">Adakah alat spesifik yang dibutuhkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_032" id="T_032" <?= ($detail['T_032'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_032">Apakah ada kemungkinan keadaan kritis atau langkah-langkah tidak terduga yang perlu diketahui oleh tim</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label><b>Untuk ahli anastesi</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_033" id="T_033" <?= ($detail['T_033'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_033">Apakah ada hal khusus yang perlu diketahui dari pasien ini?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label><b>Untuk perawat</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_034" id="T_034" <?= ($detail['T_034'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_034">Apakah sterilitas instrumen sudah dikonfirmasi (sesuai indikator sterilitas)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_035" id="T_035" <?= ($detail['T_035'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_035">Apakah ada masalah peralatan atau hal yang perlu diperhatikan?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Antisipasi berkaitan dengan ILO (Infeksi Luka Operasi)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_036" id="T_036" <?= ($detail['T_036'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_036">Antibiotika profilaksis telah diberikan sekurang-kurangnya 60 menit sebelum operasi (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_037" id="T_037" <?= ($detail['T_037'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_037">Persiapan kulit/mandi dengan antiseptik (bila diperlukan)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_038" id="T_038" <?= ($detail['T_038'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_038">Area insisi operasi telah dilakukan pencukuran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_039" id="T_039" <?= ($detail['T_039'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_039">Gula darah pasien terkendali</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>5. Pemberian obat-obatan premedikasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_040" id="T_040" <?= ($detail['T_040'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_040">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_041" id="T_041" <?= ($detail['T_041'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_041">Ya (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>6. Hasil foto pemeriksaan radiologi yang diperlukan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_042" id="T_042" <?= ($detail['T_042'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_042">Ditampilkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_043" id="T_043" <?= ($detail['T_043'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_043">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 200px;"></div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="V_11" style="text-align: center;">Perawat Sirkuler</label>
                                        <br>
                                        <div id="TTD_2" value="<?= $detail['TTD_2']; ?>"></div>
                                        <br>( <input type="text" id="V_11" name="V_11" style="width: 150px; text-align: center;" value="<?= $detail['V_11']; ?>"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="row">
                            <b>Perawat sirkuler memastikan secara verbal:</b><br>
                            <label>1. Prosedur operasi yang telah dilakukan</label>
                        </div>
                        <div class="row">
                            <label>2. Periksa kelengkapan sebelum luka operasi ditutup</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_044" id="T_044" <?= ($detail['T_044'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_044">Instrument</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_045" id="T_045" <?= ($detail['T_045'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_045">Kassa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_046" id="T_046" <?= ($detail['T_046'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_046">Pisau dan jarum</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>3. Periksa kelengkapan bahan pemeriksaan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_047" id="T_047" <?= ($detail['T_047'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_047">Preparat / specimen jaringan tubuh</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_048" id="T_048" <?= ($detail['T_048'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_048">Formulir permintaan pemeriksaan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_049" id="T_049" <?= ($detail['T_049'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_049">Telah dilengkapi identitas pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_050" id="T_050" <?= ($detail['T_050'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="T_050">Penjelasan oleh operator kepada keluarga pasien</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Periksa kembali luka operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_051" id="t_051" <?= ($detail['t_051'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_051">Ada rembesan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_052" id="t_052" <?= ($detail['t_052'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_052">Tidak ada rembesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>5. Konfirmasi kondisi pasien sebelum ditransfer ke Recovery Room (RR)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_053" id="t_053" <?= ($detail['t_053'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_053">Kesadaran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_054" id="t_054" <?= ($detail['t_054'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_054">Tekanan darah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_055" id="t_055" <?= ($detail['t_055'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_055">Nadi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_056" id="t_056" <?= ($detail['t_056'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_056">Saturasi oksigen (%)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_057" id="t_057" <?= ($detail['t_057'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_057">Suhu</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_058" id="t_058" <?= ($detail['t_058'] == "1" ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="t_058">Skala nyeri</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>6. Catatan dari ahli bedah, ahli anastesi atau perawat tentang hal-hal penting untuk pemulian dan penatalaksanaan perawatan pasien</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_059" id="t_059" <?= ($detail['t_059'] == "1" ? 'checked' : ''); ?> onclick="fungsi7()">
                                            <label class="form-check-label" for="t_059" style="vertical-align: top;">Ahli bedah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8" style="text-align: start;">
                                            <textarea name="V_12" id="V_12" style="width: 200px; height: 70px;" disabled><?= $detail['V_12']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_060" id="t_060" <?= ($detail['t_060'] == "1" ? 'checked' : ''); ?> onclick="fungsi8()">
                                            <label class="form-check-label" for="t_060" style="vertical-align: top;">Ahli anastesi</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="V_13" id="V_13" style="width: 200px; height: 70px;" disabled><?= $detail['V_13']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_061" id="t_061" <?= ($detail['t_061'] == "1" ? 'checked' : ''); ?> onclick="fungsi9()">
                                            <label class="form-check-label" for="t_061" style="vertical-align: top;">Perawat</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="V_14" id="V_14" style="width: 200px; height: 70px;" disabled><?= $detail['V_14']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 115px;"></div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label style="text-align: center;">Dokter Operator</label>
                                        <br>
                                        <div id="TTD_3" value="<?= $detail['TTD_3']; ?>"></div>
                                        <br>( <input type="text" id="V_15" name="V_15" style="width: 150px; text-align: center;" value="<?= $detail['V_15']; ?>"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function fungsi1() {
            if ($("#T_03").is(":checked")) {
                $("#V_01").removeAttr("disabled");
                $("#V_01").focus();
            } else {
                $("#V_01").attr("disabled", true);
                $("#V_01").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi2() {
            if ($("#T_04").is(":checked")) {
                $("#V_02").removeAttr("disabled");
                $("#V_02").focus();
            } else {
                $("#V_02").attr("disabled", true);
                $("#V_02").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi3() {
            if ($("#T_05").is(":checked")) {
                $("#V_03").removeAttr("disabled");
                $("#V_03").focus();
            } else {
                $("#V_03").attr("disabled", true);
                $("#V_03").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4() {
            if ($("#T_014").is(":checked")) {
                $("#V_04").removeAttr("disabled");
                $("#V_04").focus();
            } else {
                $("#V_04").attr("disabled", true);
                $("#V_04").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi5() {
            if ($("#T_025").is(":checked")) {
                $("#V_05").removeAttr("disabled");
                $("#V_05").focus();
            } else {
                $("#V_05").attr("disabled", true);
                $("#V_05").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi6() {
            if ($("#T_027").is(":checked")) {
                $("#V_10").removeAttr("disabled");
                $("#V_10").focus();
            } else {
                $("#V_10").attr("disabled", true);
                $("#V_10").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi7() {
            if ($("#t_059").is(":checked")) {
                $("#V_12").removeAttr("disabled");
                $("#V_12").focus();
            } else {
                $("#V_12").attr("disabled", true);
                $("#V_12").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi8() {
            if ($("#t_060").is(":checked")) {
                $("#V_13").removeAttr("disabled");
                $("#V_13").focus();
            } else {
                $("#V_13").attr("disabled", true);
                $("#V_13").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#t_061").is(":checked")) {
                $("#V_14").removeAttr("disabled");
                $("#V_14").focus();
            } else {
                $("#V_14").attr("disabled", true);
                $("#V_14").val("");
            }
        }
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
        $(function() {
            var sig = $('#TTD_1').signature();
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
        $(function() {
            var sig = $('#TTD_2').signature();
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
        $(function() {
            var sig = $('#TTD_3').signature();
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>