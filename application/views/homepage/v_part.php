      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-list"></i> Part Number</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"> <i class="fa fa-list"></i> Part Number List</h3>
                <div class="btn-group pull-right">
                  <a href="<?= base_url('Homepage') ?>" class="btn btn-default btn-xs pull-right margin"><i class="fa fa-save"></i> Excel</a>
                  <button class="btn btn-primary btn-xs pull-right margin" data-toggle="modal" data-target="#C_Modal"><i class="fa fa-plus"></i> Create</button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Part Number</th>
                      <th>Model</th>
                      <th>Ean Code</th>
                      <th>Label AV</th>
                      <th>Label Decor</th>
                      <th>Color</th>
                      <th>Type Part</th>
                      <th>Customer</th>
                      <th>Reg - Date</th>
                      <th>Reg - Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $key) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $key->part_name; ?></td>
                        <td><?= $key->model; ?></td>
                        <td><?= $key->eancode; ?></td>
                        <td><?= $key->lb_av; ?></td>
                        <td><?= $key->lb_decor; ?></td>
                        <td><?= $key->color_part; ?></td>
                        <td><?= $key->part_type; ?></td>
                        <td><?= $key->namacus; ?></td>
                        <td><?= $key->reg_date; ?></td>
                        <td><?= $key->nama_pic; ?></td>
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
      <div class="modal fade" id="C_Modal" tabindex="-1" role="dialog" aria-labelledby="C_Modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="C_Modal">Input New Part</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('/add'); ?>" method="POST">
                <div class="form-group row">
                  <div class="col-lg-4">
                    <label>Part Number *</label>
                    <input type="text" name="part_no" class="form-control">
                  </div>
                  <div class="col-lg-4">
                    <label>Model Part *</label>
                    <input type="text" name="model" class="form-control">
                  </div>
                  <div class="col-lg-4">
                    <label>Ean Code</label>
                    <input type="number" name="eancode" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-4">
                    <label>Lable AV</label>
                    <input type="text" name="lb_av" class="form-control">
                  </div>
                  <div class="col-lg-4">
                    <label>Lable Decor</label>
                    <input type="text" name="lb_decor" class="form-control">
                  </div>
                  <div class="col-lg-4">
                    <label>Color</label>
                    <input type="text" name="color" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Type Part *</label>
                    <select name="t_part" class="form-control">
                      <option>--</option>
                      <option value="1">BC</option>
                      <option value="2">MC</option>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label>Customer *</label>
                    <select name="customer" class="form-control">
                      <option>--</option>
                      <?php foreach ($row2 as $key2) { ?>
                        <option value="<?= $key2->id_customer ?>"><?= $key2->namacus ?></option>
                      <?php } ?>
                    </select>
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