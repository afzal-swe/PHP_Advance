<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Data</title>
    <link rel="stylesheet" href="../Style_Sass//show_data//show_data.css">
</head>
<body>
<?php

$connection = mysqli_connect('localhost','root','','phpadvance');
    if($connection){
        // echo "Database Connection: ";
    }
    else{
        echo "Database Connection Error";
    }

    $query = "SELECT * FROM registation_info";
    $add_data = mysqli_query($connection,$query);

    $count = mysqli_num_rows($add_data);

    if($count > 0){

        if(isset($_REQUEST['delete'])){
            echo "<font color='green'>Data Delete Successful!!</font>";
            }
        if(isset($_REQUEST['updated'])){
            echo "<font color='green'>Data Updated Successfully!!</font>";
        }


        ?>

        <table class="table">
            <thead class="table_dark">
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>User_Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>

        <?php

        $serial_number = 0;

        while($row = mysqli_fetch_assoc($add_data)){
            
            // show this array list
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";

            // Database information............
            $ID = $row['ID'];
            $Photo = $row['P_Photo'];
            $First_Name = $row['First_Name'];
            $Last_Name = $row['Last_Name'];
            $User_Name = $row['User_Name'];
            $Email = $row['Email'];
            $Phone = $row['Phone'];
            $Password = $row['Password'];
            $serial_number++;

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $serial_number?></td>
                        <td><?php echo $Photo?></td>
                        <td><?php echo $First_Name?></td>
                        <td><?php echo $Last_Name?></td>
                        <td><?php echo $User_Name?></td>
                        <td><?php echo $Email?></td>
                        <td><?php echo $Phone?></td>
                        <td><?php echo $Password?></td>
                        <td><a class="green" href="./edit.php?edit_id=<?php echo $ID ?>">Edit</a> <a class="red" href="crud.php?ID=<?php echo $ID ?>">Delete</a></td>
                    </tr>
                </tbody>
                
            <?php 
            
        }
        ?>
        
        </table>
            <form action="./registar.php" method="POST">
                <input type="submit" value="Create">
            </form>
        <?php
    }
    else{
        echo "No Data";
    }

?>
</body>
</html>

