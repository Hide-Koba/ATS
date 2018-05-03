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
	<h1>Job Detail page</h1>
	<div id="body">
        <table>
            
            <tr><td>Job title</td><td><?=$job_detail['Post_Title']?></td></tr>
            <tr><td>Job description</td><td><?=$job_detail['Post_Description']?></td></tr>
            <tr><td>Wage per month</td><td><?=$job_detail['wage_per_month']?></td></tr>
            <tr><td>Place of work</td><td><?=$job_detail['place_of_work']?></td></tr>
            <tr><td>Company name</td><td><?=$job_detail['company_name']?></td></tr>
            <tr><td>Counter person</td><td><?=$job_detail['counter_person']?></td></tr>
            <tr><td>Email</td><td><?=$job_detail['email']?></td></tr>
            <tr><td>Phone number</td><td><?=$job_detail['phone']?></td></tr>
        </table>
        <a href="../../User_upload/?job_id=<?=$job_detail['id']?>">Apply to this job</a>
	</div>
</div>


</body>
</html>