<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Detail Formulir</title>
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
    <script type="text/javascript" src="<?= base_url() ?>/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/jquery.signature.css">
</head>

<body>
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir/form1" role="button">
        <i class="bi bi-arrow-left"> Back</i>
    </a>
    <div class="container">
        <form class="mt-3" style="font-family: 'Times New Roman';">
            <input type="hidden" id="FORM" name="FORM" value="F1">
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
                                    <label for="NO_REGISTRATION">Nomor Rekam Medis</label>
                                </div>
                                <div class="col-md-8">
                                    : <input type="text" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 250px;" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="THENAME">Nama Lengkap</label>
                                    <br><label for="ALLOANAMNESIS_CONTACT">Nama Keluarga</label>
                                </div>
                                <div class="col-md-9">
                                    : <input type="text" id="THENAME" name="THENAME" style="width: 150px;" value="<?= $detail['THENAME']; ?>" readonly>,
                                    <input type="text" id="ALLOANAMNESIS_CONTACT" name="ALLOANAMNESIS_CONTACT" style="width: 150px;" value="<?= $detail['ALLOANAMNESIS_CONTACT']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="DATE_OF_BIRTH">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-9">
                                    <!-- : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 100px;" value="<= $detail['DATE_OF_BIRTH']; ?>" readonly>, -->
                                    <label for="GENDER">Jenis Kelamin : </label>
                                    <input type="text" id="GENDER" name="GENDER" style="width: 150px;" value="<?= $detail['GENDER']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="CLASS_ROOM_ID">Ruangan</label>
                                </div>
                                <div class="col-md-7">
                                    : <input type="text" id="CLASS_ROOM_ID" name="CLASS_ROOM_ID" style="width: 100px;" value="<?= $detail['CLASS_ROOM_ID']; ?>" readonly>
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
                                    : <input type="date" id="V_01" name="V_01" style="width: 100px;" value="<?= $detail['V_01']; ?>" readonly>
                                </div>
                            </div>
                        </td>
                        <td rowspan="2" style="vertical-align: middle;">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="V_02">Dr. Anastesi <br>Yang Menerangkan</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="text" id="V_02" name="V_02" style="width: 200px;" value="<?= $detail['V_02']; ?>" readonly>
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
                                    : <input type="text" id="V_03" name="V_03" style="width: 200px;" value="<?= $detail['V_03']; ?>" readonly>
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
                                    : <input type="text" id="V_04" name="V_04" style="width: 200px;" value="<?= $detail['V_04']; ?>" readonly>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="V_05">Dr. Operator</label>
                                </div>
                                <div class="col-md-6">
                                    : <input type="text" id="V_05" name="V_05" style="width: 200px;" value="<?= $detail['V_05']; ?>" readonly>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered mb-3" style="border: 1px; color: black; width: 100%; font-family: 'Times New Roman';">
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
                        Yang bertanda tangan dibawah ini, saya nama <input type="text" id="V_06" name="V_06" style="width: 200px;" value="<?= $detail['V_06']; ?>" readonly> umur <input type="text" id="V_07" name="V_07" style="width: 100px;" value="<?= $detail['V_07']; ?>" readonly> tahun,
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="T_01" id="T_01_laki-laki" <?= ($detail['T_01'] == "0" ? 'checked' : ''); ?> disabled>
                            <label for="T_01_laki-laki">laki-laki /</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="T_01" id="T_01_perempuan" <?= ($detail['T_01'] == "1" ? 'checked' : ''); ?> disabled>
                            <label for="T_01_perempuan">perempuan, </label>
                        </div><br>
                        alamat <input type="text" id="V_08" name="V_08" style="width: 200px;" value="<?= $detail['V_08']; ?>" readonly>
                        dengan ini menyatakan persetujuan untuk dilakukan tindakan anestesi terhadap&nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="T_02" id="T_02_saya" <?= ($detail['T_02'] == "0" ? 'checked' : ''); ?> onclick="fungsi1_disabled()" disabled>
                            <label for="T_02_saya">saya / </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="T_02" id="T_02_input" <?= ($detail['T_02'] == "1" ? 'checked' : ''); ?> onclick="fungsi1_enable()" disabled>
                            <input type="text" id="V_09" name="V_09" style="width: 150px;" value="<?= $detail['V_09']; ?>" readonly>
                        </div>saya,
                        Yang bernama <input type="text" id="V_10" name="V_10" style="width: 200px;" value="<?= $detail['V_10']; ?>" readonly>
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
                                    <input class="form-check-input" type="checkbox" name="T_03" id="T_03" <?= ($detail['T_03'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="T_03">Sangat tidak mungkin</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_04" id="T_04" <?= ($detail['T_04'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="T_04">Mungkin dibutuhkan</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_05" id="T_05" <?= ($detail['T_05'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="T_05">Sangat memungkinkan</label>
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
                                        <input class="form-check-input" type="checkbox" name="T_06" id="T_06" <?= ($detail['T_06'] == "1" ? 'checked' : ''); ?> disabled>
                                        <label for="T_06">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah sesuai dengan yang ditentukan/ diputuskan oleh dokter anestesi dan dokter lain yang merawat demi kebaikan saya/ keluarga.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="T_07" id="T_07" <?= ($detail['T_07'] == "1" ? 'checked' : ''); ?> disabled>
                                        <label for="T_07">Saya menyetujui dan mengizinkan untuk menerima darah atau komponen darah hanya pada kondisi darurat menyelamatkan hidup saya/ keluarga.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="T_08" id="T_08" <?= ($detail['T_08'] == "1" ? 'checked' : ''); ?> disabled>
                                        <label for="T_08">Saya tidak menyetujui pemberian darah atau komponen darah pada kondisi apapun/ sejelek apapun, terhadap diri saya/ keluarga.</label>
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
                                        <br><br>
                                        <input id="TTD" value="<?= $detail['TTD']; ?>" disabled>
                                        <br><input type="text" id="V_11" name="V_11" width="100px" style="text-align: center;" value="<?= $detail['V_11']; ?>" readonly>
                                    </td>
                                    <td style="width: 33%;"></td>
                                    <td rowspan="2" style="vertical-align: middle; width: 33%;">
                                        <label>Bengkulu, </label>
                                        <input type="date" id="V_12" name="V_12" value="<?= $detail['V_12']; ?>" readonly>
                                        <br><br><label for="V_13">Jam</label>
                                        <input type="time" id="V_13" name="V_13" value="<?= $detail['V_13']; ?>" readonly>
                                        <br><br>
                                        <input id="TTD_1" value="<?= $detail['TTD_1']; ?>" disabled>
                                        <br><input type="text" id="V_14" name="V_14" width="100px" style="text-align: center;" value="<?= $detail['V_14']; ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        <label for="V_15" style="text-align: center;">Saksi 2</label>
                                        <br><br>
                                        <input id="TTD_2" value="<?= $detail['TTD_2']; ?>" disabled>
                                        <br><input type="text" id="V_15" name="V_15" width="100px" style="text-align: center;" value="<?= $detail['V_15']; ?>" readonly>
                                    </td>
                                    <td style="text-align: center;">
                                        <label for="V_16">Dokter Anastesi <br>Yang Menerangkan</label>
                                        <br>
                                        <input id="TTD_3" value="<?= $detail['TTD_3']; ?>" disabled>
                                        <br><input type="text" id="V_16" name="V_16" width="100px" style="text-align: center;" value="<?= $detail['V_16']; ?>" readonly>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>