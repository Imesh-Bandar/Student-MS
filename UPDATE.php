<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT STUDENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <fieldset>
        <?php

        include './DB_Connect.php';
        //if check have exiting value
        $id=$_GET['id'];
        // sql query
        $sql="SELECT * FROM USER WHERE STD='$id'";

        $response=$conn->query($sql);

        $row=mysqli_fetch_assoc($response);

        echo $row['Name'];
        
       
        
        
        ?>
        <legend>EDIT STUDENT</legend>
        <form action="./PROCESS.php" method="post">
            <label for="name">STUDENT NAME</label>
            <input type="text" name="username" id="name" value="<?php echo $row['Name']?>"  required>
            <input type="email" name="email" id="email" value="<?php echo $row['Email']?>" required>
            <input type="city" name="city" id="text" value="<?php echo $row['City']?>" required>
            <input type="submit" name="update">
        </form>
    </fieldset>


</body>

</html>