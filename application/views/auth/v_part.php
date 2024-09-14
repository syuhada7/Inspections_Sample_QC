      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-list"></i> QC Inspections</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"> <i class="fa fa-list"></i> Part Number List</h3>
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
                        <td><?= $key->namapic; ?></td>
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
        </div>
        </div>
      </section>
      <!-- /.content -->