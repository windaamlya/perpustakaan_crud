<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>EDIT PEMINJAMAN</strong></h3>
    </div>
    <div class="card-body">
        <form action="/peminjaman/edit/<?= $peminjaman['PeminjamanID'] ?>" method="post">
            <div class="form-group">
                <label for="UserID" style="color: #007bff;">userid</label>
                <input type="text" name="UserID" id="UserID" class="form-control" value="<?= $peminjaman['UserID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="BukuID" style="color: #007bff;">bukuid</label>
                <input type="text" name="BukuID" id="TanggalPeminjaman" class="form-control" value="<?= $peminjaman['BukuID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="TanggalPeminjaman" style="color: #007bff;">tangggalpeminjaman</label>
                <input type="text" name="TanggalPeminjaman" id="TanggalPeminjaman" class="form-control" value="<?= $peminjaman['TanggalPeminjaman'] ?>" required>
            </div>
            <div class="form-group">
                <label for="TanggalPengembalian" style="color: #007bff;">tangggalpengembalian</label>
                <input type="text" name="TanggalPengembalian" id="TanggalPengembalain" class="form-control" value="<?= $peminjaman['TanggalPengembalian'] ?>" required>
            </div>
            <div class="form-group">
                <label for="StatusPeminjaman" style="color: #007bff;">statuspeminjaman</label>
                <input type="text" name="StatusPeminjaman" id="StatusPeminjaman" class="form-control" value="<?= $peminjaman['StatusPeminjaman'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>