<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>eh5</title>

    <style>
    
    body{
        display:flex;
        justify-content:center;
        align-items: center;
        flex-direction:wrap;
        min-height:100vh;
    }
    </style>
</head>
<body>

<?php 
    if(isset($_GET["error"])):?>
    <h1><?php echo $_GET["error"];?></h1> 
    <?php endif  ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="my_image">
    <input type="submit" name="submit" value="upload">

    </form>
</body>
</html>