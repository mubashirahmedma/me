<html>
    <head>
        <meta charset="UTF-8">
        <title>Database</title>
    </head>
    <body>

        <?php
        $con=  mysqli_connect("localhost", "root", "", "demo");
///-- detail is the database in MySqli Database -->
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from persons");
//signup is the table in the detail_Database -->
       ?>
        <div>
            <td>Database</td>
         <table border="1">
            <th> First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                     <th>Phone</th>
                    <th>message</th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
///<!-- Fetch each row from signup Table  -->
             {
                 ?>
            <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone'] ;?></td>
                <td><?php echo $row['message'] ;?></td>
                
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>