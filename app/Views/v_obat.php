<?= $this->extend('v_template_admin'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex align-items-center justify-content-between px-2 mb-2">
    <div class="h2">Manajemen Obat</div>
    <div>
        <button class="btn btn-success" data-toggle="modal" data-target="#stokObatModal">Tambah Stok Obat</button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#addObatModal">Tambah Obat</button>

    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div style="max-height: 400px;" class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Stok Obat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><span class="badge bg-primary">PR01</span></td>
                            <td>Paramex</td>
                            <td>Imunasasi</td>
                            <td>0</td>
                            <td>
                                <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#editObatModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteObatModal">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<?= $this->include('modal\m_obat'); ?>

<?= $this->endSection(); ?>

