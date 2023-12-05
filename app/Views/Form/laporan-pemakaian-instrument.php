<?php
$db = db_connect();

foreach ($dataAssessmentformtiga as $row) {
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Laporan Pemakaian Instrumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>css/jquery.signature.css">
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
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.signature.js"></script>
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
</head>

<body>
    <div class="container" style="font-family: 'Times New Roman';">
        <form action="" autocomplete="off">
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
                                <label for="thename">Nama</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="thename" name="thename" style="width: 250px;" value="<?php echo $row->THENAME; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="date_of_birth">Tgl. Lahir</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="date" id="date_of_birth" name="date_of_birth" style="width: 150px;" readonly>&nbsp;
                                <input type="text" id="gender" name="gender" style="width: 100px;" value="<?php echo $row->GENDER; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="no_Registraion">Register</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="no_Registraion" name="no_Registraion" style="width: 150px;" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="class_room_id">Ruang Rawat</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="class_room_id" name="class_room_id" style="width: 150px;" value="<?php echo $row->CLASS_ROOM_ID; ?>" readonly> (Stiker Pasien)
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_05">Nama Set Instrumen</label>&nbsp;
                                : <input type="text" id="v_05" name="v_05" style="width: 500px;" required>
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
                                    <td><input type="text" id="v_06" name="v_06" style="width: 300px;"></td>
                                    <td><input type="text" id="v_07" name="v_07" style="width: 300px;"></td>
                                    <td><input type="text" id="v_08" name="v_08" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2. </td>
                                    <td>Duck klam</td>
                                    <td><input type="text" id="v_09" name="v_09" style="width: 300px;"></td>
                                    <td><input type="text" id="v_10" name="v_10" style="width: 300px;"></td>
                                    <td><input type="text" id="v_11" name="v_11" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3. </td>
                                    <td>Tangki mess no.</td>
                                    <td><input type="text" id="v_12" name="v_12" style="width: 300px;"></td>
                                    <td><input type="text" id="v_13" name="v_13" style="width: 300px;"></td>
                                    <td><input type="text" id="v_14" name="v_14" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4. </td>
                                    <td>Pinset anatomi B/S</td>
                                    <td><input type="text" id="v_15" name="v_15" style="width: 300px;"></td>
                                    <td><input type="text" id="v_16" name="v_16" style="width: 300px;"></td>
                                    <td><input type="text" id="v_17" name="v_17" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5. </td>
                                    <td>Pinset Chirugis B/S</td>
                                    <td><input type="text" id="v_18" name="v_18" style="width: 300px;"></td>
                                    <td><input type="text" id="v_19" name="v_19" style="width: 300px;"></td>
                                    <td><input type="text" id="v_20" name="v_20" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6. </td>
                                    <td>Needle holder</td>
                                    <td><input type="text" id="v_21" name="v_21" style="width: 300px;"></td>
                                    <td><input type="text" id="v_22" name="v_22" style="width: 300px;"></td>
                                    <td><input type="text" id="v_23" name="v_23" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7. </td>
                                    <td>Nald heating kulit</td>
                                    <td><input type="text" id="v_24" name="v_24" style="width: 300px;"></td>
                                    <td><input type="text" id="v_25" name="v_25" style="width: 300px;"></td>
                                    <td><input type="text" id="v_26" name="v_26" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8. </td>
                                    <td>Nald heating otot</td>
                                    <td><input type="text" id="v_27" name="v_27" style="width: 300px;"></td>
                                    <td><input type="text" id="v_28" name="v_28" style="width: 300px;"></td>
                                    <td><input type="text" id="v_29" name="v_29" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9. </td>
                                    <td>Gunting jaringan</td>
                                    <td><input type="text" id="v_30" name="v_30" style="width: 300px;"></td>
                                    <td><input type="text" id="v_31" name="v_31" style="width: 300px;"></td>
                                    <td><input type="text" id="v_32" name="v_32" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">10. </td>
                                    <td>Gunting benang</td>
                                    <td><input type="text" id="v_33" name="v_33" style="width: 300px;"></td>
                                    <td><input type="text" id="v_34" name="v_34" style="width: 300px;"></td>
                                    <td><input type="text" id="v_35" name="v_35" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">11. </td>
                                    <td>Gunting Kassa</td>
                                    <td><input type="text" id="v_36" name="v_36" style="width: 300px;"></td>
                                    <td><input type="text" id="v_37" name="v_37" style="width: 300px;"></td>
                                    <td><input type="text" id="v_38" name="v_38" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">12. </td>
                                    <td>Klem preparer</td>
                                    <td><input type="text" id="v_39" name="v_39" style="width: 300px;"></td>
                                    <td><input type="text" id="v_40" name="v_40" style="width: 300px;"></td>
                                    <td><input type="text" id="v_41" name="v_41" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">13. </td>
                                    <td>Klem arteri/mosquito</td>
                                    <td><input type="text" id="v_42" name="v_42" style="width: 300px;"></td>
                                    <td><input type="text" id="v_43" name="v_43" style="width: 300px;"></td>
                                    <td><input type="text" id="v_44" name="v_44" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">14. </td>
                                    <td>Klem arteri/mosquito</td>
                                    <td><input type="text" id="v_45" name="v_45" style="width: 300px;"></td>
                                    <td><input type="text" id="v_46" name="v_46" style="width: 300px;"></td>
                                    <td><input type="text" id="v_47" name="v_47" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">15. </td>
                                    <td>Klem kocher</td>
                                    <td><input type="text" id="v_48" name="v_48" style="width: 300px;"></td>
                                    <td><input type="text" id="v_49" name="v_49" style="width: 300px;"></td>
                                    <td><input type="text" id="v_50" name="v_50" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">16. </td>
                                    <td>allis klem </td>
                                    <td><input type="text" id="v_51" name="v_51" style="width: 300px;"></td>
                                    <td><input type="text" id="v_52" name="v_52" style="width: 300px;"></td>
                                    <td><input type="text" id="v_53" name="v_53" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">17. </td>
                                    <td>Klem Miculicz</td>
                                    <td><input type="text" id="v_54" name="v_54" style="width: 300px;"></td>
                                    <td><input type="text" id="v_55" name="v_55" style="width: 300px;"></td>
                                    <td><input type="text" id="v_56" name="v_56" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">18. </td>
                                    <td>Langen haag</td>
                                    <td><input type="text" id="v_57" name="v_57" style="width: 300px;"></td>
                                    <td><input type="text" id="v_58" name="v_58" style="width: 300px;"></td>
                                    <td><input type="text" id="v_59" name="v_059" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">19. </td>
                                    <td>Haag kecil</td>
                                    <td><input type="text" id="v_60" name="v_60" style="width: 300px;"></td>
                                    <td><input type="text" id="v_61" name="v_61" style="width: 300px;"></td>
                                    <td><input type="text" id="v_62" name="v_62" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">20. </td>
                                    <td>Haag besar</td>
                                    <td><input type="text" id="v_63" name="v_63" style="width: 300px;"></td>
                                    <td><input type="text" id="v_64" name="v_64" style="width: 300px;"></td>
                                    <td><input type="text" id="v_65" name="v_65" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">21. </td>
                                    <td>Bengkok</td>
                                    <td><input type="text" id="v_66" name="v_66" style="width: 300px;"></td>
                                    <td><input type="text" id="v_67" name="v_67" style="width: 300px;"></td>
                                    <td><input type="text" id="v_68" name="v_68" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">22. </td>
                                    <td>Kom B/S</td>
                                    <td><input type="text" id="v_69" name="v_69" style="width: 300px;"></td>
                                    <td><input type="text" id="v_70" name="v_70" style="width: 300px;"></td>
                                    <td><input type="text" id="v_71" name="v_71" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">23. </td>
                                    <td>Kasa besar</td>
                                    <td><input type="text" id="v_72" name="v_72" style="width: 300px;"></td>
                                    <td><input type="text" id="v_73" name="v_73" style="width: 300px;"></td>
                                    <td><input type="text" id="v_74" name="v_74" style="width: 200px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">24. </td>
                                    <td>Kasa kecil</td>
                                    <td><input type="text" id="v_75" name="v_75" style="width: 300px;"></td>
                                    <td><input type="text" id="v_76" name="v_76" style="width: 300px;"></td>
                                    <td><input type="text" id="v_77" name="v_77" style="width: 200px;"></td>
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
                                <textarea id="v_78" name="v_78" style="width: 100%; height: 80px;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_79">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_79" name="v_79" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_80">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_80" name="v_80" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_81">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="v_81" name="v_81" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <textarea id="v_82" name="v_82" style="width: 100%; height: 80px;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_83">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_83" name="v_83" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_84">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_84" name="v_84" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_85">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="v_85" name="v_85" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <textarea id="v_86" name="v_86" style="width: 100%; height: 80px;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_87">Alat / Item</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_87" name="v_87" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="v_88">Load</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="text" id="v_88" name="v_88" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="v_89">Tanggal Steril</label>
                            </div>
                            <div class="col-md-10">
                                : <input type="date" id="v_89" name="v_89" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row">
                            <table style="justify-content: center; width: 100%;">
                                <tr>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_90" style="text-align: center;">Perawat Instrumen</label>
                                        <br>
                                        <div id="sig"></div>
                                        <br>( <input type="text" id="v_90" name="v_90" style="width: 150px;"> )
                                        <br>Tanda tangan dan nama lengkap
                                    </td>
                                    <td style="text-align: center; width: 50%;">
                                        <label for="v_91" style="text-align: center;">Perawat Sirkuler</label>
                                        <br>
                                        <div id="sig1"></div>
                                        <br>( <input type="text" id="v_91" name="v_91" style="width: 150px;"> )
                                        <br>Tanda tangan dan nama lengkap
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>