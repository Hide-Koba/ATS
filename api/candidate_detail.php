<?php
         $candidate_id=$_POST['candidate_id'];

         $dbhost = 'localhost';
         $dbuser = 'cybersyd_ats';
         $dbpass = '@gm3BX9wbuay';
         $dbname = 'cybersyd_ats';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         $sql = 'SELECT id,first_name,last_name,Address,Email,Phone_Number,Job_Pos FROM Resume_Candidate where id='.$candidate_id;
         $result = mysqli_query($conn, $sql);

         // $response= array();
         $response["success"] = false;  

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {               
               $response= $row;
               $response['success']=true;
            }
         } else {
            echo "0 results";
         }

         echo json_encode($response);
         mysqli_close($conn);
      ?>