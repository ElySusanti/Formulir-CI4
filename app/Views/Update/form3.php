<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Laporan Pemakaian Instrumen</title>
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
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir/form3" role="button">
        <i class="bi bi-arrow-left"> Back</i>
    </a>
    <div class="container" style="font-family: 'Times New Roman';">
        <form action="<?= base_url('formulir/update/' . $detail['id']); ?>" method="post" autocomplete="off">
            <?= csrf_field(); ?>
            <input type="hidden" id="FORM" name="FORM" value="F3">
            <input type="hidden" id="id" name="id" value="<?= $detail['id']; ?>">
            <div class="row">
                <div class="col md-6 text-start">
                    <h3><b>RSUD Dr. M. YUNUS BENGKULU</b></h3>
                </div>
                <div class="col md-6 text-end">
                    <h3><b>RM. 10 Lanjutan 4</b></h3>
                </div>
            </div>
            <table class="table table-bordered" style="border: 3px solid black; width: 100%;">
                <tr style="border: 3px solid black;">
                    <td style="vertical-align: middle; text-align: center; width: 60%; font-size: 25px;"><b>LAPORAN PEMAKAIAN INSTRUMEN BEDAH</b></td>
                    <td style="width: 40%; text-align: left; border: 3px solid black;">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="THENAME">Nama</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="THENAME" name="THENAME" style="width: 250px;" value="<?= $detail['THENAME']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="DATE_OF_BIRTH">Tgl. Lahir</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 100px;" value="<?= $detail['DATE_OF_BIRTH']; ?>" readonly>&nbsp;
                                <input type="text" id="GENDER" name="GENDER" style="width: 150px;" value="<?= $detail['GENDER']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="NO_REGISTRATION">Register</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 250px;" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="CLASS_ROOM_ID">Ruang Rawat</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="CLASS_ROOM_ID" name="CLASS_ROOM_ID" style="width: 150px;" value="<?= $detail['CLASS_ROOM_ID']; ?>" readonly> (Stiker Pasien)
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_01">Nama Set Instrumen</label>&nbsp;
                                : <input type="text" id="V_01" name="V_01" style="width: 500px;" value="<?= $detail['V_01']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <table class="table table-bordered" align="center" style="border: 1px; color: black; width: 97%;">
                                <tr style="text-align: center;">
                                    <td style="width: 5%;"><b>No</b></td>
                                    <td style="width: 17%;"><b>Nama Instrumen</b></td>
                                    <td><b>Jumlah Pre Operasi</b></td>
                                    <td><b>Jumlah Post Operasi</b></td>
                                    <td><b>Keterangan</b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1. </td>
                                    <td>Klem Pencuci</td>
                                    <td><input type="text" id="V_02" name="V_02" style="width: 300px;" value="<?= $detail['V_02']; ?>"></td>
                                    <td><input type="text" id="V_03" name="V_03" style="width: 300px;" value="<?= $detail['V_03']; ?>"></td>
                                    <td><input type="text" id="V_04" name="V_04" style="width: 200px;" value="<?= $detail['V_04']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2. </td>
                                    <td>Duck klam</td>
                                    <td><input type="text" id="V_05" name="V_05" style="width: 300px;" value="<?= $detail['V_05']; ?>"></td>
                                    <td><input type="text" id="V_06" name="V_06" style="width: 300px;" value="<?= $detail['V_06']; ?>"></td>
                                    <td><input type="text" id="V_07" name="V_07" style="width: 200px;" value="<?= $detail['V_07']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3. </td>
                                    <td>Tangki mess no.</td>
                                    <td><input type="text" id="V_08" name="V_08" style="width: 300px;" value="<?= $detail['V_08']; ?>"></td>
                                    <td><input type="text" id="V_09" name="V_09" style="width: 300px;" value="<?= $detail['V_09']; ?>"></td>
                                    <td><input type="text" id="V_10" name="V_10" style="width: 200px;" value="<?= $detail['V_10']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4. </td>
                                    <td>Pinset anatomi B/S</td>
                                    <td><input type="text" id="V_11" name="V_11" style="width: 300px;" value="<?= $detail['V_11']; ?>"></td>
                                    <td><input type="text" id="V_12" name="V_12" style="width: 300px;" value="<?= $detail['V_12']; ?>"></td>
                                    <td><input type="text" id="V_13" name="V_13" style="width: 200px;" value="<?= $detail['V_13']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5. </td>
                                    <td>Pinset Chirugis B/S</td>
                                    <td><input type="text" id="V_14" name="V_14" style="width: 300px;" value="<?= $detail['V_14']; ?>"></td>
                                    <td><input type="text" id="V_15" name="V_15" style="width: 300px;" value="<?= $detail['V_15']; ?>"></td>
                                    <td><input type="text" id="V_16" name="V_16" style="width: 200px;" value="<?= $detail['V_16']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6. </td>
                                    <td>Needle holder</td>
                                    <td><input type="text" id="V_17" name="V_17" style="width: 300px;" value="<?= $detail['V_17']; ?>"></td>
                                    <td><input type="text" id="V_18" name="V_18" style="width: 300px;" value="<?= $detail['V_18']; ?>"></td>
                                    <td><input type="text" id="V_19" name="V_19" style="width: 200px;" value="<?= $detail['V_19']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7. </td>
                                    <td>Nald heating kulit</td>
                                    <td><input type="text" id="V_20" name="V_20" style="width: 300px;" value="<?= $detail['V_20']; ?>"></td>
                                    <td><input type="text" id="V_21" name="V_21" style="width: 300px;" value="<?= $detail['V_21']; ?>"></td>
                                    <td><input type="text" id="V_22" name="V_22" style="width: 200px;" value="<?= $detail['V_22']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8. </td>
                                    <td>Nald heating otot</td>
                                    <td><input type="text" id="V_23" name="V_23" style="width: 300px;" value="<?= $detail['V_23']; ?>"></td>
                                    <td><input type="text" id="V_24" name="V_24" style="width: 300px;" value="<?= $detail['V_24']; ?>"></td>
                                    <td><input type="text" id="V_25" name="V_25" style="width: 200px;" value="<?= $detail['V_25']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9. </td>
                                    <td>Gunting jaringan</td>
                                    <td><input type="text" id="V_26" name="V_26" style="width: 300px;" value="<?= $detail['V_26']; ?>"></td>
                                    <td><input type="text" id="V_27" name="V_27" style="width: 300px;" value="<?= $detail['V_27']; ?>"></td>
                                    <td><input type="text" id="V_28" name="V_28" style="width: 200px;" value="<?= $detail['V_28']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">10. </td>
                                    <td>Gunting benang</td>
                                    <td><input type="text" id="V_29" name="V_29" style="width: 300px;" value="<?= $detail['V_29']; ?>"></td>
                                    <td><input type="text" id="V_30" name="V_30" style="width: 300px;" value="<?= $detail['V_30']; ?>"></td>
                                    <td><input type="text" id="V_31" name="V_31" style="width: 200px;" value="<?= $detail['V_31']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">11. </td>
                                    <td>Gunting Kassa</td>
                                    <td><input type="text" id="V_32" name="V_32" style="width: 300px;" value="<?= $detail['V_32']; ?>"></td>
                                    <td><input type="text" id="V_33" name="V_33" style="width: 300px;" value="<?= $detail['V_33']; ?>"></td>
                                    <td><input type="text" id="V_34" name="V_34" style="width: 200px;" value="<?= $detail['V_34']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">12. </td>
                                    <td>Klem preparer</td>
                                    <td><input type="text" id="V_35" name="V_35" style="width: 300px;" value="<?= $detail['V_35']; ?>"></td>
                                    <td><input type="text" id="V_36" name="V_36" style="width: 300px;" value="<?= $detail['V_36']; ?>"></td>
                                    <td><input type="text" id="V_37" name="V_37" style="width: 200px;" value="<?= $detail['V_37']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">13. </td>
                                    <td>Klem arteri/mosquito</td>
                                    <td><input type="text" id="V_38" name="V_38" style="width: 300px;" value="<?= $detail['V_38']; ?>"></td>
                                    <td><input type="text" id="V_39" name="V_39" style="width: 300px;" value="<?= $detail['V_39']; ?>"></td>
                                    <td><input type="text" id="V_40" name="V_40" style="width: 200px;" value="<?= $detail['V_40']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">14. </td>
                                    <td>Klem arteri/mosquito</td>
                                    <td><input type="text" id="V_41" name="V_41" style="width: 300px;" value="<?= $detail['V_41']; ?>"></td>
                                    <td><input type="text" id="V_42" name="V_42" style="width: 300px;" value="<?= $detail['V_42']; ?>"></td>
                                    <td><input type="text" id="V_43" name="V_43" style="width: 200px;" value="<?= $detail['V_43']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">15. </td>
                                    <td>Klem kocher</td>
                                    <td><input type="text" id="V_44" name="V_44" style="width: 300px;" value="<?= $detail['V_44']; ?>"></td>
                                    <td><input type="text" id="V_45" name="V_45" style="width: 300px;" value="<?= $detail['V_45']; ?>"></td>
                                    <td><input type="text" id="V_46" name="V_46" style="width: 200px;" value="<?= $detail['V_46']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">16. </td>
                                    <td>allis klem </td>
                                    <td><input type="text" id="V_47" name="V_47" style="width: 300px;" value="<?= $detail['V_47']; ?>"></td>
                                    <td><input type="text" id="V_48" name="V_48" style="width: 300px;" value="<?= $detail['V_48']; ?>"></td>
                                    <td><input type="text" id="V_49" name="V_49" style="width: 200px;" value="<?= $detail['V_49']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">17. </td>
                                    <td>Klem Miculicz</td>
                                    <td><input type="text" id="V_50" name="V_50" style="width: 300px;" value="<?= $detail['V_50']; ?>"></td>
                                    <td><input type="text" id="V_51" name="V_51" style="width: 300px;" value="<?= $detail['V_51']; ?>"></td>
                                    <td><input type="text" id="V_52" name="V_52" style="width: 200px;" value="<?= $detail['V_52']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">18. </td>
                                    <td>Langen haag</td>
                                    <td><input type="text" id="V_53" name="V_53" style="width: 300px;" value="<?= $detail['V_53']; ?>"></td>
                                    <td><input type="text" id="V_54" name="V_54" style="width: 300px;" value="<?= $detail['V_54']; ?>"></td>
                                    <td><input type="text" id="V_55" name="V_55" style="width: 200px;" value="<?= $detail['V_55']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">19. </td>
                                    <td>Haag kecil</td>
                                    <td><input type="text" id="V_56" name="V_56" style="width: 300px;" value="<?= $detail['V_56']; ?>"></td>
                                    <td><input type="text" id="V_57" name="V_57" style="width: 300px;" value="<?= $detail['V_57']; ?>"></td>
                                    <td><input type="text" id="V_58" name="V_58" style="width: 200px;" value="<?= $detail['V_58']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">20. </td>
                                    <td>Haag besar</td>
                                    <td><input type="text" id="V_59" name="V_59" style="width: 300px;" value="<?= $detail['V_59']; ?>"></td>
                                    <td><input type="text" id="V_60" name="V_60" style="width: 300px;" value="<?= $detail['V_60']; ?>"></td>
                                    <td><input type="text" id="V_61" name="V_61" style="width: 200px;" value="<?= $detail['V_61']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">21. </td>
                                    <td>Bengkok</td>
                                    <td><input type="text" id="V_62" name="V_62" style="width: 300px;" value="<?= $detail['V_62']; ?>"></td>
                                    <td><input type="text" id="V_63" name="V_63" style="width: 300px;" value="<?= $detail['V_63']; ?>"></td>
                                    <td><input type="text" id="V_64" name="V_64" style="width: 200px;" value="<?= $detail['V_64']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">22. </td>
                                    <td>Kom B/S</td>
                                    <td><input type="text" id="V_65" name="V_65" style="width: 300px;" value="<?= $detail['V_65']; ?>"></td>
                                    <td><input type="text" id="V_66" name="V_66" style="width: 300px;" value="<?= $detail['V_66']; ?>"></td>
                                    <td><input type="text" id="V_67" name="V_67" style="width: 200px;" value="<?= $detail['V_67']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">23. </td>
                                    <td>Kasa besar</td>
                                    <td><input type="text" id="V_68" name="V_68" style="width: 300px;" value="<?= $detail['V_68']; ?>"></td>
                                    <td><input type="text" id="V_69" name="V_69" style="width: 300px;" value="<?= $detail['V_69']; ?>"></td>
                                    <td><input type="text" id="V_70" name="V_70" style="width: 200px;" value="<?= $detail['V_70']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">24. </td>
                                    <td>Kasa kecil</td>
                                    <td><input type="text" id="V_71" name="V_71" style="width: 300px;" value="<?= $detail['V_71']; ?>"></td>
                                    <td><input type="text" id="V_72" name="V_72" style="width: 300px;" value="<?= $detail['V_72']; ?>"></td>
                                    <td><input type="text" id="V_73" name="V_73" style="width: 200px;" value="<?= $detail['V_73']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">25. </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">26. </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <b>KONDISI STERILISASI</b><br>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <textarea id="V_74" name="V_74" style="width: 100%; height: 80px;"><?= $detail['V_74']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_75">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_75" name="V_75" style="width: 300px;" value="<?= $detail['V_75']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_76">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_76" name="V_76" style="width: 300px;" value="<?= $detail['V_76']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_77">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="V_77" name="V_77" style="width: 300px;" value="<?= $detail['V_77']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <textarea id="V_78" name="V_78" style="width: 100%; height: 80px;"><?= $detail['V_78']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_79">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_79" name="V_79" style="width: 300px;" value="<?= $detail['V_79']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_80">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_80" name="V_80" style="width: 300px;" value="<?= $detail['V_80']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_81">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="V_81" name="V_81" style="width: 300px;" value="<?= $detail['V_81']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <textarea id="V_82" name="V_82" style="width: 100%; height: 80px;"><?= $detail['V_82']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_83">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_83" name="V_83" style="width: 300px;" value="<?= $detail['V_83']; ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="V_84">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="V_84" name="V_84" style="width: 300px;" value="<?= $detail['V_84']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="V_85">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="V_85" name="V_85" style="width: 300px;" value="<?= $detail['V_85']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="V_86" style="text-align: center;">Perawat Instrumen</label>
                                        <br>
                                        <button class="btn btn-outline-success" type="button" onclick="clearCanvas()">Clear Signature</button><br>
                                        <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                                        <input type="hidden" name="TTD" id="TTD" value="<?= $detail['TTD']; ?>">
                                        <br>( <input type="text" id="V_86" name="V_86" style="width: 150px; text-align: center;" value="<?= $detail['V_86']; ?>"> )
                                        <br>Tanda tangan dan nama lengkap
                                    </td>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="V_87" style="text-align: center;">Perawat Sirkuler</label>
                                        <br>
                                        <button class="btn btn-outline-success" type="button" onclick="clearCanvas1()">Clear Signature</button><br>
                                        <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                                        <input type="hidden" name="TTD_1" id="TTD_1" value="<?= $detail['TTD_1']; ?>">
                                        <br>( <input type="text" id="V_87" name="V_87" style="width: 150px; text-align: center;" value="<?= $detail['V_87']; ?>"> )
                                        <br>Tanda tangan dan nama lengkap
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-success" type="submit" name="submit" value="Update" onclick="saveSignatureData(); saveSignatureData1()">
            </div>
        </form>
    </div>
    <script>
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var imageUrl = '<?= $detail['TTD'] ?>';
        var img = new Image();
        img.src = imageUrl;
        img.onload = function() {
            context.drawImage(img, 0, 0, canvas.width, canvas.height);
        };

        function clearCanvas() {
            context.clearRect(0, 0, canvas.width, canvas.height);
        }
    </script>
    <script>
        var canvas1 = document.getElementById('canvas1');
        var context1 = canvas1.getContext('2d');
        var imageUrl1 = '<?= $detail['TTD_1'] ?>';
        var img1 = new Image();
        img1.src = imageUrl1;
        img1.onload = function() {
            context1.drawImage(img1, 0, 0, canvas1.width, canvas1.height);
        };

        function clearCanvas1() {
            context1.clearRect(0, 0, canvas1.width, canvas1.height);
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

        function saveSignatureData1() {
            const canvasData1 = canvas1.toDataURL('image/png');

            canvasDataInput1.value = canvasData1;
        }
    </script>
</body>

</html>