<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<a class="btn btn-outline-dark" href="/Formulir/input" role="button">
    <i class="bi bi-arrow-left"> Back</i>
</a>
<div class="container">
    <form action="<?= base_url('formulir/simpan') ?>" method="post" autocomplete="off" class="mt-3" style="font-family: 'Times New Roman';">
        <?= csrf_field(); ?>
        <input type="hidden" id="FORM" name="FORM" value="F1">
        <h3 style="text-align: right;"><b>RM. 08 Lanjutan 3 </b></h3>
        <table class="table table-bordered mb-0" style="border: 1px; color: black;width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 50%; text-align: center; vertical-align: middle;">
                        <h3><b>PERSETUJUAN TINDAKAN <br>ANASTESI</b></h3>
                    </td>
                    <!-- <a href="" class="btn btn-outline-dark scroll-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a> -->
                    <td style="width: 50%;">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="NO_REGISTRATION">Nomor Rekam Medis</label>
                            </div>
                            <div class="col-md-8">
                                : <select name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 250px; height: 30PX;" required>
                                    <option value="" selected disabled>--Pilih Nomor Rekam Medis--</option>
                                    <?php foreach ($Biodata as $value) : ?>
                                        <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="THENAME">Nama Lengkap</label>
                                <br><label for="ALLOANAMNESIS_CONTACT">Nama Keluarga</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="THENAME" name="THENAME" style="width: 200px;" readonly>,
                                <input type="text" id="ALLOANAMNESIS_CONTACT" name="ALLOANAMNESIS_CONTACT" style="width: 150px;" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="DATE_OF_BIRTH">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 100px;" readonly>,
                                <label for="GENDER">Jenis Kelamin : </label>
                                <input type="text" id="GENDER" name="GENDER" style="width: 150px;" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="CLASS_ROOM_ID">Ruangan</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="CLASS_ROOM_ID" name="CLASS_ROOM_ID" style="width: 100px;" readonly>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_01">Tanggal Operasi</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="date" id="V_01" name="V_01" style="width: 100px;">
                            </div>
                        </div>
                    </td>
                    <td rowspan="2" style="vertical-align: middle;">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="V_02">Dr. Anastesi <br>Yang Menerangkan</label>
                            </div>
                            <div class="col-md-6">
                                : <input type="text" id="V_02" name="V_02" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_03">Diagnosa</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="V_03" name="V_03" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_04">R/Tindakan</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="V_04" name="V_04" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="V_05">Dr. Operator</label>
                            </div>
                            <div class="col-md-6">
                                : <input type="text" id="V_05" name="V_05" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered mb-0" style="border: 1px; color: black; width: 100%; font-family: 'Times New Roman';">
            <tr>
                <td colspan="3" style="text-align: center; background-color: rgb(194, 193, 193)"><b>INFORMASI ANASTESI</b></td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;"> Anestesi Umum</td>
                <td style="width: 20%;">Hasil yang diharapkan</td>
                <td style="width: 60%;">Total tidak sadar, kemungkinan pemakaian selang pernafasan</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td>Obat disuntikkan ke aliran darah, dihembuskan ke saluran pernafasan atau lewat jalur lain</td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Nyeri pada mulut / tenggorokan, suara serak, perlukaan pada mulut atau gigi, sadar saat sedang dalam anestesi, perlukaan pada pembuluh darah, muntah, aspirasi, abrasi kornea</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;">
                    <p>  Spinal atau Epidural Anestesi<br>
                        &nbsp;&nbsp;&nbsp; Dengan Penenang (Sedasi)<br>
                        &nbsp;&nbsp;&nbsp; Tanpa Penenang</p>
                </td>
                <td style="width: 20%;">Hasil yang diharapkan</td>
                <td style="width: 60%;">Penurunan / hilangnya sensasi / pergerakan di area bagian bawah</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td>Obat disuntikkan melalui jarum / kateter yang dimasukkan ke cairan di dalam spinal canal atau langsung diluar saluran / spinal canal</td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Sakit kepala, sakit pinggang, berdenging ditelinga, kejang, infeksi, sisa nyeri pada anestesi dan cedera pada pembuluh darah "total spinal”</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;">
                    <p>  Blok Syaraf Besar / Kecil<br>
                        &nbsp;&nbsp;&nbsp; Dengan Penenang (Sedasi)<br>
                        &nbsp;&nbsp;&nbsp; Tanpa Penenang</p>
                </td>
                <td style="width: 20%;">Hasil yang diharapkan</td>
                <td style="width: 60%;">Hilang sementara dari sensasi merasakan dan / pergerakan pada area khusus pada alat gerak / kaki</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td>Obat disuntikkan dekat saraf untuk menghasilkan hilangnya sensasi terhadap area operasi</td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Infeksi, kejang, kelemahan, mati rasa yang menetap, nyeri lanjutan / sisa yang membutuhkan tambahan anestesi, perlukaan terhadap pembuluh darah, gagal blok saraf.</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;">
                    <p>  Anestesi Regional Intravena<br>
                        &nbsp;&nbsp;&nbsp; Dengan Penenang (Sedasi)<br>
                        &nbsp;&nbsp;&nbsp; Tanpa Penenang</p>
                </td>
                <td style="width: 20%;">Hasil yang diharapkan</td>
                <td style="width: 60%;">Hilang sementara perasaan dan / pergerakan kaki</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td>Obat disuntikkan ke dalam pembuluh darah vena</td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Infeksi, kejang, mati rasa menetap, nyeri kelanjutan, perlukaan terhadap pembuluh darah</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;">
                    <p>  Tindakan Termonitor Anestesi<br>
                        &nbsp;&nbsp;&nbsp; Dengan Penenang (Sedasi)<br>
                        &nbsp;&nbsp;&nbsp; Tanpa Penenang</p>
                </td>
                <td style="width: 20%;">Hasil yang diharapkan</td>
                <td style="width: 60%;">Menurunnya ansietas dan nyeri, anestesi sebagian atau total</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td>Obat disuntikan ke aliran darah, dihembuskan ke saluran nafas / paru, atau lewat rute lain, menghasilkan tingkat kesadaran "setengah sadar"</td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Tidak sadar, depresi pernafasan, perlukaan terhadap pembuluh darah</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 20%;">
                    <p>  Monitoring Invasif<br>
                        &nbsp;&nbsp;&nbsp; Melalui Arteri<br>
                        &nbsp;&nbsp;&nbsp; Melaui Vena Central<br>
                        &nbsp;&nbsp;&nbsp; Melalui Arteri Pulmoner<br>
                        &nbsp;&nbsp;&nbsp; TEE (Trans Esofagus Echocardiography)<br>
                        &nbsp;&nbsp;&nbsp; Lumbar Drain<br>
                        &nbsp;&nbsp;&nbsp; Spinal dan Mengukur Tekanan Darah</p>
                </td>
                <td style="width: 20%;"></td>
                <td style="width: 60%;">Monitoring selama pelayanan anestesi termasuk pengambilan darah, menyuntikkan obat ke dalam vena</td>
            </tr>
            <tr>
                <td>Teknik</td>
                <td> Memasang tube di pembuluh darah arteri pada tangan atau kaki untuk memonitor tekanan darah<br>
                     Memasang tube di leher untuk memonitor tekanan pada vena<br>
                     Memasang tube di leher untuk memonitor tekanan didalam jantung<br>
                     Memasang probe ultra sound ke dalam tenggorokan untuk memonitor jantung<br>
                     Menempatkan tube diantara rulang belakang untuk mengeluarkan cairan
                </td>
            </tr>
            <tr>
                <td>Resiko (tapi tidak hanya terbatas pada yang disebut)</td>
                <td>Perlukaan terhadap pembuluh darah, kolaps paru, ritme jantung yang ireguler. Nyeri pada mulut atau tenggorokan, suara serak, perlukaan terhadap mulut dan gigi, sakit kepala, sakit punggung, mual dan muntah, perlukaan pada saraf, kelemahan, yang menetap, mati rasa atau nyeri</td>
            </tr>
            <tr>
                <td style="width: 20%;"> Pemberian obat analgetik</td>
                <td style="width: 20%;">Teknik</td>
                <td style="width: 60%;"> Obat disuntikkan ke pembuluh darah/aliran infus, atau melalui rektal atau ditempel di kulit<br>
                     Dapat efek samping berupa gatal, pingsan bahkan kematian</td>
            </tr>
            <tr>
                <td colspan="3">
                    <p style="text-align: justify;">
                        Sudah dijelaskan kepada saya, semua bentuk / macam teknik anestesi termasuk resiko yang bisa timbul dan bahwa tidak ada jaminan terhadap hasil yang dicapai dari tindakan atau terapi yang saya jalani. Meski jarang, dapat timbul komplikasi yang tidak terduga dari setiap teknik anestesi, termasuk kemungkinan infeksi, perdarahan, reaksi obat, bekuan darah, hilangnya sensasi, hilangnya penglihatan, hilangnya fungsi kaki dan tangan, paralysis / lumpuh, stroke, kerusakan otak, serangan jantung atau kematian. <br><br>
                        Saya mengerti bahwa semua resiko diatas, dapat timbul pada semua teknik anestesi dan termasuk resiko tambahan / khusus yang dapat timbul pada teknik anestesi tertentu. <br><br>
                        Saya sudah diberitahu teknik anestesi yang akan digunakan pada operasi saya dan bahwa teknik anestesi yang akan dilakukan ditentukan oleh banyak faktor termasuk kondisi fisik saya, jenis tindakan yang akan digunakan oleh dokter anestesi, berdasarkan pertimbangan tertentu dari dokter, dan juga keinginan saya. <br><br>
                        Sudah dijelaskan kepada saya bahwa terkadang teknik anestesi lokal, dengan atau tanpa sedasi / penenang dapat berjalan tidak sesuai keinginan / harapan sehingga dibutuhkan teknik anestesi lain, termasuk anestesi umum.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; background-color: rgb(194, 193, 193)"><b>PERSETUJUAN TINDAKAN ANESTESI</b></td>
            </tr>
            <tr>
                <td colspan="3">
                    Yang bertanda tangan dibawah ini, saya nama <input type="text" id="V_06" name="V_06" style="width: 200px;"> umur <input type="text" id="V_07" name="V_07" style="width: 100px;"> tahun,
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="T_01" id="T_01_laki-laki" value="0">
                        <label class="form-check-label" for="T_01_laki-laki">laki-laki /</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="T_01" id="T_01_perempuan" value="1">
                        <label class="form-check-label" for="T_01_perempuan">perempuan, </label>
                    </div><br>
                    alamat <input type="text" id="V_08" name="V_08" style="width: 200px;">
                    dengan ini menyatakan persetujuan untuk dilakukan tindakan anestesi terhadap&nbsp;
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="T_02" id="T_02_saya" value="0" onclick="fungsi1_disabled()">
                        <label class="form-check-label" for="T_02_saya">saya / </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="T_02" id="T_02_input" value="1" onclick="fungsi1_enable()">
                        <input type="text" id="V_09" name="V_09" style="width: 150px;" disabled>
                    </div>saya,
                    Yang bernama <input type="text" id="V_10" name="V_10" style="width: 200px;" disabled>
                    Tanggal lahir <input type="date" id="date_of_birth" name="date_of_birth" style="width: 100px;" readonly>
                    Nomor Rekam Medis : <input type="text" id="No_Registration" name="No_Registration" style="width: 200px;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: justify;">
                    Saya menyetujui dan meminta tindakan anestesi diberikan oleh dokter anestesi, melalui tim anestesi, termasuk perawat anestesi, dibawah pengawasan seorang dokter anestesi yang sudah di kredensial untuk melakukan tindakan anestesi di Rumah Sakit Umum Daerah Dr. M. Yunus Bengkulu. Saya juga menyetujui alternatif teknik anestesi, jika dibutuhkan sesuai keputusan tim anestesi. <br><br>
                    Saya juga menyadari bahwa ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran (anestesi) bukanlah keniscayaan melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; background-color: rgb(194, 193, 193)"><b>PERSETUJUAN TRANSFUSI DARAH</b></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="row">
                        <label>Kemungkinan prosedur atau tindakan yang dilakukan ini membutuhkan transfusi darah:</label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_03" id="T_03" value="1">
                                <label class="form-check-label" for="T_03">Sangat tidak mungkin</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_04" id="T_04" value="1">
                                <label class="form-check-label" for="T_04">Mungkin dibutuhkan</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="T_05" id="T_05" value="1">
                                <label class="form-check-label" for="T_05">Sangat memungkinkan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="row">
                            <label>Saya mengerti bahwa ada kemungkinan resiko yang timbul dari transfusi darah, walaupun jarang dan ini termasuk reaksi transfusi, Hepatitis dan AIDS (Acquired Immune Deficiency Syndrome). Beri tanda pada kotak yang sesuai:</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_06" id="T_06" value="1">
                                    <label class="form-check-label" for="T_06">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah sesuai dengan yang ditentukan/ diputuskan oleh dokter anestesi dan dokter lain yang merawat demi kebaikan saya/ keluarga.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_07" id="T_07" value="1">
                                    <label class="form-check-label" for="T_07">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah hanya pada kondisi darurat menyelamatkan hidup saya/ keluarga.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_08" id="T_08" value="1">
                                    <label class="form-check-label" for="T_08">Saya tidak menyetujui pemberian darah atau komponen darah pada kondisi apapun/ sejelek apapun, terhadap diri saya/ keluarga.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3" style="text-align: justify;">
                        <label>Saya menyatakan dan memberitahui bahwa saya sudah membaca / dibacakan formulir ini, bahwa saya mengerti resikonya, alternatif dan hasil hasil / outcome yang diperkirakan dari tindakan anestesi dan atau transfusi darah dan bahwa saya sudah diberi waktu untuk bertanya dan mempertimbangkan keputusan saya.</label>
                    </div>
                    <div class="row mb-3">
                        <table style="justify-content: center; width: 100%;">
                            <tr>
                                <td style="text-align: center; width: 33%;">
                                    <label for="V_11" style="text-align: center;">Saksi 1</label>
                                    <br>
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas()">Clear Signature</button><br>
                                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD" id="TTD">
                                    <br><input type="text" id="V_11" name="V_11" style="width:150px; text-align: center;">
                                </td>
                                <td style="width: 33%;"></td>
                                <td rowspan="2" style="vertical-align: middle; width: 33%;">
                                    <label>Bengkulu, </label>
                                    <input type="date" id="V_12" name="V_12">
                                    <br><br><label for="V_13">Jam</label>
                                    <input type="time" id="V_13" name="V_13">
                                    <br><br>
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas1()">Clear Signature</button><br>
                                    <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_1" id="TTD_1">
                                    <br><input type="text" id="V_14" name="V_14" style="width:150px; text-align: center;">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <label for="V_15" style="text-align: center;">Saksi 2</label>
                                    <br>
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas2()">Clear Signature</button><br>
                                    <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_2" id="TTD_2">
                                    <br><input type="text" id="V_15" name="V_15" style="width:150px; text-align: center;">
                                </td>
                                <td style="text-align: center;">
                                    <label for="V_16">Dokter Anastesi <br>Yang Menerangkan</label>
                                    <br>
                                    <button class="btn btn-outline-success" type="button" onclick="clearCanvas3()">Clear Signature</button><br>
                                    <canvas id="canvas3" width="150" height="90" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" name="TTD_3" id="TTD_3">
                                    <br><input type="text" id="V_16" name="V_16" style="width:150px; text-align: center;">
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
<script>
    $('#NO_REGISTRATION').on('change', (event) => {
        getBiodata(event.target.value).then(Biodata => {
            $('#THENAME').val(Biodata.THENAME);
            $('#ALLOANAMNESIS_CONTACT').val(Biodata.ALLOANAMNESIS_CONTACT);
            $('#DATE_OF_BIRTH').val(Biodata.DATE_OF_BIRTH);
            $('#GENDER').val(Biodata.GENDER);
            $('#CLASS_ROOM_ID').val(Biodata.CLASS_ROOM_ID);
            $('#date_of_birth').val(Biodata.DATE_OF_BIRTH);
            $('#No_Registration').val(Biodata.NO_REGISTRATION);
        });
    });

    async function getBiodata(BODY_ID) {
        let response = await fetch('/api/databiodata/show/' + BODY_ID)
        let data = await response.json();

        return data;
    }
</script>
<script>
    $(function() {
        fungsi1_disabled();
        $("#T_02_saya").click(fungsi1_disabled);
    });
    $(function() {
        fungsi1_enable();
        $("#T_02_input").click(fungsi1_enable);
    });

    function fungsi1_disabled() {
        if (this.click) {
            $("#V_09, #V_10").attr("disabled", true);
            $("#V_09, #V_10").val("");
        } else {
            $("#V_09, #V_10").removeAttr("disabled");
        }
    }

    function fungsi1_enable() {
        $("#V_09, #V_10").attr("disabled", true);
        if (this.click) {
            $("#V_09, #V_10").removeAttr("disabled");
            $("#V_09").focus();
        } else {
            $("#V_09, #V_10").attr("disabled", true);
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
<?= $this->endSection(); ?>