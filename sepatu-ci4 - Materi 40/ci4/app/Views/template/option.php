<div class="form-group">
    <select class="form-control text-center" onchange="this.form.submit()" name="idkategori" id="idkategori">
        <option value="1">Search...</option>
        <?php foreach ($kategori as $key => $value) : ?>
        <option value="<?= $value['idkategori']?>">
            <?= $value['kategori']?>
        </option>
        <?php endforeach ;?>
    </select>
</div>