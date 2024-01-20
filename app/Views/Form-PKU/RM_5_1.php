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
    <title>ASESMEN KEPERAWATAN RAWAT INAP PASIEN DEWASA</title>
</head>

<body>
    <form action="" autocomplete="off" style="vertical-align:middle; font-family:'Times New Roman'">
        <div class="container">
            <h6 style="text-align:right"><b>RM5.1</b></h6>
            <table class="table table-bordered border-black">
                <tr style="vertical-align:middle; margin:0px">
                    <td colspan="2">
                        <div class="row">
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
                            <div class="col-md-4">
                                <div class="container" style="height:130px; border: 1px solid black; border-radius:5px">
                                    <h5 style="text-align:center; margin-top:60px">Label Identitas Pasien</h5>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <h5><b>ASESMEN KEPERAWATAN RAWAT INAP PASIEN DEWASA</b></h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-3">Alergi</div>
                            <div class="col-4">
                                : <input class="form-check-input" type="radio" name="T_01" id="T_01_0" value="0">
                                <label class="form-check-label" for="T_01_0">Tidak Ada</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" name="T_01" id="T_01_1" value="1">
                                <label class="form-check-label" for="T_01_1">Ya, Jelaskan</label>
                                <input type="text" id="V_01" name="V_01" style="width: 250px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <label for="V_02" class="col-sm-3 col-form-label">Masuk rawat inap tanggal </label>
                            <div class="col-auto">:</div>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="V_02" name="V_02">
                            </div>
                            <label for="V_03" class="col-sm-1 col-form-label">Jam :</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" id="V_03" name="V_03">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1">
                            <label for="V_04" class="col-sm-auto col-form-label"><b>Keluhan Utama :</b></label>
                            <div class="col">
                                <textarea class="form-control" name="V_04" id="V_04" rows="2"></textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1">
                            <label for="V_05" class="col-sm-auto col-form-label"><b>Riwayat Penyakit Sekarang :</b></label>
                            <div class="col">
                                <textarea class="form-control" name="V_05" id="V_05" rows="2"></textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1">
                            <label for="V_06" class="col-sm-auto col-form-label"><b>Riwayat Penyakit Dahulu :</b></label>
                            <div class="col">
                                <textarea class="form-control" name="V_06" id="V_06" rows="2"></textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>A. Skrining Gizi</b></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">Asesmen Nutrisi Pasien Dewasa <i>(Malnutrition Universal Screening Tool)</i></div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="V_07">TB :</label>
                                    <input type="text" id="V_07" name="V_07" style="width: 70px;"> Cm
                                </div>
                                <div class="col-3">
                                    <label for="V_08">BB :</label>
                                    <input type="text" id="V_08" name="V_08" style="width: 70px;"> Kg
                                </div>
                                <div class="col-3">
                                    <label for="V_09">LLA :</label>
                                    <input type="text" id="V_09" name="V_09" style="width: 70px;"> Cm
                                </div>
                            </div>
                            <table class="table table-bordered border-black">
                                <tr>
                                    <td style="text-align: center;"><b>PENILAIAN</b></td>
                                    <td style="text-align: center; width:20%"><b>SKOR</b></td>
                                    <td rowspan="5">
                                        <div class="row">
                                            <div class="col">Risiko Malnutrisi:</div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="T_02" id="T_02_0" value="0">
                                                    <label class="form-check-label" for="T_02_0">Risiko rendah, skor : 0</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="T_02" id="T_02_1" value="1">
                                                    <label class="form-check-label" for="T_02_1">Risiko sedang, skor: 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="T_02" id="T_02_2" value="2">
                                                    <label class="form-check-label" for="T_02_2">Risiko tinggi, skor: ≥2</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IMT</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_03" id="T_03" onchange="myFunction()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Presentase Kehilangan BB yang tidak diharapkan</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_04" id="T_04" onchange="myFunction()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Efek dari penyakit yang diderita</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_05" id="T_05" onchange="myFunction()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total Skor</td>
                                    <td>
                                        <input class="form-control" type="number" name="T_06" id="T_06" readonly>
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col">Bila risiko malnutrisi sedang (skor 1) dan tinggi (skor ≥ 2) DPJP wajib konsul kepada ahli gizi</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>B. Skrining Nyeri</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col">
                                    Apakah pasien merasakan nyeri :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_07" id="T_07_0" value="0">
                                        <label class="form-check-label" for="T_07_0">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_07" id="T_07_1" value="1">
                                        <label class="form-check-label" for="T_07_1">Ya, bila ya lanjutkan penilaian : </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    Onset :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_08" id="T_08_0" value="0">
                                        <label class="form-check-label" for="T_08_0">Akut</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_08" id="T_08_1" value="1">
                                        <label class="form-check-label" for="T_08_1">Kronik</label>
                                    </div>
                                </div>
                                <div class="col">Asesmen Nyeri dengan :</div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="V_10">P :</label>
                                    <input type="text" id="V_10" name="V_10" style="width: 100px;">
                                </div>
                                <div class="col-2">
                                    <label for="V_11">Q :</label>
                                    <input type="text" id="V_11" name="V_11" style="width: 100px;">
                                </div>
                                <div class="col-2">
                                    <label for="V_12">R :</label>
                                    <input type="text" id="V_12" name="V_12" style="width: 100px;">
                                </div>
                                <div class="col-2">
                                    <label for="V_13">S :</label>
                                    <input type="text" id="V_13" name="V_13" style="width: 100px;">
                                </div>
                                <div class="col-2">
                                    <label for="V_14">T :</label>
                                    <input type="text" id="V_14" name="V_14" style="width: 100px;">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col">
                                Asesmen ulang nyeri tiap :
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_09" id="T_09_0" value="0">
                                    <label class="form-check-label" for="T_09_0">Nyeri ringan tiap 8 jam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_09" id="T_09_1" value="1">
                                    <label class="form-check-label" for="T_09_1">Nyeri sedang tiap 4 jam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_09" id="T_09_2" value="2">
                                    <label class="form-check-label" for="T_09_2">Nyeri berat tiap 1 jam</label>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                Penatalaksanaan Nyeri :
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_010" id="T_010_0" value="0">
                                    <label class="form-check-label" for="T_010_0">Skala nyeri ringan penatalaksanaan dilakukan oleh perawat, bila tidak teratasi dilaporkan DPJP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_010" id="T_010_1" value="1">
                                    <label class="form-check-label" for="T_010_1">Skala nyeri sedang , dilaporkan DPJP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_010" id="T_010_2" value="2">
                                    <label class="form-check-label" for="T_010_2">Skala nyeri berat ≥ 7 lapor pada DPJP, mengusulkan konsul pada tim nyeri</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-2"><b>C. Risiko Jatuh</b></div>
                            <div class="col-3">
                                <label for="V_15">Skor : </label>
                                <input type="text" id="V_15" name="V_15" style="width: 200px;">
                            </div>
                            <div class="col">
                                <label for="V_16">Kategori : </label>
                                <input type="text" id="V_16" name="V_16" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>D. Skrining Fungsional - Indeks Barthel</b></div>
                        </div>
                        <div class="container">
                            <table class="table table-bordered border-black">
                                <tr style="text-align: center;">
                                    <td><b>Faktor Ketergantungan</b></td>
                                    <td style="width: 15%;"><b>Skor</b></td>
                                    <td><b>Faktor Ketergantungan</b></td>
                                    <td style="width: 15%;"><b>Skor</b></td>
                                </tr>
                                <tr>
                                    <td>1. Pesonal hyigiene</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_011" id="T_011" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                    <td>6. Memakai pakaian</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_012" id="T_012" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. Mandi</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_013" id="T_013" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                    <td>7. Kontrol BAK</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_014" id="T_014" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. Makan</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_015" id="T_015" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                    <td>8. Kontrol BAB</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_016" id="T_016" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4. Toileting </td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_017" id="T_017" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                    <td>9. Ambulasi menggunakan kruk</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_018" id="T_018" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5. Menaiki tangga</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_019" id="T_019" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                    <td>10. Transfer kursi - tempat tidur</td>
                                    <td>
                                        <select class="form-select number" type="number" name="T_020" id="T_020" onchange="myFunction1()">
                                            <option selected>Pilih</option>
                                            <option value="0">0 = Tidak mampu</option>
                                            <option value="1">1 = Perlu bantuan</option>
                                            <option value="2">2 = Mandiri</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="row mb-2">
                                <label for="T_021" class="col-sm-2 col-form-label">Skor Total :</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="T_021" name="T_021" readonly>
                                </div>
                                <label for="V_17" class="col-sm-2 col-form-label">Kategori :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="V_17" name="V_17">
                                </div>
                            </div>
                            <table class="table table-bordered border-black">
                                <tr>
                                    <td width="30%">
                                        <input class="form-check-input" type="radio" name="T_022" id="T_022_0" value="0">
                                        <label class="form-check-label" for="T_022_0">Ketergantungan total</label>
                                    </td>
                                    <td width="20%">Skor 0-4</td>
                                    <td rowspan="5">
                                        <ul>
                                            <li>Skor sedang sampai dengan total: laporkan ke DPJP atau konsul ke rehabilitasi medis</li>
                                            <li>Skor minimal sampai dengan ringan evaluasi setiap 3 hari atau bila ada perubahan tingkat ketergantungan</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="radio" name="T_022" id="T_022_1" value="1">
                                        <label class="form-check-label" for="T_022_1">Ketergantungan berat</label>
                                    </td>
                                    <td>Skor 5-8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="radio" name="T_022" id="T_022_2" value="2">
                                        <label class="form-check-label" for="T_022_2">Ketergantungan sedang</label>
                                    </td>
                                    <td>Skor 9-11</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="radio" name="T_022" id="T_022_3" value="3">
                                        <label class="form-check-label" for="T_022_3">Ketergantungan ringan</label>
                                    </td>
                                    <td>Skor 12-19</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="radio" name="T_022" id="T_022_4" value="4">
                                        <label class="form-check-label" for="T_022_4">Ketergantungan minimal</label>
                                    </td>
                                    <td>Skor 20</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>E. Psikologi</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">Pasien dalam kondisi:</div>
                                <div class="col-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_023" id="T_023_0" value="0">
                                        <label class="form-check-label" for="T_023_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_023" id="T_023_1" value="1">
                                        <label class="form-check-label" for="T_023_1">Depresi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_023" id="T_023_2" value="2">
                                        <label class="form-check-label" for="T_023_2">Sulit / suka melawan perintah</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_023" id="T_023_3" value="3">
                                        <label class="form-check-label" for="T_023_3">Khawatir</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_023" id="T_023_4" value="4">
                                        <label class="form-check-label" for="T_023_4">Berpotensi menyakiti diri atau orang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Hubungan dengan anggota keluarga:</div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_024" id="T_024_0" value="0">
                                        <label class="form-check-label" for="T_024_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_024" id="T_024_1" value="1">
                                        <label class="form-check-label" for="T_024_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Keinginan khusus pasien:</div>
                                <div class="col-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_025" id="T_025_0" value="0">
                                        <label class="form-check-label" for="T_025_0">Tidak ingin dijenguk</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_025" id="T_025_1" value="1">
                                        <label class="form-check-label" for="T_025_1">Tidak ada</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_025" id="T_025_2" value="2">
                                        <label class="form-check-label" for="T_025_2">Ingin dirawat perawat sesuai jenis kelamin</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_025" id="T_025_3" value="3">
                                        <label class="form-check-label" for="T_025_3">Lain - lain:</label>
                                        <input type="text" id="V_18" name="V_18" style="width:355px">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-auto">Hambatan sosial, budaya, dan ekonomi dalam penyembuhan penyakit :</div>
                                <div class="col">
                                    <input type="text" id="V_19" name="V_19" style="width:500px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">Larangan dari keyakinan yang dianut</div>
                                <div class="col">
                                    : <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_026" id="T_026_0" value="0">
                                        <label class="form-check-label" for="T_026_0">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_026" id="T_026_1" value="1">
                                        <label class="form-check-label" for="T_026_1">Ada, sebutkan:</label>
                                        <input type="text" id="V_20" name="V_20" style="width:390px">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">Mitos budaya setempat</div>
                                <div class="col">
                                    : <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_027" id="T_027_0" value="0">
                                        <label class="form-check-label" for="T_027_0">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_027" id="T_027_1" value="1">
                                        <label class="form-check-label" for="T_027_1">Ada, sebutkan:</label>
                                        <input type="text" id="V_21" name="V_21" style="width:390px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>F. Kebutuhan Cairan</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="V_22">Minum :</label>
                                    <input type="text" id="V_22" name="V_22" style="width:100px"> cc/h
                                </div>
                                <div class="col-4">
                                    Perasaan haus berlebihan :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_028" id="T_028_0" value="0">
                                        <label class="form-check-label" for="T_028_0">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_028" id="T_028_1" value="1">
                                        <label class="form-check-label" for="T_028_1">Tidak</label>
                                    </div>
                                </div>
                                <div class="col">
                                    Oedema :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_029" id="T_029_0" value="0">
                                        <label class="form-check-label" for="T_029_0">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_029" id="T_029_1" value="1">
                                        <label class="form-check-label" for="T_029_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    Mukosa mulut :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_030" id="T_030_0" value="0">
                                        <label class="form-check-label" for="T_030_0">Kering</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_030" id="T_030_1" value="1">
                                        <label class="form-check-label" for="T_030_1">Normal</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    Turgor kulit :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_031" id="T_031_0" value="0">
                                        <label class="form-check-label" for="T_031_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_031" id="T_031_1" value="1">
                                        <label class="form-check-label" for="T_031_1">Sedang</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_031" id="T_031_2" value="2">
                                        <label class="form-check-label" for="T_031_2">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>G. Kebutuhan Elimiunasi</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="V_23">Frekwensi BAK :</label>
                                    <input type="text" id="V_23" name="V_23" style="width:80px"> x/h
                                </div>
                                <div class="col-3">
                                    <label for="V_24">Jumlah :</label>
                                    <input type="text" id="V_24" name="V_24" style="width:80px"> cc,
                                </div>
                                <div class="col">
                                    <label for="V_25">Keluhan :</label>
                                    <input type="text" id="V_25" name="V_25" style="width:200px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="V_26">Frekwensi BAK :</label>
                                    <input type="text" id="V_26" name="V_26" style="width:80px"> x/h
                                </div>
                                <div class="col-2">
                                    <label for="V_27">Warna :</label>
                                    <input type="text" id="V_27" name="V_27" style="width:80px">
                                </div>
                                <div class="col-2">
                                    <label for="V_28">Bau :</label>
                                    <input type="text" id="V_28" name="V_28" style="width:80px">
                                </div>
                                <div class="col">
                                    <label for="V_29">Konsistensi :</label>
                                    <input type="text" id="V_29" name="V_29" style="width:80px">
                                </div>
                                <div class="col">
                                    <label for="V_30">Terakhir BAB :</label>
                                    <input type="text" id="V_30" name="V_30" style="width:80px">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>H. Kebutuhan Persepsi Sensori</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-4">
                                    Penglihatan :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_032" id="T_032_0" value="0">
                                        <label class="form-check-label" for="T_032_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_032" id="T_032_1" value="1">
                                        <label class="form-check-label" for="T_032_1">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-1">Pendengaran</div>
                                <div class="col-3">
                                    : <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_0" value="0">
                                        <label class="form-check-label" for="T_033_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_1" value="1">
                                        <label class="form-check-label" for="T_033_1">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    Penciuman :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_0" value="0">
                                        <label class="form-check-label" for="T_034_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_1" value="1">
                                        <label class="form-check-label" for="T_034_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Pengecapan :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_035" id="T_035_0" value="0">
                                        <label class="form-check-label" for="T_035_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_035" id="T_035_1" value="1">
                                        <label class="form-check-label" for="T_035_1">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-1">Perabaan</div>
                                <div class="col-3">
                                    : <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_0" value="0">
                                        <label class="form-check-label" for="T_036_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_1" value="1">
                                        <label class="form-check-label" for="T_036_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>I. Kebutuhan Komunikasi</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">Berbicara</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_037" id="T_037_0" value="0">
                                        <label class="form-check-label" for="T_037_0">Lancar</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_037" id="T_037_1" value="1">
                                        <label class="form-check-label" for="T_037_1">Tidak : </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="V_31">Jika tidak penyebabnya apa : </label>
                                    <input type="text" id="V_31" name="V_31" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Pembicaraan</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_038" id="T_038_0" value="0">
                                        <label class="form-check-label" for="T_038_0">Koheren</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_038" id="T_038_1" value="1">
                                        <label class="form-check-label" for="T_038_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Disorientasi Menarik</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_039" id="T_039_0" value="0">
                                        <label class="form-check-label" for="T_039_0">Ya</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_039" id="T_039_1" value="1">
                                        <label class="form-check-label" for="T_039_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Diri</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_040" id="T_040_0" value="0">
                                        <label class="form-check-label" for="T_040_0">Ya</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_040" id="T_040_1" value="1">
                                        <label class="form-check-label" for="T_040_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Apatis</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_0" value="0">
                                        <label class="form-check-label" for="T_041_0">Ya</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_1" value="1">
                                        <label class="form-check-label" for="T_041_1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>J. Kebutuhan Spiritual</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-4">
                                    <label for="V_32">Kegiatan ibadah sehari-hari yang dilakukan</label>
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col">
                                    <input type="text" id="V_32" name="V_32" style="width:500px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Membutuhkan bantuan dalam beribadah
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_042" id="T_042_0" value="0">
                                        <label class="form-check-label" for="T_042_0">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_042" id="T_042_1" value="1">
                                        <label class="form-check-label" for="T_042_1">Tidak, </label>
                                    </div>
                                    <label for="V_33">jika ya dalam bentuk :</label>
                                    <input type="text" id="V_33" name="V_33" style="width:210px">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>K. Kebutuhan Istirahat</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="V_34">Jumlah jam tidur :</label>
                                    <input type="text" id="V_34" name="V_34" style="width:70px"> jam,
                                </div>
                                <div class="col">
                                    Penggunaan obat tidur :
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_043" id="T_043_0" value="0">
                                        <label class="form-check-label" for="T_043_0">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_043" id="T_043_1" value="1">
                                        <label class="form-check-label" for="T_043_1">Ya </label>
                                    </div>
                                    <label for="V_35">jika Ya, jenisnya :</label>
                                    <input type="text" id="V_35" name="V_35" style="width:200px">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>L. Keadaan Umum</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-2">
                                    <label for="V_36">Kesadaran</label>
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <input type="text" id="V_36" name="V_36" style="width:100px"> GCS
                                </div>
                                <div class="col-2">
                                    <label for="V_37">E :</label>
                                    <input type="text" id="V_37" name="V_37" style="width:100px">
                                </div>
                                <div class="col-2">
                                    <label for="V_38">M :</label>
                                    <input type="text" id="V_38" name="V_38" style="width:100px">
                                </div>
                                <div class="col-2">
                                    <label for="V_39">V :</label>
                                    <input type="text" id="V_39" name="V_39" style="width:100px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-2">Kondisi umum</div>
                                <div class="col-auto">:</div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_0" value="0">
                                        <label class="form-check-label" for="T_044_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_1" value="1">
                                        <label class="form-check-label" for="T_044_1">Tampak Sakit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_2" value="2">
                                        <label class="form-check-label" for="T_044_2">Sesak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_3" value="3">
                                        <label class="form-check-label" for="T_044_3">Pucat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_4" value="4">
                                        <label class="form-check-label" for="T_044_4">Lemah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_5" value="5">
                                        <label class="form-check-label" for="T_044_5">Kejang</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_6" value="6">
                                        <label class="form-check-label" for="T_044_6">Lainnya :</label>
                                        <input type="text" id="V_40" name="V_40" style="width:150px">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <label for="V_41">TD :</label>
                                    <input type="text" id="V_41" name="V_41" style="width:70px">/
                                    <input type="text" id="V_42" name="V_42" style="width:70px">mmHg,
                                </div>
                                <div class="col-2">
                                    <label for="V_43">N :</label>
                                    <input type="text" id="V_43" name="V_43" style="width:70px">x/menit,
                                </div>
                                <div class="col-2">
                                    <label for="V_44">S :</label>
                                    <input type="text" id="V_44" name="V_44" style="width:70px">°C,
                                </div>
                                <div class="col-2">
                                    <label for="V_45">R :</label>
                                    <input type="text" id="V_45" name="V_45" style="width:70px">x/menit,
                                </div>
                                <div class="col-2">
                                    <label for="V_46">SpO2 :</label>
                                    <input type="text" id="V_46" name="V_46" style="width:70px">%,
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>M. Pemeriksaan Fisik</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">Kepala</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_045" id="T_045_0" value="0">
                                    <label class="form-check-label" for="T_045_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_045" id="T_045_1" value="1">
                                    <label class="form-check-label" for="T_045_1">Kelainan : </label>
                                    <input type="text" id="V_47" name="V_47" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Mata</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_046" id="T_046_0" value="0">
                                    <label class="form-check-label" for="T_046_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_046" id="T_046_1" value="1">
                                    <label class="form-check-label" for="T_046_1">Kelainan : </label>
                                    <input type="text" id="V_48" name="V_48" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Telinga</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_047" id="T_047_0" value="0">
                                    <label class="form-check-label" for="T_047_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_047" id="T_047_1" value="1">
                                    <label class="form-check-label" for="T_047_1">Kelainan : </label>
                                    <input type="text" id="V_49" name="V_49" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Hidung</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_048" id="T_048_0" value="0">
                                    <label class="form-check-label" for="T_048_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_048" id="T_048_1" value="1">
                                    <label class="form-check-label" for="T_048_1">Kelainan : </label>
                                    <input type="text" id="V_50" name="V_50" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Tenggorok</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_049" id="T_049_0" value="0">
                                    <label class="form-check-label" for="T_049_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_049" id="T_049_1" value="1">
                                    <label class="form-check-label" for="T_049_1">Kelainan : </label>
                                    <input type="text" id="V_51" name="V_51" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Leher</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_050" id="T_050_0" value="0">
                                    <label class="form-check-label" for="T_050_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_050" id="T_050_1" value="1">
                                    <label class="form-check-label" for="T_050_1">Kelainan : </label>
                                    <input type="text" id="V_52" name="V_52" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Dada</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_051" id="T_051_0" value="0">
                                    <label class="form-check-label" for="T_051_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_051" id="T_051_1" value="1">
                                    <label class="form-check-label" for="T_051_1">Kelainan : </label>
                                    <input type="text" id="V_53" name="V_53" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Jantung</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_052" id="T_052_0" value="0">
                                    <label class="form-check-label" for="T_052_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_052" id="T_052_1" value="1">
                                    <label class="form-check-label" for="T_052_1">Kelainan : </label>
                                    <input type="text" id="V_54" name="V_54" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Paru-paru</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_053" id="T_053_0" value="0">
                                    <label class="form-check-label" for="T_053_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_053" id="T_053_1" value="1">
                                    <label class="form-check-label" for="T_053_1">Kelainan : </label>
                                    <input type="text" id="V_55" name="V_55" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Perut</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_054" id="T_054_0" value="0">
                                    <label class="form-check-label" for="T_054_0">Normal</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_054" id="T_054_1" value="1">
                                    <label class="form-check-label" for="T_054_1">Kelainan : </label>
                                    <input type="text" id="V_56" name="V_56" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Anggota gerak atas</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_055" id="T_055_0" value="0">
                                    <label class="form-check-label" for="T_055_0">Oedema</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_055" id="T_055_1" value="1">
                                    <label class="form-check-label" for="T_055_1">Tidak Oedema : </label>
                                    <input type="text" id="V_57" name="V_57" style="width:200px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Anggota gerak bawah</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_056" id="T_056_0" value="0">
                                    <label class="form-check-label" for="T_056_0">Oedema</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_056" id="T_056_1" value="1">
                                    <label class="form-check-label" for="T_056_1">Tidak Oedema : </label>
                                    <input type="text" id="V_58" name="V_58" style="width:200px">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><b>N. Alat Yang Terpasang</b></div>
                        </div>
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="T_057" id="T_057" value="1">
                                        <label class="form-check-label" for="T_057">O2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="T_058" id="T_058" value="1">
                                        <label class="form-check-label" for="T_058">Infus</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="T_059" id="T_059" value="1">
                                        <label class="form-check-label" for="T_059">DC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="T_060" id="T_060" value="1">
                                        <label class="form-check-label" for="T_060">NGT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="T_061" id="T_061" value="1">
                                        <label class="form-check-label" for="T_061">Lainnya : </label>
                                        <input type="text" id="V_59" name="V_59" style="width:200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="row mb-5">
                <div class="col-6"></div>
                <div class="col">
                    <div class="row mb-1">
                        <div class="col">Surakarta,
                            <input type="date" id="V_60" name="V_60" style="width:200px">
                        </div>
                    </div>
                    <div class="row mb-1" style="text-align: center;">
                        <div class="col">Perawat yang mengkaji</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col">
                            Dinas :
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="T_062" id="T_062_0" value="0">
                                <label class="form-check-label" for="T_062_0">Pagi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="T_062" id="T_062_1" value="1">
                                <label class="form-check-label" for="T_062_1">Sore</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="T_062" id="T_062_2" value="2">
                                <label class="form-check-label" for="T_062_2">Malam</label>
                            </div>
                            Jam:
                            <input type="time" id="V_61" name="V_61" style="width:100px">
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col">
                            <button class="btn btn-outline-success" type="button" onclick="clearCanvas()">Clear Signature</button><br>
                            <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                            <input type="hidden" name="TTD" id="TTD"><br>
                            ( <input type="text" id="V_62" name="V_62" style="width:250px; text-align: center;"> )<br>
                            Ttd & Nama Terang
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    Beri tanda (√ )pada kotak() yang tersedia<br>
                    *Coret yang tidak perlu
                </div>
                <div class="col" style="text-align: right;">Rev. 1/VII/2019</div>
            </div>
        </div>
    </form>
</body>

</html>