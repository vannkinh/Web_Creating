<?php
    if(isset($_FILES['nam'])){
        $file_name=$_FILES['nam']['name'];
        $file_tmp = $_FILES['nam']['tmp_name'];
        move_uploaded_file($file_tmp,"Images/".$file_name);
        echo"success";
    }
    else{
        echo"Error: file is required";
    }
?>