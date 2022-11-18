<?php
    //INCLUDE DATABASE FILE
    include('connection.php');
    session_start();

    //ROUTING
    if(isset($_POST['login']))   save_login();
    if(isset($_POST['singup']))  signup();
    if(isset($_POST['update']))  update();
    if(isset($_POST['delete']))  delete();

    function save_login(){
        //CODE HERE
        $email    = htmlspecialchars($_POST['email']) ;   //htmlspecialchars c'est pour eviter d'exicuter les tags de html  
        $password = md5($_POST['password']);             //md5 pour hide le mote pass 
    }

    function signup() 
    {
        //CODE HERE 
        if (!empty($_POST['full_name']) && !empty($_POST['email'] && !empty($_POST['password']))) 
        {
            $full_name = htmlspecialchars(trim($_POST['full_name']));
            $email     = htmlspecialchars(trim($_POST['email']));
            $password  = md5($_POST['password']);   
        }

        //SQL INSERT
        $requet = "INSERT INTO user ( full_name, email, password)
        VALUES( '$full_name', '$email', '$password')";
        
        $data = mysqli_query($GLOBALS['connection'],$requet);

        $_SESSION['message'] = "your sing up has been successfully !";
		header('location: ../index.php');
 
        mysqli_close($GLOBALS['connection']);  
    }

?>

