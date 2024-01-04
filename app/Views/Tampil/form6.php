<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<a class="btn btn-outline-dark" href="/Formulir" role="button">
    <i class="bi bi-arrow-left" style=" width:30; height:30"> Back</i>
</a>
<div class="container my-1">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row mb-3" style="text-align:center">
        <div class="col">
            <h3>Lab Online</h3>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <form action="" method="post" autocomplete="off">
                <div class="input-group">
                    <input type="text" class="form-control border-info" placeholder="Masukkan Nama Pasien" name="keyword">
                    <button class="btn btn-info" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
        <thead>
            <tr style="text-align:center">
                <th scope="col">No</th>
                <th scope="col">Body ID</th>
                <th scope="col">Nomor RM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (3 * ($currentPage - 1));
            foreach ($data as $data) : ?>
                <tr style="vertical-align:middle; text-align:center">
                    <td><?= $i++; ?></td>
                    <td><?= $data['BODY_ID']; ?></td>
                    <td><?= $data['NO_REGISTRATION']; ?></td>
                    <td><?= $data['THENAME']; ?></td>
                    <td><?= $data['THEADDRESS']; ?></td>
                    <td><?= $data['GENDER']; ?></td>
                    <td><?= $data['DATE_OF_BIRTH']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-outline-primary my-3" href="<?= site_url('formulir/detail6/') . $data['id']; ?>" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-outline-success my-3" href="<?= site_url('formulir/update6/') . $data['id']; ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-outline-danger my-3" href="<?= site_url('formulir/delete6/') . $data['id']; ?>" role="button" onclick="javascript: return confirm('Yakin akan menghapus data?')"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('assessment_info', 'pagination') ?>
</div>
<?= $this->endSection(); ?>