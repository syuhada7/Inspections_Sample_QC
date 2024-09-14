      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-list"></i> Customer</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"> <i class="fa fa-list"></i> Customer List</h3>
                <div class="btn-group pull-right">
                  <a href="<?= base_url('Homepage') ?>" class="btn btn-default btn-xs pull-right margin"><i class="fa fa-save"></i> Excel</a>
                  <button class="btn btn-primary btn-xs pull-right margin" data-toggle="modal" data-target="#Cus_Modal"><i class="fa fa-plus"></i> Create</button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name Customer</th>
                      <th>Telephone</th>
                      <th>Address</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $key) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $key->namacus; ?></td>
                        <td><?= $key->telpon; ?></td>
                        <td><?= $key->alamat; ?></td>
                        <td><a class="btn btn-sm btn-danger" href="<?= site_url('homepage/delete_cus/' . $key->id_customer); ?>"><i class="fa fa-trash"></i> Delete</a></td>
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
      <div class="modal fade" id="Cus_Modal" tabindex="-1" role="dialog" aria-labelledby="Cus_Modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="Cus_Modal">Input New Customer</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('Homepage/view_customer'); ?>" method="POST">
                <div class="form-group">
                  <div class="col-lg">
                    <label>Name Customer *</label>
                    <input type="text" name="namacus" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg">
                    <label>Telephone *</label>
                    <input type="text" name="telpon" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" id="save" name="save" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
              <button type="reset" class="btn btn-sm btn-default"><i class="fa fa-undo"></i> Reset</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>