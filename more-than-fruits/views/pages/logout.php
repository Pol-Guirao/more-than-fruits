<?php
session_start();
unset($_SESSION['Id_User']);
unset($_SESSION['Name_User']);
unset($_SESSION['userlevel']);
header("Location: ../../");
?>