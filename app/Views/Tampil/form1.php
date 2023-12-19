<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Persetujuan Anastesi</title>
</head>

<body>
    <a class="btn btn-outline-dark sticky-top" href="/Formulir" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
    </a>
    <div class="container my-5">
        <h3 style="text-align:center">Data Persetujuan Anastesi</h3>
        <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
            <thead>
                <tr style="text-align:center">
                    <th scope="col">Nomor Rekam Medis</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                    <tr style="vertical-align:middle; text-align:center">
                        <td><?= $data->NO_REGISTRATION; ?></td>
                        <td><?= $data->THENAME; ?></td>
                        <td><?= $data->ALLOANAMNESIS_CONTACT; ?></td>
                        <td><?= $data->DATE_OF_BIRTH; ?></td>
                        <td><?= $data->GENDER; ?></td>
                        <td><?= $data->CLASS_ROOM_ID; ?></td>
                        <td>
                            <div class="btn-group justify-items-center" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-success my-3" href="/Formulir/update" role="button">Update</a>
                                <a class="btn btn-danger my-3" href="/Formulir/delete" role="button">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>