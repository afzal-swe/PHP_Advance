

<?php 

// DB Save Information

echo "DB Save Information !!"."<br>";
$db_username = "afzal-swe";
$db_password = "afzal-swe";
echo "DB User Name : ".$db_username."<br>";
echo "DB User Pass : ".$db_password."<br>";
echo "<hr>";

// User Input Information
$_username = $_POST['username'];
$_password = $_POST['password'];


if($db_username == $_username && $db_password == $_password) {
    echo "<font color='green'> Login Successfully!! </font>"."<br><br>";
?>
     <!-- Create this file -->
    
     <form action="./us_profile.php" method="post" enctype="multipart/form-data">
    
        <input type="file" name="us_protfolio">
        <input type="submit" name="us_submit" placeholder="Upload"><br>
    </form>

    <form action="./show_data.php" method="post">
        <input type="submit" value="Show Data">
    </form>

<?php
}
else{
    
   
    echo "<font color='red'> Login failed!! </font>"."<br>";
}

?>