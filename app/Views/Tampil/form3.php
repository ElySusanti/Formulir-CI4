<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Persetujuan Anastesi</title>
</head>

<body>
    <div class="container my-5">
        <a class="btn btn-outline-primary sticky-top mt-3" href="/Formulir" role="button">
            <i class="bi bi-arrow-left" style=" width:30; height:30"> Back</i>
        </a>
        <h3 style="text-align:center">Laporan Pemakaian Instrument</h3>
        <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
            <thead>
                <tr style="text-align:center">
                    <th scope="col">No</th>
                    <th scope="col">Nomor Register</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Ruang Rawat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data as $data) : ?>
                    <tr style="vertical-align:middle; text-align:center">
                        <td><?= $i++; ?></td>
                        <td><?= $data['NO_REGISTRATION']; ?></td>
                        <td><?= $data['THENAME']; ?></td>
                        <td><?= $data['GENDER']; ?></td>
                        <td><?= $data['CLASS_ROOM_ID']; ?></td>
                        <td>
                            <a class="btn btn-primary my-3" href="/Formulir/detail" role="button">Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>