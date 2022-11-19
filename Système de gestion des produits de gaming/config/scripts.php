<?php
    //INCLUDE DATABASE FILE
    include('connection.php');
    session_start();

    if(!isset($_SESSION['email'])) header("location: pages/login.php");

    //ROUTING
    if(isset($_POST['login']))        login();
    if(isset($_POST['singup']))       signup();
    if(isset($_GET['logout']))        logout();
    if(isset($_POST['update']))       update();
    if(isset($_POST['delete']))       delete();
    if(isset($_POST['save_product'])) save_product();

    function login(){
        //CODE HERE
        $email    = htmlspecialchars($_POST['email']) ;   //htmlspecialchars c'est pour eviter d'exicuter les tags de html  
        $password = md5($_POST['password']);             //md5 pour hide le mote pass 

        //SQL INSERT
        $requet = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        if(mysqli_num_rows(mysqli_query($GLOBALS['connection'],$requet))>0) //c'est pour tester que user est exister 
        {
            $_SESSION['email'] = $email;    
            header('location: ../index.php');
        }else{
            echo "error";
        }
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

    function logout()
    {
        session_destroy();
        header('location: ../pages/login.php');

    }

    function save_product() 
    {
        //CODE HERE     
        $name        = $_POST['name'];
        $quantity    = $_POST['quantity'];
        $price       = $_POST['price'];
        $category    = (int)$_POST['category'];
        $image       = $_POST['image'];
        $description = $_POST['description'];
        
        //SQL INSERT
        $req = "INSERT INTO product ( name, quantity, price, category , image, description)
        VALUES(  '$name', '$quantity', '$price', '$category', '$image', '$description')";
        $data = mysqli_query($GLOBALS['connection'] ,$req);

        $_SESSION['message'] = "Product has been added successfully !";
		header('location: ../index.php');
 
        mysqli_close($GLOBALS['connection']);  
    }

?>

