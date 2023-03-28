<?= $this->extend('v_template_admin'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex align-items-center justify-content-between px-2 mb-2">
    <div class="h2">Manajemen Posyandu</div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#addPosyanduModal">Tambah</button>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div style="max-height: 400px;" class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Posyandu</th>
                            <th>Nama Posyandu</th>
                            <th>Desa</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><span class="badge bg-primary">TI01</span></td>
                            <td>Posyandu Tilongkabila 1</td>
                            <td>Tilongkabila</td>
                            <td style="width: 35%">Jalan Kebayoran Lama No.012</td>
                            <td>
                                <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#editPosyanduModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePosyanduModal">
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

<?= $this->include('modal\m_posyandu'); ?>

<?= $this->endSection(); ?>