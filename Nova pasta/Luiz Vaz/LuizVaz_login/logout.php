<?php
sessi0on_start();
session_destroy();
header("Location: login.php");
exit();
?>