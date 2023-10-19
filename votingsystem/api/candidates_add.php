<?php
        session_start();
        if(!isset($_SESSION['userdata'])){
            header("location: ../partials   ");
        }

        $connect = mysqli_connect("localhost", "root", "", "votingsystem");
         
     
        if($connect === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
      
        $firstname =  $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $position = $_POST['position'];
        
         
    
        $sql = "INSERT INTO candidates  VALUES ('','$firstname',
            '$lastname', '$position')";
         
        if(mysqli_query($connect, $sql)){
            echo' "<h3>The data has been stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data.</h3>";

                <script>
				window.location = "../admin/addcandidates.php";
			    </script>
        ';} else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connect);
        }
         
        // Close connection
        mysqli_close($connect);
        ?>