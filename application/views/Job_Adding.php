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
            <form action="" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputText" required>Post Title</label>
                  <input type="text" class="form-control" id="Post_Title" name="Post_Title" placeholder="Post Title">
				  
                </div>
                <div class="form-group">
                  <label for="exampleInputText" required>Job description</label>
				  <textarea name='Post_Description' id='Post_Description' class="form-control" required /></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" required>Wage per month</label>
                  <input type="text" class="form-control" id="wage_per_month" name="wage_per_month" placeholder="Wage per month">
                </div>
                 <div class="form-group">
                  <label for="exampleInputText">Place of work</label>
                  <input type="text" class="form-control" id="place_of_work" name="place_of_work" placeholder="place of work">
                </div>
                 <div class="form-group">
                  <label for="exampleInputText">Company name</label>
                  <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company name">
                </div>
				<div class="form-group">
                  <label for="exampleInputText">Dead Line</label>
                  <input type="Date" class="form-control" id="dead_line" name="dead_line" placeholder="Dead line">
                </div>
				<div class="form-group">
                  <label for="exampleInputText">Counter person name</label>
                  <input type="text" class="form-control" id="counter_person_name" name="counter_person_name" placeholder="Counter person name">
                </div>
				<div class="form-group">
                  <label for="exampleInputText">email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
				<div class="form-group">
                  <label for="exampleInputText">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
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