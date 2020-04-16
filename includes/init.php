<?php
//Connecting to data base.
  $dbCon = new mysqli('localhost', 'root', '', 'todolist');

if ($dbCon->connect_errno){
  die ('Error connecting to database.');
}


?>
