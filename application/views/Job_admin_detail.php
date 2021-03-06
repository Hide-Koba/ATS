<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="box-title text-blue">Job detail</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

   <section class="content">
		<div class="box" style="width:500px;" >
			<div class="box-header with-border">
			  <h3 class="box-title"><?=$job_detail['Post_Title']?></h3>

			  <div class="box-tools pull-right">
			    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
			      <i class="fa fa-minus"></i></button>
			    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
			      <i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">
			  <?=$job_detail['Post_Description']?><br>
			  <strong>Wage: </strong><?=$job_detail['wage_per_month']?><br>
			  <strong>Location: </strong><?=$job_detail['place_of_work']?><br>
			  <strong>company name: </strong><?=$job_detail['company_name']?><br>
			  <strong>counter person: </strong><?=$job_detail['counter_person']?><br>
			  <strong>Email: </strong><?=$job_detail['email']?><br>
			  <strong>Phone: </strong><?=$job_detail['phone']?><br>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
			 <a href="<?= base_url()?>Job_controller/admin_edit/<?=$job_detail['id']?>"><button type="button" class="btn btn-block btn-info" style="">Update details</button></a>
			 <br />
			 <?php
			 	if ($job_detail['status']==="0"){
					 ?>
					 <a href="<?= base_url()?>Job_controller/flip_status/<?=$job_detail['id']?>"><button type="button" class="btn btn-block btn-info" style="">Open this job</button></a>
					 <?php
				 }else{
					 ?>
					 <a href="<?= base_url()?>Job_controller/flip_status/<?=$job_detail['id']?>"><button type="button" class="btn btn-block btn-info" style="">Close this job</button></a>
					 <?php
				 }
			 ?>
				<div class="box-body">
				<h3>Applied Candidates</h3>
				<table border="1">
				<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Resume</th></tr>
			 <?php
			 //var_dump($candidate_list);
			 foreach ($candidate_list as $each){
				?><tr>
					<td><a href="<?=base_url()?>Candidate_controller/single_user_detail/<?=$each['id']?>">SEE Detail</a></td>
					<td><?=$each['first_name']?> <?=$each['last_name']?></td>
					<td><?=$each['Email']?></td>
					<td><?=$each['Phone_Number']?></td>
					<td><a href="<?=base_url()?>uploads/<?=$each['cv_file_name']?>">Download Resume</a></td>
					</tr>
				<?php
			 }
			 ?>
			 </table>
			 </div>
			</div>
			<!-- /.box-footer-->
		</div>

   </section>
