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
    <title>OBSERVASI BAYI</title>
</head>

<body>
    <form action="" autocomplete="off" style="vertical-align:middle; font-family:'Times New Roman'">
        <div class="container">
            <h6 style="text-align:right"><b>RM 7.5</b></h6>
            <div class="row mb-5" style="text-align:center">
                <div class="col-md-2">
                    <img src="\img\logo_PKU.png" alt="" style="width:90px"><br>
                    <p>SEHAT AMANAH<br>Tanggungjawab-Islami</p>
                </div>
                <div class="col" style="text-align:center">
                    <h4><b>RS PKU MUHAMMADIYAH SAMPANGAN SURAKARTA</b></h4>
                    <p>Semanggi RT 002 / RW 020 Pasar Kliwon<br>
                        Telp 0271-633894 Fax. : 0271-630229 Surakarta
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="container" style="height:130px; border: 1px solid black; border-radius:5px">
                        <h5 style="margin-top:60px">Label Identitas Pasien</h5>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <h3><b>OBSERVASI BAYI</b></h3>
                </div>
            </div>
            <table id="tbody" class="table table-bordered border-black">
                <thead style="text-align:center; vertical-align:middle">
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Susu yang diberikan</th>
                        <th>Banyaknya</th>
                        <th>Kencing</th>
                        <th>Berak</th>
                        <th>Tumpah</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="date" id="V_01" name="V_01">
                        </td>
                        <td>
                            <input class="form-control" type="time" id="V_02" name="V_02">
                        </td>
                        <td>
                            <select class="form-select" type="text" name="V_03" id="V_03">
                                <option selected>Pilih</option>
                                <option value="ASI">ASI</option>
                                <option value="Formula">Formula</option>
                            </select>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="V_04" name="V_04">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="V_05" name="V_05">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="V_06" name="V_06">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="V_07" name="V_07">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="V_08" name="V_08">
                        </td>
                    </tr>
                </tbody>
                <tfoot style="text-align:center">
                    <td colspan="8">
                        <button type="button" class="btn btn-primary" onclick="addRow('tbody')">Tambah Baris</button>
                    </td>
                </tfoot>
            </table>
        </div>
    </form>
    <script type="text/javascript">
        // JavaScript Document
        var i = 10;

        function addRow(tableID) {

            i1 = i + 1;
            i2 = i + 2;
            i3 = i + 3;
            i4 = i + 4;
            i5 = i + 5;
            i6 = i + 6;
            i7 = i + 7;
            i8 = i + 8;

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html('<div class="form-group"><input type="date" class="form-control" id="V_' + i1 + '" name="V_' + i1 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="time" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '"></div>'))
                .append($("<td>").html('<select class="form-select" id="V_' + i3 + '" name="V_' + i3 + '" >\
                        <option selected>Pilih</option> \
                        <option value="ASI">ASI</option> \
                        <option value="Formula">Formula</option> \
                    </select>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i4 + '" name="V_' + i4 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i5 + '" name="V_' + i5 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i6 + '" name="V_' + i6 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i7 + '" name="V_' + i7 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i8 + '" name="V_' + i8 + '"></div>'))
            )
            i += 8;
        }
    </script>
</body>

</html>