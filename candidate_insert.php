
      <?php

         $first_name=$_POST["firstname"];
         $last_name=$_POST["lastname"];
         $address=$_POST["address"];
         $email=$_POST["email"];
         $phone_number=$_POST["phone_number"];
         $position=$_POST['position'];

         // $first_name="test";
         // $last_name="1";
         // $address="testaddress";
         // $email="test_email";
         // $phone_number="1221";

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'ATS';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         $sql = "INSERT INTO Resume_Candidate(first_name,last_name,Address,Email,Phone_Number,Job_Pos,status)
            VALUES ('".$first_name."','".$last_name."','".$address."','".$email."','".$phone_number."','".$position."',1)";
            //echo $sql;

          $response= array();  

         if (mysqli_query($conn, $sql)) {
               $response["success"] = true;  
            } else {
               $response["success"] = false; 
               echo "Error: " . $sql . "" . mysqli_error($conn); 
            }

         echo json_encode($response);
         mysqli_close($conn);
      ?>