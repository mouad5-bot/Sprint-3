<?php
    //INCLUDE DATABASE FILE
    include('connection.php');
    session_start();
    //si user n'est pas connecter il n'a pas l'acces pour connecté
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
        $email    = htmlspecialchars(trim($_POST['email'])) ;   //htmlspecialchars c'est pour eviter d'exicuter les tags de html  
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
        //CODE VALIDATION HERE 
            if(empty($_POST['full_name'])){
                echo "the name is required";
            }else{
                $full_name = htmlspecialchars(trim($_POST['full_name']));
            }

            if(empty($_POST['email'])){
                echo "the email is required";
            }else{
                $email = htmlspecialchars(trim($_POST['email']));
            }   
            
            if(empty($_POST['password'])){
                echo "the password is required";
            }else{
                $password = md5($_POST['password']); 
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

    function getProducts()
    {
        //SQL SELECT   
        $requet = "SELECT p.id as id, p.name as name_product, p.quantity, p.price, c.name  as name_category, p.image, p.description
        FROM product p
        INNER JOIN category c on  c.id = p.category";   

        $resultat = mysqli_query($GLOBALS['connection'],$requet);
        $product = array(); 
        while($row = mysqli_fetch_assoc($resultat)){
            $product[] = $row;
        }
       return $product;
    }

    function save_product() 
    {
        //CODE HERE     
        $name        = $_POST['name'];
        $quantity    = $_POST['quantity'];
        $price       = $_POST['price'];
        $category    = $_POST['category'];
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

    function update(){
                
                $id = $_POST['id'];
                //CODE HERE     
                $name        = $_POST['name'];
                $quantity    = $_POST['quantity'];  
                $price       = $_POST['price'];
                $category    = $_POST['category'];
                $description = $_POST['description'];
                //SQL UPDATE
                $sql = "UPDATE product SET quantity='$quantity ',
                        price='$price ', category='$category', description='$description',
                        name=' $name' WHERE id = $id";
        
                $data = mysqli_query($GLOBALS['connection'] ,$sql);
        
                if (!$data) {
                    echo "Error updating record: " . mysqli_error($GLOBALS['connection']);
                }
        
                $_SESSION['message'] = "product has been updated successfully !";
                header('location: ../index.php');
        
                mysqli_close($GLOBALS['connection']); 
		
    }

    

?>

<!-- ========================= START #scripte of update ============================= -->
<script>

    document.getElementById("id").value =" <?=$ligne['']?>";
    
</script>

<!-- ========================= FINISHED #scripte of update ============================= -->

