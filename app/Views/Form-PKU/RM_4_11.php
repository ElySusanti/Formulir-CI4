<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>ASESMEN MEDIS PASIEN MATA</title>
</head>

<body>
    <div class="container">
        <h6 style="text-align:right">RM. 4.11</h6>
        <form action="" autocomplete="off" style="vertical-align:middle; font-family:'Times New Roman'">
            <h4 style="text-align: center"><b>REKAM MEDIS RAWAT INAP</b></h4>
            <table class="table table-bordered border-black">
                <tr style="vertical-align:middle; margin:0px">
                    <td>
                        <div class="row">
                            <div class="col-md-3" style="text-align:center">
                                <img src="\img\logo_PKU.png" alt="" style="width:90px"><br>
                                <p>SEHAT AMANAH<br>Tanggungjawab-Islami</p>
                            </div>
                            <div class="col">
                                <h4><b>RS PKU MUHAMMADIYAH SAMPANGAN</b></h4>
                                <p>Semanggi RT 02/20 Pasar Kliwon Surakarta<br>
                                    Telp. ( 0271 ) 633894 Fax: 0271- 630229 <br>
                                    Jawa Tengah 57117
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="container" style="height:150px; border: 1px solid black; border-radius:5px">
                                    <h5 style="text-align:center; margin-top:60px">Label Identitas Pasien</h5>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <h5><b>PENGKAJIAN RESTRAIN</b></h5>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <b>Diisi oleh Dokter</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <label for="V_01" class="col-sm-auto col-form-label">Tanggal :</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="V_01" name="V_01">
                            </div>
                            <div class="col-sm-1"></div>
                            <label for="V_02" class="col-sm-1 col-form-label">Jam :</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="V_02" name="V_02">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row mb-3">
                            <div class="col"><b>PENGKAJIAN FISIK DAN MENTAL</b></div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">Kesadaran</div>
                            <div class="col-md-4">
                                : <input type="text" id="V_" name="V_" style="width: 150px;">
                            </div>
                            <div class="col-md-2">Tanda vital</div>
                            <div class="col-md-4">
                                : <input type="text" id="V_" name="V_" style="width: 150px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">Tekanan Darah</div>
                            <div class="col">
                                : <input type="text" id="V_" name="V_" style="width: 70px;">/
                                <input type="text" id="V_" name="V_" style="width: 70px;"> mmHg
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">Pernafasan </div>
                            <div class="col">
                                : <input type="text" id="V_" name="V_" style="width: 150px;"> x/menit
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">Suhu</div>
                            <div class="col">
                                : <input type="text" id="V_" name="V_" style="width: 150px;"> °C
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2">Nadi</div>
                            <div class="col">
                                : <input type="text" id="V_" name="V_" style="width: 150px;"> x/menit
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Hasil observasi *)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Gelisah atau delirium dan berontak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Pasien tidak kooperatif</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Ketidakmampuan dalam mengikuti perintah untuk tidak meninggalkan tempat tidur</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row mb-3">
                            <div class="col">
                                <b>PERTIMBANGAN KLINIS *)</b>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Membahayakan diri sendiri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Membahayakan orang lain</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Gagal meminimalkan penggunaan Restrain</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <b>PENILAIAN DAN ORDER DOKTER *)</b><br>
                                Restrain Non Farmakologi
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Restrain tempat tidur atau bedrail</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Restrain pergelangan tangan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                        <label class="form-check-label" for="T_0">Tangan kanan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                        <label class="form-check-label" for="T_0">Tangan kiri</label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Restrain pergelangan kaki</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                        <label class="form-check-label" for="T_0">Tangan kanan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                        <label class="form-check-label" for="T_0">Tangan kiri</label>
                                    </div>
                                </div>
                                Lain - lain : <input type="text" id="V_" name="V_" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <b>RENCANA PENGKAJIAN LANJUTAN *)</b>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Pengkajian satu jam pertama</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Pengkajian lanjutan tiap dua jam</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Pengkajian dua jam pertama</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Pengkajian lanjutan tiap empat jam</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Observasi Tanda-Tanda Vital (TTV) tiga puluh menit atau satu jam setelah pemberian obat selanjutnya sesuai kondisi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Observasi lanjutan setiap satu jam</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <b>PENDIDIKAN RESTRAIN PASIEN ATAU KELUARGA *)</b>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Menjelaskan alasan penggunaan restrain sebagai prosedur emergensi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Menjelaskan kriteria hasil observasi atau ketentuan penghentian restrain (lihat halam 2)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="T_0" name="T_0" value="1">
                                    <label class="form-check-label" for="T_0">Memberikan informasi atau edukasi kepada pasien atau keluarga alasan penggunaan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align:center">
                            <div class="col">
                                Dijelaskan Oleh,<br>
                                <button class="btn btn-outline-success" type="button" onclick="clearCanvas()">Clear Signature</button><br>
                                <canvas id="canvas" width="200" height="100" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD" id="TTD"><br>
                                ( <input type="text" id="V_27" name="V_27" style="width:250px; text-align: center;"> )<br>
                                TTD dan Nama Terang
                            </div>
                            <div class="col">
                                Yang menerima informasi,<br>
                                <button class="btn btn-outline-success" type="button" onclick="clearCanvas1()">Clear Signature</button><br>
                                <canvas id="canvas1" width="200" height="100" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD_1" id="TTD_1"><br>
                                ( <input type="text" id="V_27" name="V_27" style="width:250px; text-align: center;"> )<br>
                                TTD dan Nama Terang
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
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
</body>

</html>