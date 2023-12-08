<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Persetujuan Anastesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 200px;
            height: 100px;
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
    <a class="btn btn-outline-dark sticky-top" href="/Formulir" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
    </a>
    <div class="container">
        <?php foreach ($dataAssessmentformsatu as $row) : ?>
            <form action="<?php echo site_url('formulir/simpan') ?>" method="post" autocomplete="off" class="mt-3" style="font-family: 'Times New Roman';">
                <h3 style="text-align: right;"><b>RM. 08 Lanjutan 3 </b></h3>
                <table class="table table-bordered mb-0" style="border: 1px; color: black;width: 100%;">
                    <tbody>
                        <tr>
                            <td style="width: 50%; text-align: center; vertical-align: middle;">
                                <h3><b>PERSETUJUAN TINDAKAN <br>ANASTESI</b></h3>
                            </td>
                            <td style="width: 50%;">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="no_Registration">Nomor Rekam Medis</label>
                                    </div>
                                    <div class="col-md-8">
                                        : <input type="text" id="no_Registration" name="no_Registration" style="width: 200px;" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="thename">Nama Lengkap</label>
                                        <br><label for="alloanamnesis_contact">Nama Keluarga</label>
                                    </div>
                                    <div class="col-md-9">
                                        : <input type="text" id="thename" name="thename" style="width: 150px;" value="<?php echo $row->THENAME; ?>" readonly>,
                                        <input type="text" id="alloanamnesis_contact" name="alloanamnesis_contact" style="width: 150px;" value="<?php echo $row->ALLOANAMNESIS_CONTACT; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="date_of_birth">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-9">
                                        : <input type="date" id="date_of_birth" name="date_of_birth" style="width: 100px;" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>,
                                        <label for="gender">Jenis Kelamin : </label>
                                        <input type="text" id="gender" name="gender" style="width: 150px;" value="<?php echo $row->GENDER; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="class_room_id">Ruangan</label>
                                    </div>
                                    <div class="col-md-7">
                                        : <input type="text" id="class_room_id" name="class_room_id" style="width: 100px;" value="<?php echo $row->CLASS_ROOM_ID; ?>" readonly>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="v_06">Tanggal Operasi</label>
                                    </div>
                                    <div class="col-md-7">
                                        : <input type="date" id="v_06" name="v_06" style="width: 100px;">
                                    </div>
                                </div>
                            </td>
                            <td rowspan="2" style="vertical-align: middle;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="v_07">Dr. Anastesi <br>Yang Menerangkan</label>
                                    </div>
                                    <div class="col-md-6">
                                        : <input type="text" id="v_07" name="v_07" style="width: 200px;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="v_08">Diagnosa</label>
                                    </div>
                                    <div class="col-md-7">
                                        : <input type="text" id="v_08" name="v_08" style="width: 200px;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="v_09">R/Tindakan</label>
                                    </div>
                                    <div class="col-md-7">
                                        : <input type="text" id="v_09" name="v_09" style="width: 200px;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="v_10">Dr. Operator</label>
                                    </div>
                                    <div class="col-md-6">
                                        : <input type="text" id="v_10" name="v_10" style="width: 200px;">
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
                            Yang bertanda tangan dibawah ini, saya nama <input type="text" id="v_11" name="v_11" style="width: 200px;"> umur <input type="text" id="v_12" name="v_12" style="width: 100px;"> tahun,
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02_laki-laki" value="0">
                                <label class="form-check-label" for="t_02_laki-laki">laki-laki /</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02_perempuan" value="1">
                                <label class="form-check-label" for="t_02_perempuan">perempuan, </label>
                            </div><br>
                            alamat <input type="text" id="v_13" name="v_13" style="width: 200px;">
                            dengan ini menyatakan persetujuan untuk dilakukan tindakan anestesi terhadap&nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_03" id="t_03_saya" value="0" onclick="fungsi1_disabled()">
                                <label class="form-check-label" for="t_03_saya">saya / </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_03" id="t_03_input" value="1" onclick="fungsi1_enable()">
                                <input type="text" id="v_14" name="v_14" style="width: 150px;" disabled>
                            </div>saya,
                            Yang bernama <input type="text" id="v_15" name="v_15" style="width: 200px;" disabled>
                            Tanggal lahir <input type="date" id="date_of_birth" name="date_of_birth" style="width: 100px;" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
                            Nomor Rekam Medis : <input type="text" id="no_Registration" name="no_Registration" style="width: 200px;" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
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
                                <label for="">Kemungkinan prosedur atau tindakan yang dilakukan ini membutuhkan transfusi darah:</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="t_04" id="t_04_sangattidakmungkin">
                                        <label class="form-check-label" for="t_04_sangattidakmungkin">Sangat tidak mungkin</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="t_04" id="t_04_mungkin">
                                        <label class="form-check-label" for="t_04_mungkin">Mungkin dibutuhkan</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="t_04" id="t_04_sangatmemungkinkan">
                                        <label class="form-check-label" for="t_04_sangatmemungkinkan">Sangat memungkinkan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="row">
                                    <label for="">Saya mengerti bahwa ada kemungkinan resiko yang timbul dari transfusi darah, walaupun jarang dan ini termasuk reaksi transfusi, Hepatitis dan AIDS (Acquired Immune Deficiency Syndrome). Beri tanda pada kotak yang sesuai:</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_05" id="t_05_opsisatu">
                                            <label class="form-check-label" for="t_05_opsisatu">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah sesuai dengan yang ditentukan/ diputuskan oleh dokter anestesi dan dokter lain yang merawat demi kebaikan saya/ keluarga.</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_05" id="t_05_opsidua">
                                            <label class="form-check-label" for="t_05_opsidua">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah hanya pada kondisi darurat menyelamatkan hidup saya/ keluarga.</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="t_05" id="t_05_opsitiga">
                                            <label class="form-check-label" for="t_05_opsitiga">Saya tidak menyetujui pemberian darah atau komponen darah pada kondisi apapun/ sejelek apapun, terhadap diri saya/ keluarga.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3" style="text-align: justify;">
                                <label for="">Saya menyatakan dan memberitahui bahwa saya sudah membaca / dibacakan formulir ini, bahwa saya mengerti resikonya, alternatif dan hasil hasil / outcome yang diperkirakan dari tindakan anestesi dan atau transfusi darah dan bahwa saya sudah diberi waktu untuk bertanya dan mempertimbangkan keputusan saya.</label>
                            </div>
                            <div class="row mb-3">
                                <table style="justify-content: center; width: 100%;">
                                    <tr>
                                        <td style="text-align: center; width: 33%;">
                                            <label for="v_18" style="text-align: center;">Saksi 1</label>
                                            <br><br>
                                            <div id="sig"></div>
                                            <br><input type="text" id="v_18" name="v_18" width="100px">
                                        </td>
                                        <td style="width: 33%;"></td>
                                        <td rowspan="2" style="vertical-align: middle; width: 33%;">
                                            <label for="">Bengkulu, </label>
                                            <input type="date" id="v_19" name="v_19">
                                            <br><br><label for="v_20">Jam</label>
                                            <input type="time" id="v_20" name="v_20">
                                            <br><br>
                                            <div id="sig3"></div>
                                            <br><input type="text" id="v_21" name="v_21" width="100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <label for="v_22" style="text-align: center;">Saksi 2</label>
                                            <br><br>
                                            <div id="sig1"></div>
                                            <br><input type="text" id="v_22" name="v_22" width="100px">
                                        </td>
                                        <td style="text-align: center;">
                                            <label for="v_23">Dokter Anastesi <br>Yang Menerangkan</label>
                                            <br>
                                            <div id="sig2"></div>
                                            <br><input type="text" id="v_23" name="v_23" width="100px">
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
        <?php endforeach; ?>
    </div>
    <script>
        $(function() {
            fungsi1_disabled();
            $("#t_03_saya").click(fungsi1_disabled);
        });
        $(function() {
            fungsi1_enable();
            $("#t_03_input").click(fungsi1_enable);
        });

        function fungsi1_disabled() {
            if (this.click) {
                $("#v_14, #v_15").attr("disabled", true);
                $("#v_14, #v_15").val("");
            } else {
                $("#v_14, #v_15").removeAttr("disabled");
            }
        }

        function fungsi1_enable() {
            $("#v_14, #v_15").attr("disabled", true);
            if (this.click) {
                $("#v_14, #v_15").removeAttr("disabled");
                $("#v_14").focus();
            } else {
                $("#v_14, #v_15").attr("disabled", true);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>