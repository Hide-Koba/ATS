<?php
         $dbhost = 'localhost';
         $dbuser = 'cybersyd_ats';
         $dbpass = '@gm3BX9wbuay';
         $dbname = 'cybersyd_ats';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         //$conn = mysqli_connect("localhost", "cybersyd_ats", "@gm3BX9wbuay", "cybersyd_ats");
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //$sql = 'SELECT jp.id,jp.Post_Title,jp.Post_Description,jp.wage_per_month,jp.place_of_work,jb_p.job_title FROM Job_post as jp Join Job_Position as jb_p on jb_p.id=jp.Job_Pos';
            $sql = 'SELECT jp.id,jp.Post_Title,jp.short_description,jp.Post_Description,jp.wage_per_month,jp.place_of_work,jb_p.position FROM Job_post as jp
            Join Job_Position as jb_p on jb_p.id=jp.Job_Pos';
         $result = mysqli_query($conn, $sql);

         // $response= array();
         $response["success"] = false;  

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               
               // $response= array();
               $response['success']=true;
               $response['data'][]= $row;
            }
         } else {
            echo "0 results";
         }
         header("Content-type:application/json");
         echo json_encode($response);
         mysqli_close($conn);
      ?>