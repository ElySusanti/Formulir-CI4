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
    <a class="btn btn-outline-dark" href="/" role="button">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="btn btn-outline-dark" href="/Formulir" role="button">
        <i class="bi bi-arrow-left" style=" width:30; height:30"> Back</i>
    </a>
    <div class="container my-5">
        <div class="row" style="text-align:center">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <h3 style="text-align:center">Pengkajian Awal Keperawatan dan Medis Instalasi Gawat Darurat</h3>
        <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
            <thead>
                <tr style="text-align:center">
                    <th scope="col">No</th>
                    <th scope="col">Body ID</th>
                    <th scope="col">No. MR</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data as $data) : ?>
                    <tr style="vertical-align:middle; text-align:center">
                        <td><?= $i++; ?></td>
                        <td><?= $data['BODY_ID']; ?></td>
                        <td><?= $data['NO_REGISTRATION']; ?></td>
                        <td><?= $data['THENAME']; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-outline-primary my-3" href="<?= site_url('formulir/detail4/') . $data['id']; ?>" role="button"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-outline-success my-3" href="<?= site_url('formulir/update4/') . $data['id']; ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-outline-danger my-3" href="<?= site_url('formulir/delete4/') . $data['id']; ?>" role="button" onclick="javascript: return confirm('Yakin akan menghapus data?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>