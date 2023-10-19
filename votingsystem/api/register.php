<?php

        $connect = mysqli_connect("localhost", "root", "", "votingsystem");
         
      
        if($connect === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         

        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $votersid = $_REQUEST['votersid'];
        $password = $_REQUEST['password'];
         

        $sql = "INSERT INTO user  VALUES ('','$firstname',
            '$lastname', '$votersid', '$password')";
         
        if(mysqli_query($connect, $sql)){
            echo' "<h3>The data has been stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data.</h3>";

                <script>
				window.location = "../partials/index.php";
			    </script>
        ';} else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connect);
        }
         
    
        mysqli_close($connect);
        ?>