<?php
include_once "includes/init.php";
include 'includes/header.php';

//Selecting everything from the data base
$sql = "SELECT * FROM todos";

//Query goes here
if (!$result = $dbCon->query($sql)) {

die("script error.");
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr" class="todo_html">

  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body class="body_form">
    <?php
    showHeader($pageName);
    ?>
    <a name="todoList"></a>
    <div class="row">
      <h2>Task list</h2>
      <div class="row form_format">
        <form class="form" action="add_todo.php" method="post" class="inputForm">
            <input type="text" name="description" placeholder="Put your todo here" required
            autocomplete="off" class="input">
            <input type="submit" name="button" value="Save work" class="click_button" >
        </form>
      <ul>


        <?php
         if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc() ) { ?>
               <li><?php echo $row['description']?><a href="add_todo.php?id=<?php echo $row['id']?>"><span class = "delete">x</span></a></li>

          <?php  }

        }
        ?>

</ul>

      </div>
    </div>
  </body>

</html>
