<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah Peminjaman</strong></h3>
    </div>
    <div class="card-body">
        <form action="/peminjaman/tambah" method="post">
            <div class="form-group">
                <label for="UserID" style="color: #007bff;">UserID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="BukuID" style="color: #007bff;">BukuID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="StatusPeminjaman" style="color: #007bff;">Status Peminjaman</label>
                <input type="text" name="StatusPeminjaman" id="StatusPeminjaman" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootsrap-4/build/css/tempusdominus-bootsrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/lateste/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootsrap-4/build/js/tempusdominus-bootsrap-4.min.js"></script>
<script>
    $(function () {
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaultDate: new Date ()
        })
    })
</script>
<?= $this->endSection() ?>