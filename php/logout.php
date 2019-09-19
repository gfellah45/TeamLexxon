<?php
session_start();

$_SESSION=[];
setcookie(session_name(), '', time()-7000000, '/');
session_destroy();
header("Location: ../index.html");
 