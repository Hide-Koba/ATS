
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Candidate List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th style="width:50px">Status</th>
                  <th style="width:40px;">View Details</th>
                </tr>
                <?php foreach ($list as $item):?>
                  <tr>
                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->first_name;?></td>
                    <td><?php echo $item->last_name;?></td>
                    <td> <select name="status" id="status" onChange="changeStatus(this.value,<?php echo $item->id;?>)">
                      <option value="1" <?php echo $item->Status==1?"Selected":"" ?>>Received</option>
                      <option value="2" <?php echo $item->Status==2?"Selected":"" ?>>Reviewed</option>
                      <option value="3"<?php echo $item->Status==3?"Selected":"" ?>>Interviewed</option>
                      <option value="4" <?php echo $item->Status==4?"Selected":"" ?>>Selected</option>
                      </select>
                    </td>
                    <td><a href="<?php echo base_url('candidate_controller/single_user_detail/').$item->id ?>"><button type="submit" class="btn btn-block btn-info btn-sm" name="view">view</button></a>
                  </tr>
                  <?php endforeach;?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
    function changeStatus(value,id){
      //console.log(id)
      $.ajax({
        url:'candidate_controller/status',
        type:'POST',
        dataType:'text',
        data:{
          'value':value,
          'id':id
          },
      })

      .done(function (){
        location.reload();
      });
    }


</script>

