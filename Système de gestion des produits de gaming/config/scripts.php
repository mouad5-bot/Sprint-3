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
    if(isset($_GET['delete']))        delete1();
    if(isset($_POST['save_product'])) save_product();


    function login()
    {
        //CODE HERE
        $email    = htmlspecialchars(trim($_POST['email'])) ;   //htmlspecialchars c'est pour eviter d'exicuter les tags de html  
        $password = md5($_POST['password']);        //md5 pour hide le mote pass 

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

        $_SESSION['success'] = "Product has been added successfully !";
		header('location: ../index.php');
 
        mysqli_close($GLOBALS['connection']);  
    }

    function uploadimage()
    {
        if (isset($_FILES['image']))
        {   
            global $connection;

            // echo "<pre>";
            // print_r($_FILES['my_image']);
            // echo "</pre>";

            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error    = $_FILES['image']['error'];

                if ($error === 0)
                {
                    if ($img_size > 170000) 
                    {
                        $_SESSION['error'] = "Sorry, your file is too large.";
                        header('location: ../index.php');
                    }
                    else
                    {
                        // ex = extension  | lc = lowerCase 
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); 
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png"); 

                            if (in_array($img_ex_lc, $allowed_exs)) 
                            {
                                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                                $img_upload_path = '../Assets/upload_image'.$new_img_name;
                                move_uploaded_file($tmp_name, $img_upload_path);
                            }
                            else {
                                $_SESSION['error'] = "You can't upload files of this type";
                                header('location: ../index.php'); 
                            }
                    }
                }
                else
                {
                    $_SESSION['error'] = 'unknown error occurred!';
                    header('location: ../index.php'); 
                    
                }
        }
        return $new_img_name;
    }

    function update()
    {
                
        //CODE HERE     
        $id          = $_POST['id'];
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

        $_SESSION['success'] = "product has been updated successfully !";
        header('location: ../index.php');

        mysqli_close($GLOBALS['connection']); 
		
    }

    function delete1() 
    { 
        $id= $_GET['delete'];
        
        //SQL DELETE
        $sql = "DELETE FROM product WHERE id=$id";
        $query = mysqli_query($GLOBALS['connection'] ,$sql);

        $_SESSION['success'] = "product has been deleted successfully !";
        header('location: ../index.php');
    }

    function getdata($table){
        $sql = "SELECT * FROM category";
        $result = mysqli_query($GLOBALS['connection'] ,$sql);
        $data = array();
       while($row = mysqli_fetch_assoc($result))
            $data[] = $row;
       return $data;
    }

?>

<!-- <script>
    function delete(id) 
    {
        // Get index of task in the array
        let index;
        for(let i = 0; i < product.length; i++){
            if ( tasks[i].id == id ) { index = i}
        }
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            tasks.splice (index, 1);  //for delete a   u.s
            reloadTasks()  // afficher tout les u.s
            swal("Your user story has been deleted!", {
                icon: "success",
            });
            } else {
            swal("Your user story file is safe!");
            }
        });   
    }
</script> -->