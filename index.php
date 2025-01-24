<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>BASIC CRUD APP</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>

 <body>
     <!-- Add student -->
     <a href="./CREATE.php" target="">ADD STUDENT</a>
     <table style="border: 1px solid black; width: 100%; font-size: 20px;font-family:Verdana, Geneva, Tahoma, sans-serif;">

         <caption>STUDENT DETAILS PAGE</caption>
         <tr style="color:white; height:30px;">
             <thead style="background-color:rgb(168, 48, 48); height:20px;">
                 <th>STUDENT ID</th>
                 <th>STUDENT NAME</th>
                 <th>SUTDENT CITY</th>
                 <th>STUDENT EMAIL</th>
                 <th>ACTION</th>
             </thead>
         </tr>



         <?php


            include 'DB_Connect.php';
            $sql = "SELECT * FROM USER";
            $response = $conn->query($sql);
            // if (sizeof($response) == 0) {
            //     echo "<tr><td colspan='5'>No students found</td></tr>";
            // };
            foreach ($response as $res) {

                $id=$res['STD'];
                echo "<tr>";
                echo "<td>" . $res['STD'] . "</td>";
                echo "<td>" . $res['Name'] . "</td>";
                echo "<td>" . $res['City'] . "</td>";
                echo "<td>" . $res['Email'] . "</td>";
                echo "<td>
                 <button style='padding:22px'><a href='./UPDATE.php?id=$id' target='' style='text-decoration: none; font-size 18px;'><i class='fa-solid fa-user-pen'></i></a></button>
                 <button style='padding:22px' name='delete'><a name='delete' href='./DELETE.php?id=$id' target='' style='text-decoration: none;'><i class='fa-regular fa-trash-can'></i></a></button>
                 
                 </td>";
            } 
            

             
            ?>
             
         <!-- <td>1</td>
             <td>John Doe</td>
             <td>London</td>
             <td>john.doe@gmail.com</td>
             <td>
                 <button style="padding:22px"><a href="./UPDATE.php" target="" style="text-decoration: none;">EDIT</a></button>
                 <button style="padding:22px"><a href="./DELETE.php" target="" style="text-decoration: none;">DELETE</a></button>
             </td> -->

     </table>

 </body>

 </html>