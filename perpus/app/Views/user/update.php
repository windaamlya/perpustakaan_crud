<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>EDIT USER</strong></h3>
    </div>
    <div class="card-body">
        <form action="/user/edit/<?= $user['UserID'] ?>" method="post">
            <div class="form-group">
                <label for="Username" style="color: #007bff;">useranme</label>
                <input type="text" name="Username" id="Username" class="form-control" value="<?= $user['Username'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Password" style="color: #007bff;">password</label>
                <input type="text" name="Password" id="Passwaor" class="form-control" value="<?= $user['Password'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Email" style="color: #007bff;">email</label>
                <input type="text" name="Email" id="Email" class="form-control" value="<?= $user['Email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="NamaLengkap" style="color: #007bff;">namalengkap</label>
                <input type="text" name="NamaLengkap" id="NamaLengkap" class="form-control" value="<?= $user['NamaLengkap'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Alamat" style="color: #007bff;">alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" value="<?= $user['Alamat'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>