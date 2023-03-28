<?= $this->extend('v_template_admin'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex align-items-center justify-content-between px-2 mb-2">
    <div class="h2">Manajemen Desa</div>
</div>
<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDesaModal">Tambah</button>
<div class="row">
    <div class="col-xl-5 col-lg-8 col-sm-10">
        <div class="card">
            <div style="max-height: 300px;" class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Desa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Tilongkabila</td>
                            <td>
                                <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#editDesaModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteDesaModal">
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

<?= $this->include('modal\m_desa'); ?>

<?= $this->endSection(); ?>