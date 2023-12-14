<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Radiologi Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.signature.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
    <a class="btn btn-outline-dark sticky-top" href="/Formulir" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
    </a>
    <div class="container" style="font-family: Verdana;">
        <form action="<?= base_url('formulir/simpan') ?>" method="post" autocomplete="off">
            <table style="width: 100%; margin-top: 10px;">
                <tr>
                    <td>
                        <img src="/img/logo.png" alt="" style="width: 70px;">
                    </td>
                    <td colspan="3" style="text-align: center;">
                        <h4><b>DR. M YUNUS BENGKULU<br>FORMULIR PERMINTAAN PEMERIKSAAN<br>RADIOLOGI</b></h4>
                    </td>
                </tr>
            </table>
            <div class="row mt-3 mb-1">
                <div class="col-md-2" style="text-align: right;">
                    <label for="NO_REGISTRATION">No CM/MR : </label>
                </div>
                <div class="col-md-4">
                    <select name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 250px; height: 30PX;" required>
                        <option value="" selected disabled>--Pilih Nomor Rekam Medis--</option>
                        <?php foreach ($Biodata as $value) : ?>
                            <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2" style="text-align: right;">
                    <label for="THENAME">Nama : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="THENAME" id="THENAME" style="width: 300px;" readonly>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-2" style="text-align: right;">
                    <label for="THEADDRESS">Alamat : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="THEADDRESS" id="THEADDRESS" style="width: 300px;" readonly>
                </div>
                <div class="col-md-2" style="text-align: right;">
                    <label>Umur : </label>
                </div>
                <div class="col-md-4">
                    <input type="number" name="AGEYEAR" id="AGEYEAR" style="width: 50px;" min="0" readonly> Th &nbsp;
                    <input type="number" name="AGEMONTH" id="AGEMONTH" style="width: 50px;" min="0" readonly> Bln &nbsp;
                    <input type="number" name="AGEDAY" id="AGEDAY" style="width: 50px;" min="0" readonly> Hr &nbsp;
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2" style="text-align: right;">
                    <label for="CARA_BAYAR">Cara bayar : </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="CARA_BAYAR" id="CARA_BAYAR" style="width: 200px;" readonly>
                </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row mb-2">
                <div class="col">
                    <label style="color: red;"><b>Lembar Permintaan: 1 dari 1 Urut Lembar Permintaan Pemeriksaan</b></label><br>
                    <label><i>Kode Lembar Permintaan : 20231124142140001710A / No. ID Kunjungan : 2023083119</i></label>
                </div>
                <div class="col-md-3">
                    <div class="box" style="background-color: red; text-align: center; width: 150px; height: 50px;" hidden>Sudah ditransaksikan</div>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-3">
                    <b>Dokter Pengirim :</b>
                </div>
                <div class="col">
                    <input type="text" name="EMPLOYEE_ID" id="EMPLOYEE_ID" style="width: 300px;" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <b>Diagnosis Klinis :</b>
                </div>
                <div class="col">
                    <input type="text" name="description" id="description" style="width: 300px;">
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="patient_category_id" id="patient_category_id">
                    <label class="form-check-label" for="patient_category_id"><b>&nbsp;C &nbsp; Y &nbsp; T &nbsp; O</b></label>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col">
                            <b>Ekstremilitas Bawah :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_001" id="pr_001">
                                <label class="form-check-label" for="pr_001">Fermur AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_002" id="pr_002">
                                <label class="form-check-label" for="pr_002">Ankle Joint</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_003" id="pr_003">
                                <label class="form-check-label" for="pr_003">Genu AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_004" id="pr_004">
                                <label class="form-check-label" for="pr_004">Cruris AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_005" id="pr_005">
                                <label class="form-check-label" for="pr_005">Panggul AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_006" id="pr_006">
                                <label class="form-check-label" for="pr_006">Calcaneus</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_007" id="pr_007">
                                <label class="form-check-label" for="pr_007">HIP Join</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_008" id="pr_008">
                                <label class="form-check-label" for="pr_008">Pedis</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_009" id="pr_009">
                                <label class="form-check-label" for="pr_009">Vertebra</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <b>Thorax :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_035" id="pr_035
                                ">
                                <label class="form-check-label" for="pr_035
                                ">Thoraks satu posisi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_037" id="pr_037">
                                <label class="form-check-label" for="pr_037">Thoraks 2 posisi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_038" id="pr_038">
                                <label class="form-check-label" for="pr_038">Top Lordotik</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <b>Tulang Belakang :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_042" id="pr_042">
                                <label class="form-check-label" for="pr_042">Cervical 2 posisi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_043" id="pr_043">
                                <label class="form-check-label" for="pr_043">Cervical 3 posisi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_044" id="pr_044">
                                <label class="form-check-label" for="pr_044">Vertebra</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_045" id="pr_045">
                                <label class="form-check-label" for="pr_045">Lumbo Sacral</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <b>Gigi :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_053" id="pr_053">
                                <label class="form-check-label" for="pr_053">Foto gigi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_046" id="pr_046">
                                <label class="form-check-label" for="pr_046">Panoramic</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col">
                            <b>Ekstremilitas Atas :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_012" id="pr_012">
                                <label class="form-check-label" for="pr_012">Manus</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_013" id="pr_013">
                                <label class="form-check-label" for="pr_013">Scapula / Clavicula</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_014" id="pr_014">
                                <label class="form-check-label" for="pr_014">Antebrachi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_015" id="pr_015">
                                <label class="form-check-label" for="pr_015">Brachi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_016" id="pr_016">
                                <label class="form-check-label" for="pr_016">Clavicula</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_017" id="pr_017">
                                <label class="form-check-label" for="pr_017">Wrist Join</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_018" id="pr_018">
                                <label class="form-check-label" for="pr_018">Bahu AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_019" id="pr_019">
                                <label class="form-check-label" for="pr_019">Bone Survey</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_020" id="pr_020">
                                <label class="form-check-label" for="pr_020">Vertebra</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <b>Abdomen :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_055" id="pr_055">
                                <label class="form-check-label" for="pr_055">BNO Bayi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_056" id="pr_056">
                                <label class="form-check-label" for="pr_056">BNO AP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_057" id="pr_057">
                                <label class="form-check-label" for="pr_057">BNO AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_058" id="pr_058">
                                <label class="form-check-label" for="pr_058">Costae</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_074" id="pr_074">
                                <label class="form-check-label" for="pr_074">Abdomen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_036" id="pr_036">
                                <label class="form-check-label" for="pr_036">Abdomen 3 posisi</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <b>Lain -lain :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_032" id="pr_032">
                                <label class="form-check-label" for="pr_032">Mammografi </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_033" id="pr_033">
                                <label class="form-check-label" for="pr_033">Expertise Foto</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_034" id="pr_034">
                                <label class="form-check-label" for="pr_034">Chepalometri</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col">
                            <b>Kepala :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_021" id="pr_021">
                                <label class="form-check-label" for="pr_021">Mandibula</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_022" id="pr_022">
                                <label class="form-check-label" for="pr_022">Os Nasal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_023" id="pr_023">
                                <label class="form-check-label" for="pr_023">Orbita</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_028" id="pr_028">
                                <label class="form-check-label" for="pr_028">SPN (Sinus Pranasalis)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_040" id="pr_040">
                                <label class="form-check-label" for="pr_040">Kepala AP / Lat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_010" id="pr_010">
                                <label class="form-check-label" for="pr_010">Mastoid</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_011" id="pr_011">
                                <label class="form-check-label" for="pr_011">TMJ (Temporo Mandibular Join)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_066" id="pr_066">
                                <label class="form-check-label" for="pr_066">Basis Cranii</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_067" id="pr_067">
                                <label class="form-check-label" for="pr_067">Sella Tursika</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_068" id="pr_068">
                                <label class="form-check-label" for="pr_068">Foramen Opticum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_072" id="pr_072">
                                <label class="form-check-label" for="pr_072">Maxilla</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_073" id="pr_073">
                                <label class="form-check-label" for="pr_073">Mandibulla</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <b>Pemeriksaan dengan Kontras :</b><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_062" id="pr_062">
                                <label class="form-check-label" for="pr_062">Appendicografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_063" id="pr_063">
                                <label class="form-check-label" for="pr_063">Oesophagografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_064" id="pr_064">
                                <label class="form-check-label" for="pr_064">Cor Analisa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_065" id="pr_065">
                                <label class="form-check-label" for="pr_065">Cystografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_070" id="pr_070">
                                <label class="form-check-label" for="pr_070">Fistulografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_071" id="pr_071">
                                <label class="form-check-label" for="pr_071">Cholecystografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_076" id="pr_076">
                                <label class="form-check-label" for="pr_076">Uretrocystografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_075" id="pr_075">
                                <label class="form-check-label" for="pr_075">Arthrografi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_041" id="pr_041">
                                <label class="form-check-label" for="pr_041">Myelografi thoracal / cervical</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_031" id="pr_031">
                                <label class="form-check-label" for="pr_031">Myelografi Lumbal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_024" id="pr_024">
                                <label class="form-check-label" for="pr_024">HSG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_059" id="pr_059">
                                <label class="form-check-label" for="pr_059">Colon Inloop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_060" id="pr_060">
                                <label class="form-check-label" for="pr_060">OMD</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pr_052" id="pr_052">
                                <label class="form-check-label" for="pr_052">BNO IVP</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tanggal_permintaan">Bengkulu, </label>
                            <input type="date" name="tanggal_permintaan" id="tanggal_permintaan" style="width: 150px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Dokter yang meminta</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            &nbsp;&nbsp;<div id="TTD"></div><br>
                            ( <input type="text" name="employee_id_1" id="employee_id_1" style="width: 150px;"> )
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-3 mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>
    <script>
        $('#NO_REGISTRATION').on('change', (event) => {
            getBiodata(event.target.value).then(Biodata => {
                $('#THENAME').val(Biodata.THENAME);
                $('#THEADDRESS').val(Biodata.THEADDRESS);
                $('#AGEYEAR').val(Biodata.AGEYEAR);
                $('#AGEMONTH').val(Biodata.AGEMONTH);
                $('#AGEDAY').val(Biodata.AGEDAY);
                $('#CARA_BAYAR').val(Biodata.CARA_BAYAR);
                $('#EMPLOYEE_ID').val(Biodata.EMPLOYEE_ID);
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
</body>

</html>