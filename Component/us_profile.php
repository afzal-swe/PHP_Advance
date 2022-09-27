<!-- Array smart line -->
<pre> 

<?php

echo "Photos infromation"."<br>";
echo '<hr>';
$pro = $_FILES['us_protfolio'];
var_dump($pro);
echo "</pre>";

$name = $pro['name'];
$size = $pro['size'];
$tmp_name = $pro['tmp_name'];


echo "Show File Upload Image Det"."<br><br>";
echo "Name : ".$name."<br>";
echo "Size : ".floor($size/1000)." KB"."<br><br>";

// Upload this file neded this code

if(!empty($name)){
    $loc = "us_profile/";
    if(move_uploaded_file($tmp_name,$loc.$name)){
        echo "File Upload Successfully!!"."<br>";
        $path = $loc.$name;
        echo "<img src='$path' width='200px' height='200px'>"."<br>";
        echo "Name : ".$name."<br>";
        echo "Size : ".floor($size/1000)." KB"."<br>";

    }
    else{
        echo "Faild!!";
    }
}
else{
    echo "File Not Found.";
}

?>