<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>EDIT PENGEMBALIAN</strong></h3>
    </div>
    <div class="card-body">
        <form action="/pengembalian/edit/<?= $pengembalian['PengembalianID'] ?>" method="post">
            <div class="form-group">
                <label for="UserID" style="color: #007bff;">userid</label>
                <input type="text" name="UserID" id="UserID" class="form-control" value="<?= $pengembalian['UserID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="BukuID" style="color: #007bff;">bukuid</label>
                <input type="text" name="BukuID" id="TanggalPengembalian" class="form-control" value="<?= $pengembalian['BukuID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="TanggalPengembaliab" style="color: #007bff;">tangggalpengembalian</label>
                <input type="text" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control" value="<?= $pengembalian['TanggalPengembalian'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>