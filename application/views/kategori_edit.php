<?php foreach ($kategori as $aa) { ?>
    <div class="content-wrapper">
        <h3 class="page-heading mb-4">Edit kategori</h3>
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="<?= base_url('kategori/update'); ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="nama_kategori" type="text" class="form-control p-input"
                                    value="<?= $aa['nama_kategori'] ?>" placeholder="Enter Name">
                            </div>
                            <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>