<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/'.$buku['sampul']); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $buku['judul']; ?>
                            </h5>
                            <p class="card-text">
                                <b>Penulis : </b>
                                <?= $buku['penulis']; ?>
                            </p>
                            <p class="card-text"><small class="text-body-secondary">
                                    <b>Penerbit : </b>
                                    <?= $buku['penerbit']; ?>
                                </small></p>

                            <a href="" class="btn btn-warning">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <br><br>
                            <a href="/books">Kembali ke daftar buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>