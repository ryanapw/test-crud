<div class="col-sm-12">
    <div class="card">
        <div class="card-body btn-page">
            <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo" fdprocessedid="f6u859">Tambah Konten</button>
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
                                    <form method="post" action="<?= base_url('konten/simpan'); ?>">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label">Judul</label>
                                                <input name="judul" type="text" class="form-control" placeholder="Judul"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="id_kategori" class="form-control p-input">
                                                    <?php foreach ($kategori as $aa) { ?>
                                                        <option value="<?= $aa['id_kategori']; ?>">
                                                            <?= $aa['nama_kategori']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label">Keterangan</label>
                                                <textarea name="keterangan" type="text" class="form-control"
                                                    placeholder="keterangan" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label">Foto</label>
                                                <input name="foto" type="file" class="form-control" placeholder="Nama"
                                                    required>
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
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table center-aligned-table">
                    <thead>
                        <tr class="text-primary">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori Konten</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($konten as $aa) { ?>
                            <tr>
                                <th scope="row">
                                    <?= $no; ?>
                                </th>
                                <td>
                                    <?= $aa['judul']; ?>
                                </td>
                                <td>
                                    <?= $aa['nama_kategori']; ?>
                                </td>
                                <td>
                                    <?= $aa['tanggal']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                        <i class="fa fa-photo">
                                            Lihat foto</i>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('konten/edit/' . $aa['id_konten']) ?>"
                                        class="btn btn-primary btn-sm data-toggle=" modal" data-target="
                                        #examplemodal">Manage</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('konten/delete_data/' . $aa['foto']) ?>"
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