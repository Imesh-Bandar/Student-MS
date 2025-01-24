<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <fieldset>
        <legend>ADD STUDENT</legend>
        <form action="./PROCESS.php" method="post">
            <label for="name">STUDENT NAME</label>
            <input type="text" name="username" id="name" >
            <label for="email">STUDENT EMAIL</label>
            <input type="email" name="email" id="email" required>
            <label for="city">STUDENT CITY</label>
            <input type="city" name="city" id="text" required>
            <input type="submit" name="register" value="ADD STUDENT">
        </form>
    </fieldset>


</body>

</html>