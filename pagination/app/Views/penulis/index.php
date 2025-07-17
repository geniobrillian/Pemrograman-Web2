<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <?php
    ?>
    <?php
    ?>
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Daftar Penulis</h1> <?php
                                                    ?>
            <form action="" method="get"> <?php
                                            ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci pencarian..." aria-label="Recipient's username" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <?php 
    ?>
    <?php 
    ?>
    <?php  
    ?>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (10 * ($pageSekarang - 1)); ?>
                    <?php foreach ($penulis as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['address']; ?></td>
                            <td><a href="" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('penulis', 'penulis_pager'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>