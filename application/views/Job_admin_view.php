
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Job List</h3>
              <a href="<?php echo base_url('Job_controller/add/')?>"><button type="submit" class="btn btn-block btn-info btn-sm" style="width:60px;" name="view">Add Job</button></a>
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
                  <th>Status</th>
                </tr>
                <?php foreach ($list as $item):?>
                  <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['Post_Title'];?></td>
                    <td><?php echo $item['short_description'];?></td>
                    <td>$<?php echo $item['wage_per_month'];?></td>
                    <td><?php echo $item['place_of_work'];?></td>
                    <td><?php echo $item['dead_line'];?></td>
                    <td>
                      <?php
                      if ($item['status']==='0'){
                        $st = 'Close';
                      }else{
                        $st = 'Open';
                      }
                      echo $st;
                      ?>
                    </td>
                    <td><a href="<?php echo base_url('Job_controller/admin_detail/').$item['id'] ?>"><button type="submit" class="btn btn-block btn-info btn-sm" name="view">view</button></a>
                  </tr>
                  <?php endforeach;?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <div>
            <?php echo form_open_multipart(base_url().'Job_controller/file_upload/');?>
              Upload CSV file from here
              <input type="file" name="userfile" id="userfile" />
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
