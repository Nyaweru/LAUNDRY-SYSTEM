<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8">
    <title>STEGAM LAUNDRY SERVICES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    </head>
    <body>
        <!DOCTYPE html>
        <html>
        <head>
        
        <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
          display:contents;
          background-color:#ABFFFF;
          
          
        }
        
        /* Style the side navigation menu */
        .sidenav {
          height: 100%;
          width: 250px;
          position: fixed;
          z-index: 1;
          top: 0;
          
          background-color: #34CCFF;
          color: black;
          overflow-x: hidden;
        }
        
        /* Add styles for the side navigation links */
        .sidenav a {
          padding: 16px;
          text-decoration: none;
          font-size: 20px;
        
          display: block;
        
          width: 250px;
          
          
        
          
        }
        
        /* Change the color of the side navigation links on hover */
        .sidenav a:hover {
          color: #0df1db;
        }
        
        /* Style the main content */
        .main {
          margin-left: 250px; /* Same width as the side navigation */
          padding: 20px;
          
        }
        
        /* Add styles for the right bar */
        .right-bar {
          width: calc(100% - 500px); /* Adjust the width as needed */
          float: right;
        
        }
        
        /* Add styles for the center bar */
        .center-bar {
          width: calc(100% - 500px); /* Adjust the width as needed */
          float: left;
          width: 600px;
        }
        
        /* Add styles for the left bar */
        .left-bar {
          width: 300px; /* Adjust the width as needed */
          float:right;
          background-color: #33ABF9;
        }
        </style>
        </head>
        <body>
        
        <div>
        <!-- Side Navigation Menu -->
        <div class="sidenav">
          <h2>Admin Control</h2>
            <p4>Here you can manage users and their passwords.</p4>
        <h2>EMPLOYEE LIST</h2>
      
        <?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Query to retrieve data from the database
$query = "SELECT username, password FROM users WHERE accesstype='employee'";

// Execute the query
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

// Create the HTML table with id employee
echo "<table id='employee'>";
echo "<thead><tr><th>Name</th><th>Password</th></tr></thead>";
echo "<tbody>";

// Loop through the result set and populate the table rows
while ($row = pg_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
}

echo "</tbody></table>";

// Free up memory and close the database connection
pg_free_result($result);
pg_close($conn);
?>


</body>
</html>

        </div>
        </div>
        
        <!-- Main Content -->
        <div class="main">
          
        <!-- Right Bar -->
        <div class="right-bar">
            <div>
            
            </div> 
        </div>
        <h1>STEGAM LAUNDRY SERVICES</h1>
        <h2>Insider information</h2>
        <!-- Center Bar -->
        <div class="center-bar">
            <h2>Inventory List</h2>
            <?php
 $host = "localhost";
 $dbname = "postgres";
 $user = "postgres";
 $password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Query to retrieve data from the database
$query = "SELECT * FROM stock";

// Execute the query
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

// Create the HTML table with id stock
echo "<table id='stock'>";
echo "<thead><tr><th>product</th><th>quantity</th><th>checkbox</th></tr></thead>";
echo "<tbody>";

// Loop through the result set and populate the table rows
while ($row = pg_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['item'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['checkbox'] . "</td>";
  echo "</tr>";
}

echo "</tbody></table>";

// Free up memory and close the database connection
pg_free_result($result);
pg_close($conn);
?>
            
           
        </div>
                
        
        <!-- Left Bar -->
        <div class="left-bar">
            <h2>Report Generation</h2>
            <p>This is where you can generate reports for the system.</p>
            <!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

/* Style for the last activity view */
#last-activity {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
}

</style>
</head>
<body>

<!-- Last Activity View -->
<div id="last-activity">
  <h2>Last Activity View</h2>
  <p>Display the last activity of the system here.</p>
</div>


<div id="">
  <h2>NAVIGATE</h2>
  <ol>
    <li><a href="ORDER.php"><button>ORDER</button></li>
    <li><a href="DELETE.php"><button>DELETE</button></li>
    <li><a href="ADD.php"><button>ADD</button></li>
    <li><a href="index.php"><button>HOME</button></li>
    <li><a href ="PROFILE.php"><button>EMPLOYEE PROFILES</button></li>
    <li><button>LOG OUT</button></li>
    

    
  </ol>
</div>
</div>

<script>
// JavaScript code to display last activity view
var lastActivity = document.getElementById("last-activity");
lastActivity.innerHTML = "Last activity: " + new Date();

// JavaScript code to display list of employees who have logged in
var employeeList = document.getElementById("employee-list");
var employees = ["Employee A", "Employee B", "Employee C"]; // Replace with actual employee data
employees.forEach(function(employee) {
  var li = document.createElement("li");
  li.appendChild(document.createTextNode(employee));
  employeeList.querySelector("ul").appendChild(li);
});
</script>

</body>
</html>

        </div>
        
        </div>
      
        </body>
        </html>
        