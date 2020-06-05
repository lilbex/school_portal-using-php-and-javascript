<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'quizing');

echo 'Processing...';

// Check for POST variable
if(isset($_POST['submit'])){
  $st_id = mysqli_real_escape_string($conn, $_POST['st_id']);
  $class_id = mysqli_real_escape_string($conn, $_POST['class_id']);
  $st_score = mysqli_real_escape_string($conn, $_POST['st_score']);
  //echo 'POST: Your name is '. $_POST['name'];

  $query = "INSERT INTO cbttestsubmit(st_id,class_id,st_score) VALUES('$st_id','$class_id','$st_score')";

  if(mysqli_query($conn, $query)){
    echo 'User Added...';
    header("Location: ../home.php");
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}

