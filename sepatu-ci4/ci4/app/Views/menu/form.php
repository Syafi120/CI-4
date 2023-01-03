<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<h1>Upload Image</h1>
<hr>

<div class="row">
    <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
</div>
<br>

<div class="row">
    <form action="<?= base_url('/admin/Menu/insert')?>" method="post" enctype="multipart/form-data">
        Gambar: <input type="file" name="gambar" required>
        <br><br>
        <input class="btn btn-outline-success" type="submit" name="simpan" value="simpan">
    </form>
</div>



<?= $this->endsection()?>