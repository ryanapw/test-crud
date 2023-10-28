<div class="col-sm-12">
    <div class="card">
        <div class="card-body btn-page">
            <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo" fdprocessedid="f6u859">Tambah Kategori</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tambahkan Konten</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('kategori/simpan'); ?>">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label">Kategori</label>
                                                <input name="nama_kategori" type="text" class="form-control"
                                                    placeholder="Kategori" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn  btn-primary">Submit</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <h5>Tabel Kategori</h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kategori as $aa) { ?>
                            <tr>
                                <th scope="row">
                                    <?= $no; ?>
                                </th>
                                <td>
                                    <?= $aa['nama_kategori']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('kategori/edit/' . $aa['id_kategori']) ?>"
                                        class="btn btn-primary btn-sm">Manage</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('kategori/hapus/' . $aa['id_kategori']) ?>"
                                        class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>