<?php

SESSION_START();

include "my_funcs.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $teacher_email = $_POST['teacher_email'];
  $teacher_password = md5($_POST['teacher_password']);
  //$password = $_POST['student_password'];
 

 $selected_db = mysqli_select_db ($con, 'elearning');

  if(!$selected_db){

    echo "No Database Selected";

  }


$table_query = "SELECT * FROM teacher WHERE teacher_email = '$teacher_email' AND teacher_password = '$teacher_password'";

$table_result = mysqli_query($con,$table_query);
$row = mysqli_fetch_array($table_result,MYSQLI_ASSOC);
$count = mysqli_num_rows ($table_result);


if ($count == 1){
    $last = 1200 + time();
    $_SESSION['email'] = $teacher_email;    
    setcookie(logged, date("F jS - g:i a"), $last);
    //echo "Successful";
    header('location:_teachers/t_profile.php');

}else{

  echo "Incorrect Username or Password";

}

}

$con->close();

?>












