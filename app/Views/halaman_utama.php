<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Utama Formulir</title>
</head>
<body background="<?php echo base_url(); ?>img/background.jpg" style="width:100%; height:100%;">
    <div class="container mt-5" style="height:auto; width: 700px;; background-color:rgb(173, 216, 230); opacity:75%; border-radius:15px;">
        <form action="">
            <div class="row" style="text-align:center">
                <div class="col mt-3 mb-3">
                    <h5>Daftar Formulir:</h5>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <ul class="list-group">
                        <a href="<?= site_url('formulir/satu')?>" class="list-group-item list-group-item-action">PERSETUJUAN ANASTESI</a>
                        <a href="<?= site_url('formulir/dua')?>" class="list-group-item list-group-item-action">DAFTAR TILIK KESELAMATAN PASIEN</a>
                        <a href="<?= site_url('formulir/tiga')?>" class="list-group-item list-group-item-action">LAPORAN PEMAKAIAN INSTRUMEN</a>
                        <a href="<?= site_url('formulir/empat')?>" class="list-group-item list-group-item-action">PENGKAJIAN AWAL KEPERAWATAN DAN MEDIS INSTALASI GAWAT DARURAT</a>
                        <a href="<?= site_url('formulir/lima')?>" class="list-group-item list-group-item-action">RADIOLOGI ONLINE</a>
                        <a href="<?= site_url('formulir/enam')?>" class="list-group-item list-group-item-action">LAB ONLINE</a>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</body>
</html>