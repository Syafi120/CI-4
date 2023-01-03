<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<?php
    if (isset($_GET['page_Data'])) {
        $page = $_GET['page_Data'];
        $jumlah = 3;
        $no = ($jumlah * $page) - $jumlah + 1;
    }else {
        $no = 1;
    }
?>


<div class="col text-center">
    <h3>
        <?= $judul;?>
    </h3>
</div>



<div class="row text-center mt-2">

    <div class="col">

        <hr>
        <table class="table table-bordered border-primary">

            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>

            <?php $no?>
            <?php foreach ($pelanggan as $key => $value): ?>

            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $value['pelanggan'] ?>
                </td>
                <td>
                    <?= $value['alamat']?>
                </td>
                <td>
                    <?= $value['telp']?>
                </td>
                <td>
                    <?= $value['email']?>
                </td>
                <td>

                    <a href="<?= base_url()?>/admin/pelanggan/delete/<?= $value['idpelanggan']?>"><img width="20px"
                            src="<?=base_url('/icon/delete.svg')?>"></a>

                </td>
                <?php
                    if ($value['aktif']) {
                        $aktif = "Online";
                    } else {
                        $aktif = "Offline";
                    }
                        
                ?>
                <td>

                    <a class="btn btn-secondary"
                        href="<?= base_url()?>/admin/pelanggan/update/<?= $value['idpelanggan']?>/<?= $value['aktif']?>">
                        <?= $aktif?>
                    </a>

                </td>
            </tr>

            <?php endforeach;?>

        </table>


        <div class="row">
            <div class="col-11">
                <?= $pager->links('Data','yuri_nime') ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection()?>