<?php

require_once '../beans/Users.php';
require_once '../Daos/UsersDao.php';
require_once '../utilities/dbconnect.php';
session_start();

$uname = $_POST['login'];
$password = $_POST['password'];
$ub = new Users;
$ud = new UsersDao;
$ub = $ud->authenticate($uname, $password);
if($uname==NULL || $password==NULL)
{
header("Location: ../index.php?msg=login_blank");
}
else if (($uname != NULL) && ($password != NULL) && ($ub != NULL)) {
    if ($uname == $ub->getUsername()) {
        $_SESSION['user'] = serialize($ub);
        header("Location: ../home.php");
    } else {
        header("Location: ../index.php?msg=login_error");
    }
}
if(isset($_GET['opn'])){
   if($_GET['opn']=="logout"){
        session_destroy();
        header("Location: ../index.php?msg=logout");
   }
}
?>

