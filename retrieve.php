<?php
 $host = "localhost";
 $user = "postgres";
 $password = "nyamweru";
 $dbname = "postgres";
 //connect to the database
 
 $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die("could not connect to server \n");
 // Check if variable is set


 //Query to retrieve the last column of data entered into the database
 $query = 'SELECT * FROM booking ORDER BY id DESC LIMIT 1';
 $result = pg_query($conn, $query) or die('Query failed; ' .pg_last_error());
 if (pg_num_rows($result) > 0) {
    //Display the result
    while ($row = pg_fetch_assoc($result)) {
        //retrieve data from the row and store it in variables
        $id =$row['id'];
        $text =$row['Names'];
        $email=$row['Email'];
        $telephone =$row['Telephone'];
        $address=$row['Address'];
        $apartment=$row['Apartment'];
        $dateOfPick=$row['DateOfPick'];
        $dateOfReturn=$row['DateOfReturn'];
        //Display the data on the HTML form
        ?>
        
        
    <input type="text" name="name" value="<?php echo $text; ?>">
        
<input type="text" name="email" value="<?php echo $email; ?>">
<input type="text" name="telephone" value="<?php echo $telephone; ?>">
<input type="text" name="address" value="<?php echo $address; ?>">
<input type="text" name="apartment" value="<?php echo $apartment; ?>">
<input type="text" name="dateOfPick" value="<?php echo $dateOfPick; ?>">
<input type="text" name="dateOfReturn" value="<?php echo $dateOfReturn; ?>">
     <?php

    }

 }
 pg_free_result($result);
 pg_close($conn);
?>