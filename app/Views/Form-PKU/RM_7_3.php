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
    <title>RESIKO JATUH HUMPTY DUMPTY UNTUK PEDIATRIK</title>
</head>

<body>
    <form action="" autocomplete="off" style="vertical-align:middle; font-family:'Times New Roman'">
        <div class="container">
            <h6 style="text-align:right"><b>RM 7.3</b></h6>
            <div class="row mb-2">
                <div class="col-md-2" style="text-align:center">
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
            </div>
            <table id="tbody" class="table table-bordered border-black">
                <thead style="text-align:center; vertical-align:middle">
                    <tr>
                        <td rowspan="2" colspan="2" width="30%">NIFAS</td>
                        <td colspan="3" width="35%">
                            <div class="row">
                                <label for="V_01" class="col-sm-3 col-form-label">RUANG</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_01" name="V_01">
                                </div>
                            </div>
                        </td>
                        <td colspan="2" width="35%">
                            <div class="row">
                                <label for="V_02" class="col-sm-3 col-form-label">NO. RM</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_02" name="V_02">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="row">
                                <label for="V_03" class="col-sm-3 col-form-label">NAMA</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_03" name="V_03">
                                </div>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="row">
                                <label for="V_04" class="col-sm-3 col-form-label">UMUR</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_04" name="V_04">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>TGL</td>
                        <td>KEADAAN UMUM</td>
                        <td>MAMMAE/LAKTASI</td>
                        <td>UTERUS</td>
                        <td>LOCHEA</td>
                        <td>KOMPLIKASI</td>
                        <td>TTD/NAMA TERANG</td>
                    </tr>
                </thead>
                <tbody style="text-align:center; vertical-align:middle">
                    <tr>
                        <td>
                            <input type="date" class="form-control" id="V_05" name="V_05">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_06" name="V_06">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_07" name="V_07">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_08" name="V_08">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_09" name="V_09">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_10" name="V_10">
                        </td>
                        <td>
                            <canvas id="canvas1" width="100" height="90" style="border:1px solid #000;"></canvas>
                            <input type="hidden" name="TTD_1" id="TTD_1"><br>
                            <input type="text" class="form-control" id="V_11" name="V_11" style="text-align: center;">
                        </td>
                    </tr>
                </tbody>
                <tfoot style="text-align:center">
                    <td colspan="7">
                        <button type="button" class="btn btn-primary" onclick="addRow('tbody')">Tambah Baris</button>
                    </td>
                </tfoot>
            </table>
        </div>
    </form>
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
    <script type="text/javascript">
        // JavaScript Document
        var i = 11;
        var canvas = 1;
        var TTD = 1;

        function addRow(tableID) {

            i1 = i + 1;
            i2 = i + 2;
            i3 = i + 3;
            i4 = i + 4;
            i5 = i + 5;
            i6 = i + 6;
            i7 = i + 7;
            canvas1 = canvas + 1;
            TTD1 = TTD + 1;

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html('<div class="form-group"><input type="date" class="form-control" id="V_' + i1 + '" name="V_' + i1 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i3 + '" name="V_' + i3 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i4 + '" name="V_' + i4 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i5 + '" name="V_' + i5 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i6 + '" name="V_' + i6 + '"></div>'))
                .append($("<td>").html('<canvas width="100" height="90" style="border:1px solid #000;" id="canvas' + canvas1 + '"/><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD1 + '"></div><div class="form-group"><input type="text" class="form-control" style="text-align: center;" id="V_' + i7 + '" name="V_' + i7 + '"></div>'))
            )
            i += 7;
            canvas += 1;
            TTD += 1;
        }
    </script>
</body>

</html>