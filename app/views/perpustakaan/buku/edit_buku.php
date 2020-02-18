 <div class="container-fluid ">
 <!-- DataTales Example -->
 <div class="row d-flex justify-content-center">
    <div class="col-lg-7">

        <div class="card shadow mb-4 ">

            <div class="card-body ">
                <form action="<?= BASEURL ?>/proses/editbuku" method="POST">
                    <input type="hidden" id="id" name="id" value=" <?= $data['buku']['id_buku'] ?> ">
                        <div class="form-group">
                            <label for="nama">Nama Buku</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=    
                                $data['buku']['nama_buku'] ?>">
                        </div>

                        <div class="form-group">
                           <label for="pengarang">Pengarang Buku</label>
                           <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?=    
                                $data['buku']['pengarang'] ?>">
                        </div>
                        <div class="form-group">
                           <label for="kategori">Kategori Buku</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">Pilih</option>
                                <?php foreach ($data['kategori'] as $kategori): ?>
                                    <option <?= $kategori['id_kategori'] === $data['buku']['id_kategori']  ? "selected" : ""; ?> value="<?= $kategori['id_kategori'] ?> ">
                                        <?= $kategori['kategori'] ?> --> [ <?= $kategori['kode'] ?> ]
                                    </option>
                                <?php endforeach ?> 
                            </select>
                        </div>
                        <div class="form-group">
                           <label for="deskripsi">Deskripsi Buku</label>
                           <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="5"><?= $data['buku']['deskripsi'] ?></textarea>
                        </div>
                         <div class="form-group text-center">
                            <img src="<?= BASEURL ?>/img/daftar-buku/<?= $data['buku']['gambar'] ?>" alt="" width="50%"><br><br>
                       <label for="gambar" style="margin-left: 7rem">Gambar Buku</label> &nbsp;
                       <input type="file" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary w-100">Edit Buku &nbsp;<i class="fas fa-plus"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
