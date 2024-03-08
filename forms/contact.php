<?php
if(isset($_POST['submit']))
{
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['subject'];
    $d=$_POST['message'];
    

    
        $con=new mysqli ("localhost","root","sash@123","enqu");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }
          
          $sql = "INSERT INTO enquiry VALUES ('$a','$b','$c','$d')";
          
          if ($con->query($sql) === TRUE)
          {
            echo "New record created successfully";
          }
          else
          {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
          
          $con->close();
        
    }
    ?>