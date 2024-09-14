      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-list"></i> Member QC</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"> <i class="fa fa-list"></i> PIC List</h3>
                <div class="btn-group pull-right">
                  <a href="<?= base_url('Homepage') ?>" class="btn btn-default btn-xs pull-right margin"><i class="fa fa-save"></i> Excel</a>
                  <button class="btn btn-primary btn-xs pull-right margin" data-toggle="modal" data-target="#Pic_Modal"><i class="fa fa-plus"></i> Create</button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>PIC Name</th>
                      <th>Area</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $key) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $key->nik; ?></td>
                        <td><?= $key->nama_pic; ?></td>
                        <td><?= $key->area; ?></td>
                        <td></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body Table -->
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->

      <!-- Modal Input -->
      <div class="modal fade" id="Pic_Modal" tabindex="-1" role="dialog" aria-labelledby="Pic_Modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="Pic_Modal">Input New Customer</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('/add'); ?>" method="POST">
                <div class="form-group">
                  <div class="col-lg">
                    <label>NIK *</label>
                    <input type="text" name="nik" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg">
                    <label>PIC Name *</label>
                    <input type="text" name="nama_pic" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg">
                    <label>Area *</label>
                    <select name="area" class="form-control">
                      <option>--</option>
                      <option value="All Inspect">All Inspect</option>
                      <option value="CSKD Inspect">CSKD Inspect</option>
                      <option value="Outgoing Inspect">Outgoing Inspect</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
              <button type="reset" class="btn btn-sm btn-default"><i class="fa fa-undo"></i> Reset</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>