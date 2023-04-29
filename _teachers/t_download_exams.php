<?php 
include '../my_funcs.php';

// Downloads files
if (isset($_REQUEST['id'])) {
    $assign_id = intval($_REQUEST['id']);
    
    // fetch file to download from database
    $sql = "SELECT * FROM assign WHERE assign_id= '$assign_id'";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '..\_students\submitted_exam/' . $file['submitted_exam'];


    if($filepath == '..\_students\submitted_exam/'){
        echo "Sorry! unable to find the exam!";
    }else{

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('../_students\submitted_exam/' . $file['submitted_exam']));
            readfile('../_students\submitted_exam/' . $file['submitted_exam']);
    
        }else{
            echo "Sorry! Unable to find the exam";
        }


    }



}


?>