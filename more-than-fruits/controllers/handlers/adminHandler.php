<?php
require_once $_SERVER['DOCUMENT_ROOT'].'controllers/AdminCont.php';

if(isset($_POST['type']) && $_POST['type']=="order"){
    $admin = new AdminCont();
    $admin->createOrder($_POST['provider'],$_POST['country'],$_POST['phone'],$_POST['cif'],$_POST['fruit'],$_POST['kg']);
}

if(isset($_POST['type']) && $_POST['type']=="user"){
    $admin = new AdminCont();
    $admin->createUser($_POST['user'],$_POST['pw']);
}

if(isset($_POST['type']) && $_POST['type']=="deleteUser"){
    $admin = new AdminCont();
    $admin->deleteUser($_POST['id']);
}

