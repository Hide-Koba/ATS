<html>
<head>
	<title>ATS</title>
	</head>

	<body>
 
	<h1><?php //echo $heading;?></h1>

	<table>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>View Detail</th>
		</tr>
    <?php foreach ($list as $item):?>
    <tr>
	 	<td><?php echo $item->id;?></td>
	 	<td><?php echo $item->first_name;?></td>
	 	<td><?php echo $item->last_name;?></td>
	 	<td><a href="<?php echo base_url('index.php/candidate_controller/single_user_detail/').$item->id ?>"><button type="submit" name="view">view</button></a>
 	</tr>
    <?php endforeach;?>
</table>
		<?php //print_r($list)?>
		
	</body>
	</html>

