<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm header-title">
          <h1 class="m-0 text-dark">Daftar Jabatan</h1>
        </div><!-- /.col -->
        <?php if ($dataUser['id_jabatan'] == '1'): ?>
          <div class="col-sm header-button">
            <button type="button" class="btn btn-primary btn-tambah-jabatan"><i class="fas fa-fw fa-plus"></i> Tambah Jabatan</button>
          </div>
        <?php endif ?>
      </div><!-- /.row -->
      <div class="row my-2">
        <div class="col-lg-6">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal!</strong> <?= validation_errors(); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row my-2">
        <div class="col-lg">
          <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered" id="table_id" data-link="<?= base_url('jabatan/datatable') ?>">
              <thead>
                <tr>
                  <th width="10">No</th>
                  <th>Nama Jabatan</th>
                  <?php if ($dataUser['id_jabatan'] == '1'): ?>
                    <th>Aksi</th>
                  <?php endif ?>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<!-- Jabatan Modal -->
<div class="modal fade" id="jabatanModal" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="label"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id_jabatan" id="id_jabatan">
          <div class="form-group">
            <label for="nama_jabatan">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" required value="<?= set_value('nama_jabatan'); ?>" placeholder="Nama Jabatan">
            <?= form_error('nama_jabatan', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Tutup</button>
          <button type="reset" class="d-none" id="reset"></button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
