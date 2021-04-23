
<?php

if(isset($_POST['submit'])&&isset($_FILES['my_image'])){
    include "db_connect.php";
echo "<pre>";
print_r (($_FILES['my_image']));
echo "</pre>";

$img_name=$_FILES['my_image']['name'];
$img_type=$_FILES['my_image']['type'];
$img_tmp=$_FILES['my_image']['tmp_name'];
$img_size=$_FILES['my_image']['size'];
$img_error=$_FILES['my_image']['error'];
$img_ex=strtolower(pathinfo($img_name,PATHINFO_EXTENSION));
$filesAllowed=["png","jpg","jpeg"];


if(in_array($img_ex,$filesAllowed)){

        if($img_error==0){
            if($img_size>500000){
            echo $img_size;

            $error_message="unknown error occurred image size is so big!";
            header("Location: index.php?error=$error_message");
            }else{
            $new_img_name=uniqid("IMG-",true).'.'.$img_ex;
            $img_upload_path='uploads/'.$new_img_name;
            move_uploaded_file($img_tmp,$img_upload_path);
            echo $img_ex;
            echo "picture upload successful! <br/>";



            // insert data in

            $sql="INSERT INTO all_images(img_url)VALUE('$new_img_name')";
            mysqli_query($con,$sql);
            header("Location:view.php");
            }
    
    
        }else {
            $error_message="unknown error occurred!";
            header("Localtion: index.php?error=$error_message");
        }
    }else {
        echo "hello";
        $error_message="we can't upload files of this type!!";
        header("Location:index.php?error=$error_message");
        
    }

}
else {
    
    header("Location :index.php");
}


?>