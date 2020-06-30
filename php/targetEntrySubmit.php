<?php
    include_once '/var/www/pollbois.com/php/connect.php';

    $entered = $_POST['targets'];
    $id = $_POST['ids'];

    $numItems = count($entered);

    for($x = 0; $x < $numItems; $x++){
      $id[$x] = trim($id[$x], '/');
      $sql = ("UPDATE hk SET target = $entered[$x] WHERE id = $id[$x]");
      if($conn->query($sql) === false){
        echo "Error: " . $sql . $conn->error;
      } 
    }
?>