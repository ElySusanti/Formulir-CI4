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
    <div class="container-fluid" style="font-family: 'Arial Narrow';">
        <a class="btn btn-outline-primary my-3" href="/Formulir/input" role="button">
            <i class="bi bi-arrow-left"> Back</i>
        </a>
        <form action="<?= base_url('formulir/simpan') ?>" method="post" autocomplete="off">
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
                                    : <input type="text" name="THENAME" id="THENAME" style="width: 100px;" readonly>&nbsp;
                                    <input type="text" name="GENDER" id="GENDER" style="width: 100px;" readonly>
                                </td>
                                <td>
                                    <label for="NO_REGISTRATION">No. Reg </label>
                                </td>
                                <td>
                                    : <select name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 250px; height: 30PX;" required>
                                        <option value="" selected disabled>--Pilih Nomor Rekam Medis--</option>
                                        <?php foreach ($Biodata as $value) : ?>
                                            <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="DATE_OF_BIRTH">Tanggal Lahir </label>
                                </td>
                                <td>: <input type="date" name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" style="width: 100px;" readonly></td>
                                <td>
                                    <label for="CLASS_ROOM_ID">Ruang Rawat </label>
                                </td>
                                <td>: <input type="text" name="CLASS_ROOM_ID" id="CLASS_ROOM_ID" style="width: 100px;" readonly></td>
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
                                    <input class="form-check-input" type="checkbox" name="t_01" id="t_01" value="1">
                                    <label class="form-check-label" for="t_01">Identitas dan gelang pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02" value="1">
                                    <label class="form-check-label" for="t_02">Informed consent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_03" id="t_03" value="1" onclick="fungsi1()">
                                    <label class="form-check-label" for="t_03">Dokter ahli bedah, </label>
                                    (dr. <input type="text" name="v_01" id="v_01" style="width: 200px;" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_04" id="t_04" value="1" onclick="fungsi2()">
                                    <label class="form-check-label" for="t_04">Dokter ahli anestesi, </label>
                                    (dr. <input type="text" name="v_02" id="v_02" style="width: 200px;" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_05" id="t_05" value="1" onclick="fungsi3()">
                                    <label class="form-check-label" for="t_05">Nama tindakan operasi: </label>
                                    <input type="text" name="v_03" id="v_03" style="width: 200px;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>2. Pemberian tanda lokasi operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_06" id="t_06" value="1">
                                    <label class="form-check-label" for="t_06">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_07" id="t_07" value="1">
                                    <label class="form-check-label" for="t_07">Tidak diperlukan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>3. Pemeriksaan kelengkapan anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_08" id="t_08" value="1">
                                    <label class="form-check-label" for="t_08">Mesin anastesi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_09" id="t_09" value="1">
                                    <label class="form-check-label" for="t_09">Obat-obatan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_010" id="t_010" value="1">
                                    <label class="form-check-label" for="t_010">IV line</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_011" id="t_011" value="1">
                                    <label class="form-check-label" for="t_011">Laboratorium</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Apakah monitor sudah terpasang (EKG, pulse oxymetri, RR, nadi dan TD)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_012" id="t_012" value="1">
                                    <label class="form-check-label" for="t_012">Terpasang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_013" id="t_013" value="1">
                                    <label class="form-check-label" for="t_013">Tidak terpasang</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>5. Riwayat alergi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_014" id="t_014" value="1" onclick="fungsi4()">
                                    <label class="form-check-label" for="t_014">Ada, keterangan </label>
                                    <input type="text" name="v_04" id="v_04" style="width: 200px;" disabled>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_015" id="t_015" value="1">
                                    <label class="form-check-label" for="t_015">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>6. Resiko aspirasi atau resiko sulit diintubasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016" value="1">
                                    <label class="form-check-label" for="t_016">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_017" id="t_017" value="1">
                                    <label class="form-check-label" for="t_017">Ya, bantuan lain tersedia</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>7. Resiko pendarahan<br>&nbsp;&nbsp;&nbsp;&nbsp;Kehilangan darah > 500 ml (7ml/kgBB pada anak)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_018" id="t_018" value="1">
                                    <label class="form-check-label" for="t_018">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_019" id="t_019" value="1">
                                    <label class="form-check-label" for="t_019">Ya, dengan IV line atau CVC</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>8. Rencana Anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020" value="1">
                                    <label class="form-check-label" for="t_020">Narkose umum</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_021" id="t_021" value="1">
                                    <label class="form-check-label" for="t_021">Spinal/Epidural</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022" value="1">
                                    <label class="form-check-label" for="t_022">Blok</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_023" id="t_023" value="1">
                                    <label class="form-check-label" for="t_023">Lokal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>9. Rencana pemasangan implant</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_024" id="t_024" value="1">
                                    <label class="form-check-label" for="t_024">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_025" id="t_025" value="1" onclick="fungsi5()">
                                    <label class="form-check-label" for="t_025">Ya, </label>
                                    <input type="text" name="v_05" id="v_05" style="width: 200px;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="v_06">Tanggal Verifikasi </label>
                                : <input type="date" name="v_06" id="v_06" style="width: 100px;">
                                <label for="v_07">Jam</label>
                                <input type="time" name="v_07" id="v_07" style="width: 100px;">
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
                                        <label for="v_08" style="text-align: center;">Perawat IBS</label>
                                        <br>
                                        <div id="TTD"></div>
                                        <br>( <input type="text" id="v_08" name="v_08" style="width: 150px; text-align: center;"> )
                                    </td>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_09" style="text-align: center;">Dokter Ahli Anastesi</label>
                                        <br>
                                        <div id="TTD_1"></div>
                                        <br>( <input type="text" id="v_09" name="v_09" style="width: 150px; text-align: center;"> )
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
                                    <input class="form-check-input" type="checkbox" name="t_026" id="t_026" value="1">
                                    <label class="form-check-label" for="t_026">Lengkap, anggota tim menyebutkan nama dan perannya masing-masing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_027" id="t_027" value="1" onclick="fungsi6()">
                                    <label class="form-check-label" for="t_027">Tidak lengkap, alasan </label>
                                    <input type="text" name="v_10" id="v_10" style="width: 200px;" disabled>
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
                                    <input class="form-check-input" type="checkbox" name="t_028" id="t_028" value="1">
                                    <label class="form-check-label" for="t_028">Dilakukan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_029" id="t_029" value="1">
                                    <label class="form-check-label" for="t_029">Tidak dilakukan</label>
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
                                    <input class="form-check-input" type="checkbox" name="t_030" id="t_030" value="1">
                                    <label class="form-check-label" for="t_030">Berapa perkiraan darah yang hilang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_031" id="t_031" value="1">
                                    <label class="form-check-label" for="t_031">Adakah alat spesifik yang dibutuhkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_032" id="t_032" value="1">
                                    <label class="form-check-label" for="t_032">Apakah ada kemungkinan keadaan kritis atau langkah-langkah tidak terduga yang perlu diketahui oleh tim</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label><b>Untuk ahli anastesi</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_033" id="t_033" value="1">
                                    <label class="form-check-label" for="t_033">Apakah ada hal khusus yang perlu diketahui dari pasien ini?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label><b>Untuk perawat</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_034" id="t_034" value="1">
                                    <label class="form-check-label" for="t_034">Apakah sterilitas instrumen sudah dikonfirmasi (sesuai indikator sterilitas)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_035" id="t_035" value="1">
                                    <label class="form-check-label" for="t_035">Apakah ada masalah peralatan atau hal yang perlu diperhatikan?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Antisipasi berkaitan dengan ILO (Infeksi Luka Operasi)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_036" id="t_036" value="1">
                                    <label class="form-check-label" for="t_036">Antibiotika profilaksis telah diberikan sekurang-kurangnya 60 menit sebelum operasi (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_037" id="t_037" value="1">
                                    <label class="form-check-label" for="t_037">Persiapan kulit/mandi dengan antiseptik (bila diperlukan)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_038" id="t_038" value="1">
                                    <label class="form-check-label" for="t_038">Area insisi operasi telah dilakukan pencukuran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_039" id="t_039" value="1">
                                    <label class="form-check-label" for="t_039">Gula darah pasien terkendali</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>5. Pemberian obat-obatan premedikasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_040" id="t_040" value="1">
                                    <label class="form-check-label" for="t_040">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_041" id="t_041" value="1">
                                    <label class="form-check-label" for="t_041">Ya (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>6. Hasil foto pemeriksaan radiologi yang diperlukan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042" value="1">
                                    <label class="form-check-label" for="t_042">Ditampilkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_043" id="t_043" value="1">
                                    <label class="form-check-label" for="t_043">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 200px;"></div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_11" style="text-align: center;">Perawat Sirkuler</label>
                                        <br>
                                        <div id="TTD_2"></div>
                                        <br>( <input type="text" id="v_11" name="v_11" style="width: 150px; text-align: center;"> )
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
                                    <input class="form-check-input" type="checkbox" name="t_044" id="t_044" value="1">
                                    <label class="form-check-label" for="t_044">Instrument</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_045" id="t_045" value="1">
                                    <label class="form-check-label" for="t_045">Kassa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_046" id="t_046" value="1">
                                    <label class="form-check-label" for="t_046">Pisau dan jarum</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>3. Periksa kelengkapan bahan pemeriksaan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_047" id="t_047" value="1">
                                    <label class="form-check-label" for="t_047">Preparat / specimen jaringan tubuh</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_048" id="t_048" value="1">
                                    <label class="form-check-label" for="t_048">Formulir permintaan pemeriksaan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_049" id="t_049" value="1">
                                    <label class="form-check-label" for="t_049">Telah dilengkapi identitas pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_050" id="t_050" value="1">
                                    <label class="form-check-label" for="t_050">Penjelasan oleh operator kepada keluarga pasien</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>4. Periksa kembali luka operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_051" id="t_051" value="1">
                                    <label class="form-check-label" for="t_051">Ada rembesan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_052" id="t_052" value="1">
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
                                    <input class="form-check-input" type="checkbox" name="t_053" id="t_053" value="1">
                                    <label class="form-check-label" for="t_053">Kesadaran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_054" id="t_054" value="1">
                                    <label class="form-check-label" for="t_054">Tekanan darah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_055" id="t_055" value="1">
                                    <label class="form-check-label" for="t_055">Nadi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_056" id="t_056" value="1">
                                    <label class="form-check-label" for="t_056">Saturasi oksigen (%)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_057" id="t_057" value="1">
                                    <label class="form-check-label" for="t_057">Suhu</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_058" id="t_058" value="1">
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
                                            <input class="form-check-input" type="checkbox" name="t_059" id="t_059" value="1" onclick="fungsi7()">
                                            <label class="form-check-label" for="t_059" style="vertical-align: top;">Ahli bedah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8" style="text-align: start;">
                                            <textarea name="v_12" id="v_12" style="width: 200px; height: 70px;" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_060" id="t_060" value="1" onclick="fungsi8()">
                                            <label class="form-check-label" for="t_060" style="vertical-align: top;">Ahli anastesi</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="v_13" id="v_13" style="width: 200px; height: 70px;" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_061" id="t_061" value="1" onclick="fungsi9()">
                                            <label class="form-check-label" for="t_061" style="vertical-align: top;">Perawat</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="v_14" id="v_14" style="width: 200px; height: 70px;" disabled></textarea>
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
                                        <div id="TTD_3"></div>
                                        <br>( <input type="text" id="v_15" name="v_15" style="width: 150px; text-align: center;"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>
    <script>
        $('#NO_REGISTRATION').on('change', (event) => {
            getBiodata(event.target.value).then(Biodata => {
                $('#THENAME').val(Biodata.THENAME);
                $('#GENDER').val(Biodata.GENDER);
                $('#DATE_OF_BIRTH').val(Biodata.DATE_OF_BIRTH);
                $('#CLASS_ROOM_ID').val(Biodata.CLASS_ROOM_ID);
            });
        });

        async function getBiodata(BODY_ID) {
            let response = await fetch('/api/databiodata/show/' + BODY_ID)
            let data = await response.json();

            return data;
        }
    </script>
    <script type="text/javascript">
        function fungsi1() {
            if ($("#t_03").is(":checked")) {
                $("#v_01").removeAttr("disabled");
                $("#v_01").focus();
            } else {
                $("#v_01").attr("disabled", true);
                $("#v_01").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi2() {
            if ($("#t_04").is(":checked")) {
                $("#v_02").removeAttr("disabled");
                $("#v_02").focus();
            } else {
                $("#v_02").attr("disabled", true);
                $("#v_02").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi3() {
            if ($("#t_05").is(":checked")) {
                $("#v_03").removeAttr("disabled");
                $("#v_03").focus();
            } else {
                $("#v_03").attr("disabled", true);
                $("#v_03").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4() {
            if ($("#t_014").is(":checked")) {
                $("#v_04").removeAttr("disabled");
                $("#v_04").focus();
            } else {
                $("#v_04").attr("disabled", true);
                $("#v_04").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi5() {
            if ($("#t_025").is(":checked")) {
                $("#v_05").removeAttr("disabled");
                $("#v_05").focus();
            } else {
                $("#v_05").attr("disabled", true);
                $("#v_05").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi6() {
            if ($("#t_027").is(":checked")) {
                $("#v_10").removeAttr("disabled");
                $("#v_10").focus();
            } else {
                $("#v_10").attr("disabled", true);
                $("#v_10").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi7() {
            if ($("#t_059").is(":checked")) {
                $("#v_12").removeAttr("disabled");
                $("#v_12").focus();
            } else {
                $("#v_12").attr("disabled", true);
                $("#v_12").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi8() {
            if ($("#t_060").is(":checked")) {
                $("#v_13").removeAttr("disabled");
                $("#v_13").focus();
            } else {
                $("#v_13").attr("disabled", true);
                $("#v_13").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#t_061").is(":checked")) {
                $("#v_14").removeAttr("disabled");
                $("#v_14").focus();
            } else {
                $("#v_14").attr("disabled", true);
                $("#v_14").val("");
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