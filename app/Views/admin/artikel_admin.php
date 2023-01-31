<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <a href="/admin/artikel/tambah">
        <button type="button" class="btn btn-primary mb-3">
            <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Artikel
        </button>
    </a>


    <div class="row mb-5">
        <?php foreach ($Blog as $item) : ?>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left" style="object-fit: cover; width: 100%; height: 100%;" src="<?= base_url() ?>/thumbnail/<?= $item["gambar"] ?>" alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item["judul"] ?></h5>
                                <p class="card-text">
                                    <i class='bx bx-edit-alt'></i> <?= $item["author"] ?><br>
                                    <i class='bx bx-happy-heart-eyes'></i> <?= $item["views"] ?><br>
                                    <i class='bx bx-time'></i> <?= $item["tanggal"] ?><br>
                                </p>
                                <p class="card-text">
                                    <button type="button" class="btn btn-primary">View</button>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <a href="/admin/artikel/delete/<?= $item["id"] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>