 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Payment</th>
                  <th>Plan</th>
                  <th>Bike</th>
                  <th>TXId</th>
                  <th>Service</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($users as $user){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $user->name;?></td>
                  <td><?php echo $user->email;?></td>
                  <td><?php echo $user->mobile;?></td>
                  <th><?php echo $user->payment;?></th>
                  <th><?php echo $user->bike_plan;?></th>
                  <th><?php echo $user->bike_cc;?></th>
                  <th><?php echo $user->txid;?></th>
                  <th><?php echo $user->service;?></th>
                  
                  <td><a class="btn btn-primary" href="<?php echo  base_url('admin/booking/view').$user->txid;?>"><i class="fa fa-eye"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('admin/booking/delete').$user->txid;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php }?>
                 </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>