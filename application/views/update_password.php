<?php
	if ($message!==""){
		?>
		<script>
			alert('<?=$message?>');
		</script>
		<?php
	}
?>
<section class="content">
	<div class="box box-danger" style="width:500px; margin:0 auto;">
			<div class="box-header with-border">
              <h3 class="box-title">Update User password</h3>
            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form action="" role="form" method="post">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="exampleInputText" required>New password</label>
	                  <input type="password" class="form-control" id="password" name="password" placeholder="Last Name">
	                </div>
					<div class="form-group">
	                  <label for="exampleInputText" required>Confirm password</label>
	                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter user name">
	                </div>
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
	              </div>
	            </form>
	          </div>
</section>	
</div>