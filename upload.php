<?php

$target_dir = "uploads";
$target_file = $target_dir.basename($_FILES["upload"]["name"]);
$uploadOk = 1;
echo  $target_file.'<br>';


$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
echo  $imageFileType.'<br>';
print_r($_FILES["upload"]);
echo  $_FILES["upload"]["error"].'<br>';

if (isset($_POST["submit"])) {
    echo  $_FILES["upload"]["error"].'<br>';
    
    $check = getimagesize($_FILES["upload"]["tmp_name"]);

    if ($check !== false) {
        echo "Files is an image " . $check["mime"] . ".<br>";
        $uploadOk  = 1;
    } else {
        echo "Files is not a image";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo  "File exists already" . '<br>';
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    //upload file

    if( $uploadOk == 0){
        echo  "Sorry, your  file was not found".'<br>';
    }else{
        
        if ( move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file)){
            echo  "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.".'<br>';
            
        }else{
            echo "Sorry, there was an error uploading your file."."<br>";
        }
    }
}
