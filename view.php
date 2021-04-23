<?php include ("db_connect.php"); 
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Image</title>
    <?php   include ("boot.php"); ?>
</head>
<body>
    
   <h1><a href="index.php"> &#8592;</a></h1> 
  
   <?php  
    
    $sql ="SELECT * FROM all_images order by id desc";
    $result=mysqli_query($con,$sql);

    if (mysqli_num_rows($result)>0){
        while($images=mysqli_fetch_assoc($result)){
            echo ' <div class="row row-cols-1 row-cols-md-2 g-4">';

            ?>


<div class="col">
    <div class="card text-center">
    <img  src="uploads/<?php echo $images['img_url'];?>" class="card-img-top" alt="...">
    
    </div>
  </div>






<?php
  echo "</div>";
        }

    }
   ?>
</body>
</html>