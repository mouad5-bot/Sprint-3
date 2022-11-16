<?php
    //INCLUDE DATABASE FILE
    include('connection.php');

    //ROUTING
    if(isset($_POST['submit']))   login();
    if(isset($_POST['Sing up']))  signup();
    if(isset($_POST['update']))  update();
    if(isset($_POST['delete']))  delete();

    function login() 
    {
        //CODE HERE 
        $email    = $_POST['email'];
        $password = $_POST['password'];

        //SQL INSERT

        $req = "INSERT INTO user ( email, password)
        VALUES(  '$email', '$password')";
        
        $data = mysqli_query($GLOBALS['connection'],$req);

        $_SESSION['message'] = "login has been successfully !";
		header('location: index.php');
 
        mysqli_close($GLOBALS['connection']);  
    }

?>

