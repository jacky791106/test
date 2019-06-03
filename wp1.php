<?php
session_start();
$proj_name = $_SESSION['proj_name'];
$wp_name = $proj_name."_wp".".bat";
$draw_name = $proj_name."_draw".".bat";


shell_exec('C:\AppServ\www\wp/'.$wp_name);
shell_exec('C:\AppServ\www\wp/'.$draw_name);
?>
