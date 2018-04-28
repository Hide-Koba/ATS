<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'ATS';
         //$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         $conn = mysqli_connect("localhost", "cybersyd_ats", "@gm3BX9wbuay", "cybersyd_ats");
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         $sql = 'SELECT id,first_name,last_name FROM Resume_Candidate';
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