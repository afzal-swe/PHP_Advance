<?php
// Delete with database code

$connection = mysqli_connect('localhost','root','','phpadvance');
if($connection){
    // echo "Database Connection: ";
}
else{
    echo "Database Connection Error";
}

$id = $_REQUEST['ID'];


$query = "DELETE FROM registation_info WHERE ID = $id";

$delete_query = mysqli_query($connection,$query);

if($delete_query){
    header("location: show_data.php?delete");
}   
?>
<!-- // delete end code -->



<form action="./registar.php" method="post">
    <input class="form_info" type="text" name="F_name" placeholder="First Name"><br>
    <input class="form_info" type="text" name="L_name" placeholder="Last Name"><br>
    <input class="form_info" type="text" name="u_name" placeholder="User Name"><br>
    <input class="form_info" type="password" name="password" placeholder="password"><br>
    <input class="save" type="submit" name="submit" value="Save">
</form>



<?php
// Edit with database code

$connection = mysqli_connect('localhost','root','','phpadvance');
if($connection){
    // echo "Database Connection: ";
}
else{
    echo "Database Connection Error";
}

$id = $_REQUEST['ID'];


$query = "DELETE FROM registation_info WHERE ID = $id";

$delete_query = mysqli_query($connection,$query);

if($delete_query){
    header("location: show_data.php?delete");
}   
?>
<!-- UPDATE `registation_info` SET `ID` = '16', `First_Name` = 'fahim', `Last_Name` = 'fucker boy', `User_Name` = 'fucker-boy', `Email` = 'fuck@gmail.com', `Phone` = '2147483647', `Password` = 'yDs1TT510LNS#rI' WHERE `registation_info`.`ID` = 16; -->