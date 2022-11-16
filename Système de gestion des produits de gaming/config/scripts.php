<?php
    //INCLUDE DATABASE FILE
    include('connection.php');

    //ROUTING
    if(isset($_POST['log in']))  login();
    if(isset($_POST['Sing up']))  signup();
    if(isset($_POST['update']))  update();
    if(isset($_POST['delete']))  delete();




?>

