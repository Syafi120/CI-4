<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<div class="col">
    <h3>Insert Data</h3>
</div>
<hr>
<div class="col-5">
    <form action="<?= base_url('/admin/Kategori/insert')?>" method="post">
        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" require>
            <div class="form-text">Silahkan Isi Nama Barang Yang Mau Ditambahkan</div>
        </div>
        <br>
        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" require>
            <div class="form-text">Silahkan Isi Keterangan Barang Disini</div>
        </div>
        <br>
        <div class="col-11">

            <?php
            if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
                echo '</div>';
            }

            ?>
        </div>
        <br>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>
<br>

<?= $this->endsection()?>