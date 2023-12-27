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
        <a class="btn btn-outline-dark sticky-top mt-3" href="/Formulir" role="button">
            <i class="bi bi-arrow-left" style=" width:30; height:30"> Back</i>
        </a>
        <h3 style="text-align:center">Radiologi Online</h3>
        <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
            <thead>
                <tr style="text-align:center">
                    <th scope="col">No</th>
                    <th scope="col">No CR/MR</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Dokter Pengirim</th>
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
                        <td><?= $data['THEADDRESS']; ?></td>
                        <td><?= $data['AGEYEAR']; ?> Th <?= $data['AGEMONTH']; ?> Bln <?= $data['AGEDAY']; ?> Hr</td>
                        <td><?= $data['EMPLOYEE_ID']; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-outline-primary my-3" href="/Formulir/detail5" role="button">Detail</a>
                                <a class="btn btn-outline-success my-3" href="/Formulir/update5" role="button">Update</a>
                                <a class="btn btn-outline-danger my-3" href="/Formulir/delete5" role="button">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>