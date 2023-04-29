<?php 
include '../my_funcs.php';

// Downloads files
if (isset($_REQUEST['id'])) {
    $class_id = intval($_REQUEST['id']);

    // fetch file to download from database
    $sql = "SELECT * FROM class WHERE class_id= '$class_id'";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '..\_teachers\class_materials/' . $file['material'];


    if($filepath == '..\_teachers\class_materials/'){
        echo "Sorry! unable to find the materials!";
    }else{

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('../_teachers/class_materials/' . $file['material']));
            readfile('../_teachers/class_materials/' . $file['material']);
    
        }else{
            echo "Sorry! Unable to find the materials";
        }


    }



}


?>