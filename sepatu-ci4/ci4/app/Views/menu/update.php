<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<div class="col">
    <h3>Update Data Menu</h3>
</div>
<hr>
<div class="col-6">
    <form action="<?= base_url('/admin/menu/update')?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="menu">Menu</label>
            <input type="text" class="form-control" value="<?= $menu['menu']?>" name="menu" require>
            <div class="form-text">Silahkan Isi Nama Barang Yang Mau Ditambahkan</div>
        </div>
        <br>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" value="<?= $menu['harga']?>" name="harga" require>
            <div class="form-text">Silahkan Isi Harga Barang Disini</div>
        </div>
        <br>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar">
            <div class="form-text">Silahkan Pilih gambar</div>
        </div>
        <br>
        <input type="hidden" class="form-control" value="<?= $menu['gambar']?>" name="gambar" require>
        <input type="hidden" class="form-control" value="<?= $menu['idmenu']?>" name="idmenu" require>
        <br>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control text-center" name="idkategori" id="idkategori">
                <?php foreach ($kategori as $key => $value) : ?>
                <option <?php if ($value['idkategori']==$menu['idkategori']) echo "selected"?>
                    value="<?= $value['idkategori']?>">
                    <?= $value['kategori']?>
                </option>
                <?php endforeach ;?>
            </select>
            <div class="form-text">Silahkan Pilih Kategori</div>
        </div>
        <br>
        <div class="col-11">

            <?php
            if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger" role="alert">';
                $error = session()->getFlashdata('info');
                echo '<br>';
                foreach ($error as $key => $value) {

                    echo $value;
                }
            
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