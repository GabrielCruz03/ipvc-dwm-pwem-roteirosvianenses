<?php

include '../../assets/php/config.php';

session_start();
session_unset();
session_destroy();

header('location:../../login.php');

?>
