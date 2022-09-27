

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <!-- <header>
        <?php require './Component/header.php'; ?>
    </header> -->

    <header>
        <h1>Advanced Php Tutorial !!</h1>
    </header>
    
    <section id="login_section"> 
       <div class="main_div">
          <div class="login_form">
                <form action="./Component/home.php" method="POST">
                <h1>Login</h1>
                    <input class="form_info" type="text" name="username" placeholder="username"><br>
                    <input class="form_info" type="password" name="password" placeholder="password"><br>
                    <input class="submit" type="submit" value="Login">
                </form>
            </div>
        
            <div class="registar_form">
                <form action="./Component/registar.php" method="">
                    <input class="registar" type="submit" value="Registar"><br>
                </form> 
            </div>
       </div>
    </section>

   
    <!-- <?php require './Component/footer.php'; ?> -->
    <footer>
        <p>copyright &copy; Engr Afzal Hossen </p>
    </footer>   

</body>
</html>



<!-- Registration Form Code -->

<?php


if(isset($_POST['submit'])){

    $user_F_name = $_POST['F_name'];
    $user_l_name = $_POST['L_name'];
    $user_name = $_POST['u_name'];
    $user_email = $_POST['mail'];
    $user_number = $_POST['number'];
    $user_password = $_POST['password'];

    // Database Connection................
    $connection = mysqli_connect('localhost','root','','phpadvance');
    if($connection){
        header('localhost: index.php');
        echo "Database Connection: ";
    }
    else{
        echo "Database Connection Error";
    }
    // INSERT INTO `registation_info`(`ID`, `First_Name`, `Last_Name`, `User_Name`, `Email`, `Phone`, `Password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

    $query = "INSERT INTO registation_info (ID, First_Name, Last_Name, User_Name, Email, Phone, Password)";
    $query .= "VALUES ('$user_F_name', '$user_l_name', '$user_name', '$user_email', '$user_number', '$user_password')";

    $result = mysqli_query($connection, $query);
    if($result){
        echo "Registration Successful!!";
    }
    else{
        echo "Registration Failed!!";
    }
}

?>