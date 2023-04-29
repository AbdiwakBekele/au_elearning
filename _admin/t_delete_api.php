<?php
    include "../my_funcs.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: a_signin.php');
    }

    if(isset($_REQUEST['id'])){
        $teacher_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM teacher WHERE teacher_id = '$teacher_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a Teacher!");
        // $db->query("DELETE FROM student WHERE ID = $id");
    }

   // header("Location: a_manage_teachers.php");
?>