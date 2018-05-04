<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="box-title text-blue">Latest Jobs</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

   <section class="content">
	<?php
	foreach($job_data as $each){
	?>
   	<div class="box" style="width:500px;">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="<?=base_url();?>index.php/Job_controller/Detail/<?=$each['id']?>"><?php echo $each['Post_Title']?></a></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<strong>location:</strong> </h2> <?php echo $each['place_of_work']?><br>
			<strong>wage:</strong> <?php echo $each['wage_per_month']?><br>
			<?php echo $each['short_description']?> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
		<?php
			}
		?>
		</section>
	</div>

</body>
</html>