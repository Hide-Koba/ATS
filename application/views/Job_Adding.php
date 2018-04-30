<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MACS Technology Applicant Tracking System</title>

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
	<h1>Job Add page</h1>

	<div id="body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <table>
                        <tr><td>Job title</td><td><input type='text' name='Post_Title' id='Post_Title' required /></td></tr>
                        <tr><td>Job Description</td><td><textarea name='Post_Description' id='Post_Description' required /></textarea></td></tr>
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
                        <tr><td>Wage per Month</td><td><input type='text' name='wage_per_month' id='wage_per_month' required /></td></tr>
                        <tr><td>Place of work</td><td><input type='text' name='place_of_work' id='place_of_work' required /></td></tr>
                        <tr><td>Company Name</td><td><input type='text' name='company_name' id='company_name' required /></td></tr>
                        <tr><td>Advertisement Dead Line</td><td><input type='date' name='dead_line' id='dead_line' required /></td></tr>
                        <tr><td>Counter person</td><td><input type='text' name='counter_person_name' id='counter_person_name' required /></td></tr>
                        <tr><td>Email</td><td><input type='text' name='email' id='email' required /></td></tr>
                        <tr><td>Phone number</td><td><input type='text' name='phone' id='phone' required /></td></tr>
                        
                    </table>
                    
                    <br />
                    <input type="submit" name="submit" value="Submit">
                </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>