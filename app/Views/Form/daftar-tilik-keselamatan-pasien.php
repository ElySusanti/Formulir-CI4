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
        $(function() {
            var sig = $('#sig1').signature();
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
            var sig = $('#sig2').signature();
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
            var sig = $('#sig3').signature();
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
</head>

<body>
    <div class="container-fluid" style="font-family: 'Arial Narrow';">
        <a class="btn btn-outline-dark" href="/Formulir" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
        </a>
        <form action="" autocomplete="off">
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
                                    <label for="thename">Nama </label>
                                </td>
                                <td>
                                    : <input type="text" name="thename" id="thename" style="width: 100px;" readonly>&nbsp;
                                    <input type="text" name="gender" id="gender" style="width: 100px;" readonly>
                                </td>
                                <td>
                                    <label for="no_Registration">No. Reg </label>
                                </td>
                                <td>
                                    : <select name="no_Registration" id="no_Registration" style="width: 200px; height: 30PX;" required>
                                        <option value="" hidden></option>
                                        <?php foreach ($biodata as $bio) : ?>
                                            <option value="<?= $bio['BODY_ID']; ?>"><?= $bio['NO_REGISTRATION']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="date_of_birth">Tanggal Lahir </label>
                                </td>
                                <td>: <input type="date" name="date_of_birth" id="date_of_birth" style="width: 100px;" readonly></td>
                                <td>
                                    <label for="class_room_id">Ruang Rawat </label>
                                </td>
                                <td>: <input type="text" name="class_room_id" id="class_room_id" style="width: 100px;" readonly></td>
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
                            <label for="">1. Konfirmasi:</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02_identitas">
                                    <label class="form-check-label" for="t_02_identitas">Identitas dan gelang pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02_informed">
                                    <label class="form-check-label" for="t_02_informed">Informed consent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02_dokterbedah" onclick="fungsi1()">
                                    <label class="form-check-label" for="t_02_dokterbedah">Dokter ahli bedah, </label>
                                    (dr. <input type="text" name="v_05" id="v_05" style="width: 200px;" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02_dokteranastesi" onclick="fungsi2()">
                                    <label class="form-check-label" for="t_02_dokteranastesi">Dokter ahli anestesi, </label>
                                    (dr. <input type="text" name="v_06" id="v_06" style="width: 200px;" disabled> )
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_02" id="t_02_namatindakan" onclick="fungsi3()">
                                    <label class="form-check-label" for="t_02_namatindakan">Nama tindakan operasi: </label>
                                    <input type="text" name="v_07" id="v_07" style="width: 200px;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">2. Pemberian tanda lokasi operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_03" id="t_03_ya">
                                    <label class="form-check-label" for="t_03_ya">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_03" id="t_03_tidak">
                                    <label class="form-check-label" for="t_03_tidak">Tidak diperlukan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">3. Pemeriksaan kelengkapan anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_04" id="t_04_mesin">
                                    <label class="form-check-label" for="t_04_mesin">Mesin anastesi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_04" id="t_04_obat">
                                    <label class="form-check-label" for="t_04_obat">Obat-obatan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_04" id="t_04_iv">
                                    <label class="form-check-label" for="t_04_iv">IV line</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_04" id="t_04_laboratorium">
                                    <label class="form-check-label" for="t_04_laboratorium">Laboratorium</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">4. Apakah monitor sudah terpasang (EKG, pulse oxymetri, RR, nadi dan TD)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_05" id="t_05_terpasang">
                                    <label class="form-check-label" for="t_05_terpasang">Terpasang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_05" id="t_05_tidak">
                                    <label class="form-check-label" for="t_05_tidak">Tidak terpasang</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">5. Riwayat alergi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_06" id="t_06_ada" onclick="fungsi4()">
                                    <label class="form-check-label" for="t_06_ada">Ada, keterangan </label>
                                    <input type="text" name="v_08" id="v_08" style="width: 200px;" disabled>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_06" id="t_06_tidakada">
                                    <label class="form-check-label" for="t_06_tidakada">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">6. Resiko aspirasi atau resiko sulit diintubasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_07" id="t_07_tidak">
                                    <label class="form-check-label" for="t_07_tidak">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_07" id="t_07_ya">
                                    <label class="form-check-label" for="t_07_ya">Ya, bantuan lain tersedia</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">7. Resiko pendarahan<br>&nbsp;&nbsp;&nbsp;&nbsp;Kehilangan darah > 500 ml (7ml/kgBB pada anak)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_08" id="t_08_tidak">
                                    <label class="form-check-label" for="t_08_tidak">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_08" id="t_08_tidak">
                                    <label class="form-check-label" for="t_08_tidak">Ya, dengan IV line atau CVC</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">8. Rencana Anastesi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_09" id="t_09_narkose">
                                    <label class="form-check-label" for="t_09_narkose">Narkose umum</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_09" id="t_09_spinal">
                                    <label class="form-check-label" for="t_09_spinal">Spinal/Epidural</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_09" id="t_09_blok">
                                    <label class="form-check-label" for="t_09_blok">Blok</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_09" id="t_09_lokal">
                                    <label class="form-check-label" for="t_09_lokal">Lokal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">9. Rencana pemasangan implant</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_010" id="t_010_tidak">
                                    <label class="form-check-label" for="t_010_tidak">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_010" id="t_010_ya" onclick="fungsi5()">
                                    <label class="form-check-label" for="t_010_ya">Ya, </label>
                                    <input type="text" name="v_09" id="v_09" style="width: 200px;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="v_10">Tanggal Verifikasi </label>
                                : <input type="date" name="v_10" id="v_10" style="width: 100px;">
                                <label for="v_11">Jam</label>
                                <input type="time" name="v_11" id="v_11" style="width: 100px;">
                            </div>
                        </div>
                        <div class="row">
                            <label for="">Nama dan Tanda Tangan</label>
                        </div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <br><br><br><br><br><br>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_12" style="text-align: center;">Perawat IBS</label>
                                        <br>
                                        <div id="sig"></div>
                                        <br>( <input type="text" id="v_12" name="v_12" style="width: 150px; text-align: center;"> )
                                    </td>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_13" style="text-align: center;">Dokter Ahli Anastesi</label>
                                        <br>
                                        <div id="sig1"></div>
                                        <br>( <input type="text" id="v_13" name="v_13" style="width: 150px; text-align: center;"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="row">
                            <label for="">1. Kelengkapan tim operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_011" id="t_011_lengkap">
                                    <label class="form-check-label" for="t_011_lengkap">Lengkap, anggota tim menyebutkan nama dan perannya masing-masing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_011" id="t_011_tidaklengkap" onclick="fungsi6()">
                                    <label class="form-check-label" for="t_011_tidaklengkap">Tidak lengkap, alasan </label>
                                    <input type="text" name="v_14" id="v_14" style="width: 200px;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">2. Dokter bedah mengkonfirmasi identifikasi pasien (verbal dan visual), diagnosa<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;preoperasi, prosedur operasi, lokasi insisi dan posisi operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_012" id="t_012_dilakukan">
                                    <label class="form-check-label" for="t_012_dilakukan">Dilakukan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_012" id="t_012_tidakdilakukan">
                                    <label class="form-check-label" for="t_012_tidakdilakukan">Tidak dilakukan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">3. Antisipasi kondisi kritis</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label for=""><b>Untuk ahli bedah</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_013" id="t_013_berapa">
                                    <label class="form-check-label" for="t_013_berapa">Berapa perkiraan darah yang hilang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_013" id="t_013_adakah">
                                    <label class="form-check-label" for="t_013_adakah">Adakah alat spesifik yang dibutuhkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_013" id="t_013_apakah">
                                    <label class="form-check-label" for="t_013_apakah">Apakah ada kemungkinan keadaan kritis atau langkah-langkah tidak terduga yang perlu diketahui oleh tim</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label for=""><b>Untuk ahli anastesi</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_014" id="t_014">
                                    <label class="form-check-label" for="t_014">Apakah ada hal khusus yang perlu diketahui dari pasien ini?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                &nbsp;<label for=""><b>Untuk perawat</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_015" id="t_015_apakahsterilitas">
                                    <label class="form-check-label" for="t_015_apakahsterilitas">Apakah sterilitas instrumen sudah dikonfirmasi (sesuai indikator sterilitas)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_015" id="t_015_apakahadamasalah">
                                    <label class="form-check-label" for="t_015_apakahadamasalah">Apakah ada masalah peralatan atau hal yang perlu diperhatikan?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">4. Antisipasi berkaitan dengan ILO (Infeksi Luka Operasi)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016_antibiotika">
                                    <label class="form-check-label" for="t_016_antibiotika">Antibiotika profilaksis telah diberikan sekurang-kurangnya 60 menit sebelum operasi (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016_persiapan">
                                    <label class="form-check-label" for="t_016_persiapan">Persiapan kulit/mandi dengan antiseptik (bila diperlukan)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016_area">
                                    <label class="form-check-label" for="t_016_area">Area insisi operasi telah dilakukan pencukuran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016_gula">
                                    <label class="form-check-label" for="t_016_gula">Gula darah pasien terkendali</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">5. Pemberian obat-obatan premedikasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_017" id="t_017_tidak">
                                    <label class="form-check-label" for="t_017_tidak">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_017" id="t_017_ya">
                                    <label class="form-check-label" for="t_017_ya">Ya (konfirmasi nama obat, dosis dan jam pemberian)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">6. Hasil foto pemeriksaan radiologi yang diperlukan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_018" id="t_018_ditampilkan">
                                    <label class="form-check-label" for="t_018_ditampilkan">Ditampilkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_018" id="t_018_tidak">
                                    <label class="form-check-label" for="t_018_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 200px;"></div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_15" style="text-align: center;">Perawat Sirkuler</label>
                                        <br>
                                        <div id="sig2"></div>
                                        <br>( <input type="text" id="v_15" name="v_15" style="width: 150px; text-align: center;"> )
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="row">
                            <b>Perawat sirkuler memastikan secara verbal:</b><br>
                            <label for="">1. Prosedur operasi yang telah dilakukan</label>
                        </div>
                        <div class="row">
                            <label for="">2. Periksa kelengkapan sebelum luka operasi ditutup</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_019" id="t_019_instrument">
                                    <label class="form-check-label" for="t_019_instrument">Instrument</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_019" id="t_019_kassa">
                                    <label class="form-check-label" for="t_019_kassa">Kassa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_019" id="t_019_pisau">
                                    <label class="form-check-label" for="t_019_pisau">Pisau dan jarum</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">3. Periksa kelengkapan bahan pemeriksaan</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020_preparat">
                                    <label class="form-check-label" for="t_020_preparat">Preparat / specimen jaringan tubuh</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020_formulir">
                                    <label class="form-check-label" for="t_020_formulir">Formulir permintaan pemeriksaan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020_telahdilengkapi">
                                    <label class="form-check-label" for="t_020_telahdilengkapi">Telah dilengkapi identitas pasien</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020_penjelasan">
                                    <label class="form-check-label" for="t_020_penjelasan">Penjelasan oleh operator kepada keluarga pasien</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">4. Periksa kembali luka operasi</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_021" id="t_021_ada">
                                    <label class="form-check-label" for="t_021_ada">Ada rembesan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_021" id="t_021_tidak">
                                    <label class="form-check-label" for="t_021_tidak">Tidak ada rembesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">5. Konfirmasi kondisi pasien sebelum ditransfer ke Recovery Room (RR)</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_kesadaran">
                                    <label class="form-check-label" for="t_022_kesadaran">Kesadaran</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_tekanandarah">
                                    <label class="form-check-label" for="t_022_tekanandarah">Tekanan darah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_nadi">
                                    <label class="form-check-label" for="t_022_nadi">Nadi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_saturasi">
                                    <label class="form-check-label" for="t_022_saturasi">Saturasi oksigen (%)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_suhu">
                                    <label class="form-check-label" for="t_022_suhu">Suhu</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_skala">
                                    <label class="form-check-label" for="t_022_skala">Skala nyeri</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">6. Catatan dari ahli bedah, ahli anastesi atau perawat tentang hal-hal penting untuk pemulian dan penatalaksanaan perawatan pasien</label>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_023" id="t_023_ahlibedah" onclick="fungsi7()">
                                            <label class="form-check-label" for="t_023_ahlibedah" style="vertical-align: top;">Ahli bedah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="" style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8" style="text-align: start;">
                                            <textarea name="v_16" id="v_16" style="width: 200px; height: 70px;" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_023" id="t_023_ahlianastesi" onclick="fungsi8()">
                                            <label class="form-check-label" for="t_023_ahlianastesi" style="vertical-align: top;">Ahli anastesi</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="" style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="v_17" id="v_17" style="width: 200px; height: 70px;" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" name="t_023" id="t_023_perawat" onclick="fungsi9()">
                                            <label class="form-check-label" for="t_023_perawat" style="vertical-align: top;">Perawat</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="" style="vertical-align: top;">: </label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="v_18" id="v_18" style="width: 200px; height: 70px;" disabled></textarea>
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
                                        <label for="" style="text-align: center;">Dokter Operator</label>
                                        <br>
                                        <div id="sig3"></div>
                                        <br>( <input type="text" id="v_19" name="v_19" style="width: 150px; text-align: center;"> )
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

    <script type="text/javascript">
        function fungsi1() {
            if ($("#t_02_dokterbedah").is(":checked")) {
                $("#v_05").removeAttr("disabled");
                $("#v_05").focus();
            } else {
                $("#v_05").attr("disabled", true);
                $("#v_05").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi2() {
            if ($("#t_02_dokteranastesi").is(":checked")) {
                $("#v_06").removeAttr("disabled");
                $("#v_06").focus();
            } else {
                $("#v_06").attr("disabled", true);
                $("#v_06").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi3() {
            if ($("#t_02_namatindakan").is(":checked")) {
                $("#v_07").removeAttr("disabled");
                $("#v_07").focus();
            } else {
                $("#v_07").attr("disabled", true);
                $("#v_07").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi4() {
            if ($("#t_06_ada").is(":checked")) {
                $("#v_08").removeAttr("disabled");
                $("#v_08").focus();
            } else {
                $("#v_08").attr("disabled", true);
                $("#v_08").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi5() {
            if ($("#t_010_ya").is(":checked")) {
                $("#v_09").removeAttr("disabled");
                $("#v_09").focus();
            } else {
                $("#v_09").attr("disabled", true);
                $("#v_09").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi6() {
            if ($("#t_011_tidaklengkap").is(":checked")) {
                $("#v_14").removeAttr("disabled");
                $("#v_14").focus();
            } else {
                $("#v_14").attr("disabled", true);
                $("#v_14").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi7() {
            if ($("#t_023_ahlibedah").is(":checked")) {
                $("#v_16").removeAttr("disabled");
                $("#v_16").focus();
            } else {
                $("#v_16").attr("disabled", true);
                $("#v_16").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi8() {
            if ($("#t_023_ahlianastesi").is(":checked")) {
                $("#v_17").removeAttr("disabled");
                $("#v_17").focus();
            } else {
                $("#v_17").attr("disabled", true);
                $("#v_17").val("");
            }
        }
    </script>
    <script type="text/javascript">
        function fungsi9() {
            if ($("#t_023_perawat").is(":checked")) {
                $("#v_18").removeAttr("disabled");
                $("#v_18").focus();
            } else {
                $("#v_18").attr("disabled", true);
                $("#v_18").val("");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>