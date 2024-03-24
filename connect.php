 
 <?php
    //booking
            $conn = mysqli_connect("localhost", "root", "990981230V@Dil");
        
            if($conn === false){
                die("ERROR: Could not connect" . mysqli_connect_error());
            }
        
            $name = $_GET['name'];
            $email = $_GET['email'];
            $nop = $_GET['nop'];
            
            
        
            $sqlq = "INSERT INTO booking VALUES ('$name', '$email','$nop')";
        
            mysqli_select_db($conn, "cofee");
        
           if(mysqli_query($conn, $sqlq)){
          echo "Thank You!Your request reseived";
         }
          else{
           echo "ERROR: " . mysqli_error($conn);
         }
        
            mysqli_close($conn);

         
        ?>