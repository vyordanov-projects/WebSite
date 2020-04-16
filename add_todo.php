<?php
include_once "includes/init.php";
//The value of the description field.
$desc = $_POST["description"];


//if desc is defined and is NOT empty then
//inserts into database.
if(isset($desc) && !empty($desc)){
  $sql = "INSERT INTO todos (description) VALUES ('".$desc."')";

//inserts into database
  if (!$dbCon->query($sql)) {
      echo "Error: " . $dbCon->error;
  }

  $dbCon->close();


} else {

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  $del = "DELETE FROM todos WHERE id =" .$id;
    $dbCon->query($del);

  }
}
header("Location: todo.php#todoList");
?>
