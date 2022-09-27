


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar</title>
    <link rel="stylesheet" href="../Style_Sass//Registar/registar.css">
</head>
<body>

    <header>
        <h1>Advanced Php Tutorial !!</h1>
    </header>



<!-- Registration Form Code -->


<!-- Insert Data Code -->
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
        // echo "Database Connection: ";
    }
    else{
        echo "Database Connection Error";
    }
    // INSERT INTO `registation_info`(`ID`, `First_Name`, `Last_Name`, `User_Name`, `Email`, `Phone`, `Password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')


    if(($user_F_name && $user_l_name && $user_name && $user_email && $user_password) == true){

        $query = "INSERT INTO `registation_info` (First_Name,Last_Name,User_Name,Email,Phone,Password)";
        $query .="VALUES ('$user_F_name','$user_l_name','$user_name','$user_email','$user_number','$user_password')";
    
        $result = mysqli_query($connection,$query);

        if($result){
            echo "<font color='green'>Registration Successful!!</font>";
        }
        else{
            echo "<font color='red'>Registration Failed!!</font>";
        }
    }
    else{
        echo "<font color='red'>Registration Failed!!</font>";
    }
}

?>


    
    <section id="registar_form">
        <div class="registar_div">
            <form action="./registar.php" method="post">
            <h1>Registration</h1>
                <input class="form_info" type="text" name="F_name" placeholder="First Name"><br>
                <input class="form_info" type="text" name="L_name" placeholder="Last Name"><br>
                <input class="form_info" type="text" name="u_name" placeholder="User Name"><br>
                <input class="form_info" type="mail" name="mail" placeholder="Email"><br>
                <input class="form_info" type="number" name="number" placeholder="01XXXXXXXXX"><br>
                <input class="form_info" type="password" name="password" placeholder="password"><br>
                <input class="form_info" type="text" value="<?php
                    // Password jenared

                    $all_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','!','@','#','$','%','^','&','*','-','_','0','1','2','3','4','5','6','7','8','9','10');

                    $length = array(8,9,10,11,12,13,14,15);

                    shuffle($length);
                    $final_length = $length[0];
                    $srt = "";

                    for($i=0; $i<$final_length; $i++){
                        shuffle($all_keys);
                        $srt .= $all_keys[0];
                        
                    }
                    echo $srt;
                ?>" >
                <input class="save" type="submit" name="submit" value="Save">
                <a href="../index.php">Login</a>
            </form>
        </div>
    </section>

    <footer>
        <p>copyright &copy; Engr Afzal Hossen </p>
    </footer>  

</body>
</html>




 