<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../Style_Sass//edit//edit.css">
</head>
<body>
<?php
// Edit with database code

$connection = mysqli_connect('localhost','root','','phpadvance');
if($connection){
    // echo "Database Connection: ";
}
else{
    echo "Database Connection Error";
}

if(isset($_REQUEST['edit_id'])){

    $id = $_REQUEST['edit_id'];
    $get_info = "SELECT * FROM registation_info WHERE ID = $id";

    $select_info = mysqli_query($connection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)){
        ?>
            <form class="edit_form" action="./edit.php" method="POST" enctype="multipart/form-data">
                <input class="form_info" type="text" name="F_name" value="<?php echo $row['First_Name'] ?>" placeholder="First Name"><br>
                <input class="form_info" type="text" name="L_name" value="<?php echo $row['Last_Name'] ?>" placeholder="Last Name"><br>
                <input class="form_info" type="text" name="u_name" value="<?php echo $row['User_Name'] ?>" placeholder="User Name"><br>
                <input class="form_info" type="password" name="password" value="<?php echo $row['Password'] ?>" placeholder="password"><br>
                <input class="form_info" type="file" name="file">
                <input class="save" type="submit" name="submit" value="Update">
                <input type="hidden" name="updating_hidden_id" value="<?php echo $id?>">
            </form>

        <?php

    }

}
?>   
</body>
</html>


<!-- Complete update code secound part-2 --> 
<?php

$connection = mysqli_connect('localhost','root','','phpadvance');
if($connection){
    // echo "Database Connection: ";
}
else{
    echo "Database Connection Error";
}

if(isset($_REQUEST['submit'])){
    
    $U_F_name = $_REQUEST['F_name'];
    $U_L_name = $_REQUEST['L_name'];
    $U_U_name = $_REQUEST['u_name'];
    $U_password = $_REQUEST['password'];
    $U_file = $_REQUEST['file'];
    $hidden_id = $_REQUEST["updating_hidden_id"];

    $update_query = "UPDATE registation_info SET First_Name='$U_F_name', Last_Name='$U_L_name', User_Name='$U_U_name', Password='$U_password' WHERE ID = $hidden_id";

    $F_update_query = mysqli_query($connection,$update_query);
    if($F_update_query){
        header('location: show_data.php?updated');
    }
    else{
        echo "Update Error";
    }
}


?>


<!-- Upload Profile photos database and your location file -->

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

