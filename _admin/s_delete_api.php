<?php
    include "../my_funcs.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: a_signin.php');
    }

    if(isset($_REQUEST['id'])){
        $student_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM student WHERE student_id = '$student_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a Student!");
        // $db->query("DELETE FROM student WHERE ID = $id");
    }

   // header("Location: a_manage_teachers.php");
?>