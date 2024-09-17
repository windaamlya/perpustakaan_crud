<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Peminjaman</strong></h3>
        <div class="card-tools">
            <a href="/peminjaman/create" class="btn btn-primary btn-sm">Tambah Peminjaman</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">PeminjamanID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">UserID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">BukuID</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">Tanggal Peminjaman</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">Status Peminjaman</th>
                    <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjamans as $peminjaman): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $peminjaman['PeminjamanID'] ?></td>
                    <td style="text-align: center;"><?= $peminjaman['UserID'] ?></td>
                    <td style="text-align: center;"><?= $peminjaman['BukuID'] ?></td>
                    <td style="text-align: center;"><?= $peminjaman['TanggalPeminjaman'] ?></td>
                    <td style="text-align: center;"><?= $peminjaman['StatusPeminjaman'] ?></td>
                    <td style="text-align: center;">
                        <a href="/peminjaman/update/<?= $peminjaman['PeminjamanID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/peminjaman/hapus/<?= $peminjaman['PeminjamanID'] ?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
