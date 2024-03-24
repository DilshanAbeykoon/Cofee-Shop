<?php
    //order online
            $conn = mysqli_connect("localhost", "root", "990981230V@Dil");
        
            if($conn === false){
                die("ERROR: Could not connect" . mysqli_connect_error());
            }
        
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $phone = $_GET['phone'];
            $type = $_GET['type'];
            $size = $_GET['size'];
            
            
        
            $sqlq = "INSERT INTO online VALUES ('$name', '$mail','$phone','$type','$size')";
        
            mysqli_select_db($conn, "cofee");
        
           if(mysqli_query($conn, $sqlq)){
          echo "Thank You!Your Order reseived";
         }
          else{
           echo "ERROR: " . mysqli_error($conn);
         }
        
            mysqli_close($conn);
            ?>
