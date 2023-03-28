<div class="modal fade" id="addObatModal" tabindex="-1" aria-labelledby="addObatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addObatModalLabel">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Obat">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Obat</label>
                        <input type="text" class="form-control" id="jenis" placeholder="Masukkan Jenis Obat">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="stokObatModal" tabindex="-1" aria-labelledby="stokObatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stokObatModalLabel">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pilih Obat</label>
                        <select class="form-control">
                            <option>Paramex</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Obat</label>
                        <input min="1" type="number" class="form-control" id="stok" placeholder="Masukkan Stok Obat">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editObatModal" tabindex="-1" aria-labelledby="editObatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editObatModalLabel">Edit Posyandu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="nama">Nama Desa</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Desa">
                    </div>


                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteObatModal" tabindex="-1" aria-labelledby="deleteObatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteObatModalLabel">Hapus Desa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <p>Anda akan menghapus data desa <b>tersebut</b></p>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>