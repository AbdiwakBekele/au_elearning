<?php

session_start();
session_destroy();
header("Location: t_signin.php");

?>