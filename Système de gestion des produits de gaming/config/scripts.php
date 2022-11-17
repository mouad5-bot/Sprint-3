<?php
    //INCLUDE DATABASE FILE
    include('connection.php');

    //ROUTING
    if(isset($_POST['login']))   login();
    if(isset($_POST['Singup']))  signup();
    if(isset($_POST['update']))  update();
    if(isset($_POST['delete']))  delete();

    function signup() 
    {
        //CODE HERE 
        $full_name    = $_POST['full_name'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];

        //SQL INSERT

        $req = "INSERT INTO user ( full_name, email, password)
        VALUES( '$full_name', '$email', '$password')";
        
        $data = mysqli_query($GLOBALS['connection'],$req);

        $_SESSION['message'] = "your sing up has been successfully !";
		header('location: index.php');
 
        mysqli_close($GLOBALS['connection']);  
    }

?>

