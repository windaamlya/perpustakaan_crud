<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Pengembalian</strong></h3>
        <div class="card-tools">
            <a href="/pengembalian/create" class="btn btn-primary btn-sm">Tambah Pengembalian</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">PengembalianID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">UserID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">BukuID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">Tanggal Pengembalian</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengembalians as $pengembalian): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $pengembalian['PengembalianID'] ?></td>
                    <td style="text-align: center;"><?= $pengembalian['UserID'] ?></td>
                    <td style="text-align: center;"><?= $pengembalian['BukuID'] ?></td>
                    <td style="text-align: center;"><?= $pengembalian['TanggalPengembalian'] ?></td>
                    <td style="text-align: center;">
                        <a href="/pengembalian/update/<?= $pengembalian['PengembalianID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/pengembalian/hapus/<?= $pengembalian['PengembalianID'] ?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
