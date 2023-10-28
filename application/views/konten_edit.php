<div id='myalert'>
    <?= $this->session->flashdata('alert', true) ?>
</div>
<?php foreach ($konten as $aa) { ?>
    <div class="content-wrapper">
        <h3 class="page-heading mb-4">Edit Konten</h3>
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="<?= base_url('konten/update'); ?>"
                            enctype='multipart/form-data'>
                            <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control p-input"
                                        value="<?= $aa['judul'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="id_kategori" class="form-control p-input">
                                        <?php foreach ($kategori as $uu) { ?>
                                            <option <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                echo "selected";
                                            } ?>
                                                value="<?= $uu['id_kategori']; ?>">
                                                <?= $uu['nama_kategori']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>keterangan</label>
                                    <textarea name="keterangan" class="form-control p-input" placeholder="Enter Name">
                                        <?= $aa['keterangan'] ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control p-input"
                                        accept="image/png, image/jpeg">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php } ?>