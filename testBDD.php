<?php
require "AccessBDD.php";
require "Compte.php";
$access=new AccessBDD();
$compte1=$access->find(5);
//$access->insert($compte1);
$compte1->depot(100);
$access->update($compte1);

?>