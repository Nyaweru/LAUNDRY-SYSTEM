<!DOCTYPE html>
<html>
<head>
  <title>DELETE</title>
  <style>
    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: max-content;
      color:blue;
      background-color: white;
    }
    /* Top navigation bar */
    .upper {
      background-color: #333;
      overflow: hidden;
    }
    .upper a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .upper a:hover {
      background-color: #ddd;
      color: black;
    }
    .upper a.active {
      background-color: #4CAF50;
      color: white;
    }
    /* Lower navigation bar */
    .under {
      background-color: #333;
      overflow: hidden;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    .under a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .under a:hover {
      background-color: #ddd;
      color: black;
    }
    .under a.active {
      background-color: #4CAF50;
      color: white;
    }
    /* Table styles */
    table {
        border-collapse: collapse; 
        width: 100%;
        margin-top: 20px; 
        margin-bottom: 20px; 
        border-spacing: 0; 
        border-radius: 5px; 
        overflow:hidden; 
        box-shadow: rgba(0,0,0,0.3) 0px 1px 2px; 
        font-size:.9em; 
        font-family:sans-serif; 
        min-width:auto; 
        position:relative; 
        z-index:-1; 
        background:antiquewhite; 
        color:blue; 
        text-align:left
     } 

     th { 
         background-color:#333; 
         color:#fff; 
         cursor:pointer; 
         position:relative
     } 

     th:hover { 
         background-color:#ddd
     } 

     td,th { 
         padding-top:.8em; 
         padding-bottom:.8em; 
         padding-left:.7em; 
         padding-right:.7em
     } 

     td { 
         border-bottom:solid #eee 1px
     } 

     tr:nth-child(even) td{background:#f5f5f5} 

     tr:hover td {background:#ddd} 

     .see-button { 
         display:inline-block; 
         margin-top:-1.5em; 
         margin-bottom:-1.5em;  
         margin-left:auto;  
         margin-right:auto;  
         position:relative;  
         z-index:-1  
     } 

     .see-button button {  
         background-color:#4CAF50;  
         border:none;  
         color:white;  
         padding:.8em 1.6em;  
         text-align:center;  
         text-decoration:none;  
         display:inline-block;  
         font-size:.8em;  
         margin-top:.5em
     } 

     .see-button button:hover {  
         cursor:pointer
     } 

     .delete-button {  
          display:inline-block;  
          margin-top:-1.5em;  
          margin-bottom:-1.5em;   
          margin-left:auto;   
          margin-right:auto;   
          position:relative   
     }  

     .delete-button button {   
          background-color:red !important ;   
          border:none !important ;   
          color:white !important ;   
          padding:.8em 1.6em !important ;   
          text-align:center !important ;   
          text-decoration:none !important ;   
          display:inline-block !important ;   
          font-size:.8em !important ;   
          margin-top:.5em !important ;
     }  

     .delete-button button:hover {   
          cursor:pointer
     }  
     .checkbox{
        cursor: pointer;
     }

  </style>
</head>
<body>
<h1>STEGAM LAUNDRY SERVICES</h1>
<!-- Top navigation bar -->
<div class="upper">
  <a href="INSIDER.php"><button>ADMIN</button></a>
  <a href ="ADD.php"><button>ADD</button></a>
  <a href="index.php"><button>HOME</button></a>
  
</div>
<div>


<div>
<!-- Lower navigation bar -->
<div class="under">
<a href="INSIDER.php"><button>ADMIN</button></a>
  <a href ="ADD.php"><button>ADD</button></a>
  <a href="index.php"><button>HOME</button></a>
  
    </div>

<h2>Inventory List</h2>
<?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Check if the delete form has been submitted

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete']) && is_array($_POST['delete'])) {
    // Loop through the submitted checkboxes and delete the selected rows
    foreach ($_POST['delete'] as $itemId) {
        $query = "DELETE FROM stock WHERE item = '" . pg_escape_string($itemId) . "'";
        pg_query($conn, $query);
    }
} else {
    // Handle the case where no items were selected for deletion.
}


// Query to retrieve data from the database
$query = "SELECT * FROM stock";

// Execute the query
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="POST">
        <table id="stock">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Select</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['item'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    echo "<td><input type='checkbox' name='delete[]' value='" . $row['item'] . "'></td>";
                    echo "<td><button type='button' onclick='deleteRow(this)'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="submit" name="delete" value="Delete Selected">
    </form>

    <script>
        function deleteRow(button) {
            var row = button.closest('tr');
            var itemName = row.cells[0].textContent; // Assuming the product name is in the first column
            var confirmDelete = confirm("Are you sure you want to delete the item: " + itemName + "?");
            if (confirmDelete) {
                row.remove();
            }
        }
    </script>
</body>
</html>

<?php
// Free up memory and close the database connection
pg_free_result($result);
pg_close($conn);
?>
 
<h2>Employee list</h2>
<?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Check if the delete form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])&& is_array($_POST['delete']))  {
    // Loop through the submitted checkboxes and delete the selected items
    foreach ($_POST['delete'] as $userId) {
        $query = "DELETE FROM users WHERE id = " . intval($userId);
        pg_query($conn, $query);
    }
}

// Query to retrieve data from the database
$query = "SELECT id, username, password FROM users WHERE accesstype='employee'";

// Execute the query
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <script>
        function selectRowToDelete(rowId) {
            var row = document.getElementById(rowId);
            var checkbox = row.querySelector('input[type="checkbox"]');
            checkbox.checked = !checkbox.checked;
        }
    </script>
</head>
<body>
    <form method="POST">
        <table id="employee">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr id='row" . $row['id'] . "'>";
                    echo "<td><input type='checkbox' name='delete[]' value='" . $row['id'] . "'></td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td><button type='button' onclick='selectRowToDelete(\"row" . $row['id'] . "\")'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="submit" name="delete" value="Delete Selected">
    </form>
</body>
</html>

<?php
// Free up memory and close the database connection
pg_free_result($result);
pg_close($conn);
?>

</body>
</html>

