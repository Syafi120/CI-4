<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<div class="row text-center mt-4">
    <div class="col">
        <h3>
            <?= $judul ?>
        </h3>
    </div>
</div>
<hr>
<br>
<form action="<?= base_url('/admin/order/update')?>" method="post">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">

                <div class="form-group">
                    <label for="Order">Nilai Yang Akan Ditransfer</label>
                    <input type="number" class="form-control" name="bayar" require>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" name="total" value="<?= $order[0]['total']?>" require>
                    <input type="hidden" class="form-control" name="idorder" value="<?= $order[0]['idorder']?>" require>
                </div>

                <br>



            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <table class="table table-bordered border-primary">
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
                <?php $no = 1?>
                <?php foreach ($detail as $value): ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>

                    <td>
                        <?= $value['menu']?>
                    </td>

                    <td>
                        <?= $value['hargajual']?>
                    </td>

                    <td>
                        <?= $value['jumlah']?>
                    </td>

                    <td>
                        <?= $value['jumlah'] * $value['hargajual']?>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <p>
                Pelanggan :
                <?= $order[0]['pelanggan']?>
            </p>
        </div>
        <div class="col">
            <p>
                Tanggal :
                <?= date("d-m-Y", strtotime($order[0]['tglorder']))?>
            </p>
        </div>
        <div class="col">
            <p>
                Total :
                <b><?= number_format($order[0]['total'])?></b>
            </p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-11 text-center">

            <?php
                if (!empty(session()->getFlashdata('info'))) {
        
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
                echo '</div>';
        
                }
            ?>

        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="simpan" value="simpan">
            </div>
        </div>
    </div>

</form>



<?= $this->endsection()?>