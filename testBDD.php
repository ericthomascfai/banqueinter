<?php
require "AccessBDD.php";
require "Compte.php";
$access=new AccessBDD();
$compte1=new Compte(3);
$access->insert($compte1);
?>