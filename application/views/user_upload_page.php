<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="box-title text-red" style="width:500px; margin:0 auto;">Apply for Job</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<section class="content">
<div class="box box-danger" style="width:500px; margin:0 auto;">

            <!-- /.box-header -->
            <!-- form start -->
            <!--<form action="" role="form" method="post">-->
            <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputText" required>First Name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputText" required>Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" required>Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Enter email">
                </div>
                 <div class="form-group">
                  <label for="exampleInputText">Address</label>
                  <input type="text" class="form-control" id="address" name="Address" placeholder="Address">
                </div>
                 <div class="form-group">
                  <label for="exampleInputText">Phone number</label>
                  <input type="text" class="form-control" id="phone_number" name="Phone_Number" placeholder="Phone number">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="resume" id="resume">

                  <p class="help-block">Upload CV *Docx, PDF, Doc</p>
                </div>
                <div class="form-group">
                	<label>Applied Position</label>
	                <select name="Job_Pos">
								<?php
								foreach($job_pos as $each){
								?>
									<option value="<?=$each['id']?>"><?=$each['job_title']?></option>
								<?php
                }
                
								?>
                
									
					</select>
          <?php
                if (isset($_GET['id'])){
                  ?>
                  <input type="hidden" id="applied_job_id" name="applied_job_id" value="<?=$_GET['id']?>">
                  <?php
                }else{
                  ?>
                  <input type="hidden" id="applied_job_id" name="applied_job_id" value="0">
                  <?php
                }
                ?>
				</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
              </div>
            </form>
          </div>


</section>


<!-- 
<div id="container">

	<div id="body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <table>
                        <tr><td>First Name</td><td><input type='text' name='last_name' id='last_name' required /></td></tr>
                        <tr><td>Given Name</td><td><input type='text' name='first_name' id='first_name' required /></td></tr>
                        <tr><td>Email</td><td><input type='text' name='Email' id='Email' required /></td></tr>
                        <tr><td>Address</td><td><input type='text' name='Address' id='Address' required /></td></tr>
                        <tr><td>Phone number</td><td><input type='text' name='Phone_Number' id='Phone_Number' required /></td></tr>
                        <tr><td>Job position</td><td>
							<select name="Job_Pos">
							<?php
							foreach($job_pos as $each){
							?>
								<option value="<?=$each['id']?>"><?=$each['job_title']?></option>
							<?php
							}
							?>
								
							</select>
						</td></tr>
                        <tr><td><label for="resume">Upload CV *Docx, PDF, Doc</label></td><td>
                        <input type="file" name="resume" id="resume" required> <br /></td></tr>
                    </table>
                    
					<br />
					<?php
					if (isset($job_id)){
						?>
						<input type='hidden' name='job_id' id='job_id' value='<?=$job_id?>' />
						<?php
					}else{
						?>
						<input type='hidden' name='job_id' id='job_id' value='-1' />
						<?php
					}
					?>
                    <input type="submit" name="submit" value="Submit">
                </form>
	</div> -->
<!-- 
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
<!-- </div>

</body>
</html> -->