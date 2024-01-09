<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<a class="btn btn-outline-dark" href="/Formulir/input" role="button">
    <i class="bi bi-arrow-left"> Back</i>
</a>
<div class="container-fluid" style="font-family: 'Arial Narrow';">
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
                                <input class="form-check-input" type="checkbox" name="T_01" id="T_01" value="1">
                                <label class="form-check-label" for="T_01">Identitas dan gelang pasien</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_02" id="T_02" value="1">
                                <label class="form-check-label" for="T_02">Informed consent</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_03" id="T_03" value="1" onclick="fungsi1()">
                                <label class="form-check-label" for="T_03">Dokter ahli bedah, </label>
                                (dr. <input type="text" name="V_01" id="V_01" style="width: 200px;" disabled> )
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_04" id="T_04" value="1" onclick="fungsi2()">
                                <label class="form-check-label" for="T_04">Dokter ahli anestesi, </label>
                                (dr. <input type="text" name="V_02" id="V_02" style="width: 200px;" disabled> )
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_05" id="T_05" value="1" onclick="fungsi3()">
                                <label class="form-check-label" for="T_05">Nama tindakan operasi: </label>
                                <input type="text" name="V_03" id="V_03" style="width: 200px;" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label>2. Pemberian tanda lokasi operasi</label>
                    </div>
                    <div class="row">
                        &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_06" id="T_06" value="1">
                                <label class="form-check-label" for="T_06">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_07" id="T_07" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_08" id="T_08" value="1">
                                <label class="form-check-label" for="T_08">Mesin anastesi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_09" id="T_09" value="1">
                                <label class="form-check-label" for="T_09">Obat-obatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_010" id="T_010" value="1">
                                <label class="form-check-label" for="T_010">IV line</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_011" id="T_011" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_012" id="T_012" value="1">
                                <label class="form-check-label" for="T_012">Terpasang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_013" id="T_013" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_014" id="T_014" value="1" onclick="fungsi4()">
                                <label class="form-check-label" for="T_014">Ada, keterangan </label>
                                <input type="text" name="V_04" id="V_04" style="width: 200px;" disabled>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_015" id="T_015" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_016" id="T_016" value="1">
                                <label class="form-check-label" for="T_016">Tidak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_017" id="T_017" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_018" id="T_018" value="1">
                                <label class="form-check-label" for="T_018">Tidak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_019" id="T_019" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_020" id="T_020" value="1">
                                <label class="form-check-label" for="T_020">Narkose umum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_021" id="T_021" value="1">
                                <label class="form-check-label" for="T_021">Spinal/Epidural</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_022" id="T_022" value="1">
                                <label class="form-check-label" for="T_022">Blok</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_023" id="T_023" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_024" id="T_024" value="1">
                                <label class="form-check-label" for="T_024">Tidak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_025" id="T_025" value="1" onclick="fungsi5()">
                                <label class="form-check-label" for="T_025">Ya, </label>
                                <input type="text" name="V_05" id="V_05" style="width: 200px;" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="V_06">Tanggal Verifikasi </label>
                            : <input type="date" name="V_06" id="V_06" style="width: 100px;">
                            <label for="V_07">Jam</label>
                            <input type="time" name="V_07" id="V_07" style="width: 100px;">
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
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas()">Clear Signature</button><br>
                                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD" id="TTD">
                                    <br>( <input type="text" id="V_08" name="V_08" style="width: 150px; text-align: center;"> )
                                </td>
                                <td style="text-align: center; width: 50%;">
                                    <label for="V_09" style="text-align: center;">Dokter Ahli Anastesi</label>
                                    <br>
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas1()">Clear Signature</button><br>
                                    <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_1" id="TTD_1">
                                    <br>( <input type="text" id="V_09" name="V_09" style="width: 150px; text-align: center;"> )
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
                                <input class="form-check-input" type="checkbox" name="T_026" id="T_026" value="1">
                                <label class="form-check-label" for="T_026">Lengkap, anggota tim menyebutkan nama dan perannya masing-masing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_027" id="T_027" value="1" onclick="fungsi6()">
                                <label class="form-check-label" for="T_027">Tidak lengkap, alasan </label>
                                <input type="text" name="V_10" id="V_10" style="width: 200px;" disabled>
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
                                <input class="form-check-input" type="checkbox" name="T_028" id="T_028" value="1">
                                <label class="form-check-label" for="T_028">Dilakukan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_029" id="T_029" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_030" id="T_030" value="1">
                                <label class="form-check-label" for="T_030">Berapa perkiraan darah yang hilang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_031" id="T_031" value="1">
                                <label class="form-check-label" for="T_031">Adakah alat spesifik yang dibutuhkan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_032" id="T_032" value="1">
                                <label class="form-check-label" for="T_032">Apakah ada kemungkinan keadaan kritis atau langkah-langkah tidak terduga yang perlu diketahui oleh tim</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                            &nbsp;<label><b>Untuk ahli anastesi</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_033" id="T_033" value="1">
                                <label class="form-check-label" for="T_033">Apakah ada hal khusus yang perlu diketahui dari pasien ini?</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                            &nbsp;<label><b>Untuk perawat</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_034" id="T_034" value="1">
                                <label class="form-check-label" for="T_034">Apakah sterilitas instrumen sudah dikonfirmasi (sesuai indikator sterilitas)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_035" id="T_035" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_036" id="T_036" value="1">
                                <label class="form-check-label" for="T_036">Antibiotika profilaksis telah diberikan sekurang-kurangnya 60 menit sebelum operasi (konfirmasi nama obat, dosis dan jam pemberian)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_037" id="T_037" value="1">
                                <label class="form-check-label" for="T_037">Persiapan kulit/mandi dengan antiseptik (bila diperlukan)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_038" id="T_038" value="1">
                                <label class="form-check-label" for="T_038">Area insisi operasi telah dilakukan pencukuran</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_039" id="T_039" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_040" id="T_040" value="1">
                                <label class="form-check-label" for="T_040">Tidak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_041" id="T_041" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_042" id="T_042" value="1">
                                <label class="form-check-label" for="T_042">Ditampilkan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_043" id="T_043" value="1">
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
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas2()">Clear Signature</button><br>
                                    <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_2" id="TTD_2">
                                    <br>( <input type="text" id="V_11" name="V_11" style="width: 150px; text-align: center;"> )
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
                                <input class="form-check-input" type="checkbox" name="T_044" id="T_044" value="1">
                                <label class="form-check-label" for="T_044">Instrument</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_045" id="T_045" value="1">
                                <label class="form-check-label" for="T_045">Kassa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_046" id="T_046" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_047" id="T_047" value="1">
                                <label class="form-check-label" for="T_047">Preparat / specimen jaringan tubuh</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_048" id="T_048" value="1">
                                <label class="form-check-label" for="T_048">Formulir permintaan pemeriksaan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_049" id="T_049" value="1">
                                <label class="form-check-label" for="T_049">Telah dilengkapi identitas pasien</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_050" id="T_050" value="1">
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
                                <input class="form-check-input" type="checkbox" name="T_051" id="T_051" value="1">
                                <label class="form-check-label" for="T_051">Ada rembesan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_052" id="T_052" value="1">
                                <label class="form-check-label" for="T_052">Tidak ada rembesan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label>5. Konfirmasi kondisi pasien sebelum ditransfer ke Recovery Room (RR)</label>
                    </div>
                    <div class="row">
                        &nbsp;&nbsp;&nbsp;&nbsp;<div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_053" id="T_053" value="1">
                                <label class="form-check-label" for="T_053">Kesadaran</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_054" id="T_054" value="1">
                                <label class="form-check-label" for="T_054">Tekanan darah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_055" id="T_055" value="1">
                                <label class="form-check-label" for="T_055">Nadi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_056" id="T_056" value="1">
                                <label class="form-check-label" for="T_056">Saturasi oksigen (%)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_057" id="T_057" value="1">
                                <label class="form-check-label" for="T_057">Suhu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_058" id="T_058" value="1">
                                <label class="form-check-label" for="T_058">Skala nyeri</label>
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
                                        <input class="form-check-input" type="checkbox" name="T_059" id="T_059" value="1" onclick="fungsi7()">
                                        <label class="form-check-label" for="T_059" style="vertical-align: top;">Ahli bedah</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label style="vertical-align: top;">: </label>
                                    </div>
                                    <div class="col-md-8" style="text-align: start;">
                                        <textarea name="V_12" id="V_12" style="width: 200px; height: 70px;" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" name="T_060" id="T_060" value="1" onclick="fungsi8()">
                                        <label class="form-check-label" for="T_060" style="vertical-align: top;">Ahli anastesi</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label style="vertical-align: top;">: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="V_13" id="V_13" style="width: 200px; height: 70px;" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" name="T_061" id="T_061" value="1" onclick="fungsi9()">
                                        <label class="form-check-label" for="T_061" style="vertical-align: top;">Perawat</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label style="vertical-align: top;">: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="V_14" id="V_14" style="width: 200px; height: 70px;" disabled></textarea>
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
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas3()">Clear Signature</button><br>
                                    <canvas id="canvas3" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_3" id="TTD_3">
                                    <br>( <input type="text" id="V_15" name="V_15" style="width: 150px; text-align: center;"> )
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <div class="d-grid gap-2 mt-3 mb-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan" onclick="saveSignatureData(); saveSignatureData1(); saveSignatureData2(); saveSignatureData3()">
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
        if ($("#T_059").is(":checked")) {
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
        if ($("#T_060").is(":checked")) {
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
        if ($("#T_061").is(":checked")) {
            $("#V_14").removeAttr("disabled");
            $("#V_14").focus();
        } else {
            $("#V_14").attr("disabled", true);
            $("#V_14").val("");
        }
    }
</script>
<script>
    var canvas = document.getElementById('canvas');
    const canvasDataInput = document.getElementById('TTD');
    var context = canvas.getContext('2d');
    var drawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = '#000';

        context.lineTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
        context.stroke();
        context.beginPath();
        context.moveTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context.beginPath();
    }

    function clearCanvas() {
        context.clearRect(0, 0, canvas.width, canvas.height);
    }

    function saveSignatureData() {
        const canvasData = canvas.toDataURL('image/png');

        canvasDataInput.value = canvasData;
    }
</script>
<script>
    var canvas1 = document.getElementById('canvas1');
    const canvasDataInput1 = document.getElementById('TTD_1');
    var context1 = canvas1.getContext('2d');
    var drawing = false;

    canvas1.addEventListener('mousedown', startDrawing);
    canvas1.addEventListener('mousemove', draw);
    canvas1.addEventListener('mouseup', stopDrawing);
    canvas1.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context1.lineWidth = 2;
        context1.lineCap = 'round';
        context1.strokeStyle = '#000';

        context1.lineTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
        context1.stroke();
        context1.beginPath();
        context1.moveTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context1.beginPath();
    }

    function clearCanvas1() {
        context1.clearRect(0, 0, canvas1.width, canvas1.height);
    }

    function saveSignatureData1() {
        const canvasData1 = canvas1.toDataURL('image/png');

        canvasDataInput1.value = canvasData1;
    }
</script>
<script>
    var canvas2 = document.getElementById('canvas2');
    const canvasDataInput2 = document.getElementById('TTD_2');
    var context2 = canvas2.getContext('2d');
    var drawing = false;

    canvas2.addEventListener('mousedown', startDrawing);
    canvas2.addEventListener('mousemove', draw);
    canvas2.addEventListener('mouseup', stopDrawing);
    canvas2.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context2.lineWidth = 2;
        context2.lineCap = 'round';
        context2.strokeStyle = '#000';

        context2.lineTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
        context2.stroke();
        context2.beginPath();
        context2.moveTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context2.beginPath();
    }

    function clearCanvas2() {
        context2.clearRect(0, 0, canvas2.width, canvas2.height);
    }

    function saveSignatureData2() {
        const canvasData2 = canvas2.toDataURL('image/png');

        canvasDataInput2.value = canvasData2;
    }
</script>
<script>
    var canvas3 = document.getElementById('canvas3');
    const canvasDataInput3 = document.getElementById('TTD_3');
    var context3 = canvas3.getContext('2d');
    var drawing = false;

    canvas3.addEventListener('mousedown', startDrawing);
    canvas3.addEventListener('mousemove', draw);
    canvas3.addEventListener('mouseup', stopDrawing);
    canvas3.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context3.lineWidth = 2;
        context3.lineCap = 'round';
        context3.strokeStyle = '#000';

        context3.lineTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
        context3.stroke();
        context3.beginPath();
        context3.moveTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context3.beginPath();
    }

    function clearCanvas3() {
        context3.clearRect(0, 0, canvas3.width, canvas3.height);
    }

    function saveSignatureData3() {
        const canvasData3 = canvas3.toDataURL('image/png');

        canvasDataInput3.value = canvasData3;
    }
</script>
<?= $this->endSection(); ?>