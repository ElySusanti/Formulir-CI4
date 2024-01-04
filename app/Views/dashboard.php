<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Halaman Dashboard</title>
    <style>
        body {
            background-image: url(<?php echo base_url("/img/RS.jpg"); ?>);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white border border-primary text-primary">
        <table style="margin:3px">
            <tr>
                <td>
                    <img src="/img/logo.png" style="width: 65px">
                </td>
                <td>
                    <h4>RSUD Dr. M Yunus Bengkulu</h4>
                    <h5>Badan Layanan Umum Daerah</h5>
                    <p>Jl. Bhayangkara Bengkulu38229 Tlp. (0735) 62004 - 51111 Fax. (0736) 52007</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md"></div>
            <div class="col-md-8">
                <div class="card border-primary text-center" style="opacity:90%">
                    <div class="card-header bg-primary text-white"><b>FORMULIR</b></div>
                    <div class="card-body">
                        <h5><a href="/Formulir/input" class="list-group-item list-group-item-action"><b><i class="bi bi-file-earmark-plus" style="font-size:30px"></i>&nbsp;INPUT DATA</b></a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
        <div class="row mt-1 mb-3" style="text-align:center">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 1</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form1" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Persetujuan Anastesi</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 2</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form2" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Daftar Tilik Keselamatan Pasien</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 3</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form3" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Laporan Pemakaian Instrument</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 4</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form4" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Pengkajian Awal Keperawatan</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 5</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form5" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Radiologi Online</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary" style="opacity:90%">
                    <div class="card-header bg-primary text-white">Form 6</div>
                    <div class="card-body">
                        <h5><a href="Formulir/form6" class="list-group-item list-group-item-action"><i class="bi bi-journal-medical" style="font-size:25px"></i>&nbsp;Lab Online</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>