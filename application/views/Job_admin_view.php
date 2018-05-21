
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Job List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>ID</th>
                  <th>Position Title</th>
                  <th>Descritpion</th>
                  <th>Wage</th>
                  <th>Location</th>
                  <th>Deadline</th>
                </tr>
                <?php foreach ($list as $item):?>
                  <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['Post_Title'];?></td>
                    <td><?php echo $item['short_description'];?></td>
                    <td><?php echo $item['wage_per_month'];?></td>
                    <td><?php echo $item['place_of_work'];?></td>
                    <td><?php echo $item['dead_line'];?></td>
                    <td><a href="<?php echo base_url('Job_controller/admin_detail/').$item['id'] ?>"><button type="submit" class="btn btn-block btn-info btn-sm" name="view">view</button></a>
                  </tr>
                  <?php endforeach;?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <div>
            <form action="../file_upload/" method="post" enctype="multipart/form-data" >
              Upload CSV file from here
              <input type="file" name="fileToUpload" id="fileToUpload" />
              <input type="hidden" name="test" value="test123" />
              <input type="Submit" value="Submit">
            </form>
          </div>
          <div>
          Download template from <a href="<?=base_url();?>admin_css/template.csv" download="template.csv">here</a>
          </div>
    </section>
    <!-- /.content -->
  </div>
