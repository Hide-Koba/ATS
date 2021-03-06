<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Candidate Detail</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Candidate Detail page</h1>
	<div id="body">
		<?php echo "ID:", $list->id;?> <br>
		<?php echo "First Name: ",$list->first_name; ?><br>
		<?php echo "Last Name: ",$list->last_name; ?> <br>
		<?php echo "Address: ",$list->Address; ?><br>
		<?php echo "Email: ",$list->Email;?><br>
		<?php echo "Phone: ", $list->Phone_Number;?><br>
		<select name="status" id="status" onChange="changeStatus(this.value,<?php echo $list->id;?>)">
				<option value="1" <?php echo $list->Status==1?"Selected":"" ?>>Received</option>
				<option value="2" <?php echo $list->Status==2?"Selected":"" ?>>Reviewed</option>
				<option value="3"<?php echo $list->Status==3?"Selected":"" ?>>Interviewed</option>
				<option value="4" <?php echo $list->Status==4?"Selected":"" ?>>Selected</option>
				</select>
		<input type="button" value="Download file" onclick="location='https://localhost/ats/uploads/<?php echo $list->cv_file_name?>"/>
		<?php
		var_dump($job_data);
		if ($job_data['id']){
			?>
			<div>
				This person apply with below job
				<table>
					<th>Job ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Wage</th>
					<th>Place of work</th>
					<th>Company name</th>
					<th>Counter person</th>
					<th>Contact</th>
					<tr>
						<td><?=$job_data['id']?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<?php
		}
		?>
	</div>
</div>
<script type="text/javascript">
		function changeStatus(value,id){
			//console.log(id)
			$.ajax({
				//url:'candidate_controller/status',
				url:'../status',
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


</body>
</html>