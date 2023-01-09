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
                <th>Tanggal</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>

            <?php $no?>
            <?php foreach ($orderdetail as $key => $value): ?>

            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $value['tglorder']?>
                </td>
                <td>
                    <?= $value['menu'] ?>
                </td>
                <td>
                    <?= $value['harga']?>
                </td>
                <td>
                    <?= $value['jumlah']?>
                </td>
                <td>
                    <?= $value ['jumlah'] * $value['harga']?>
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