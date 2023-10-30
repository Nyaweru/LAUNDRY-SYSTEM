<!DOCTYPE html>
<html>
<head>
    <title>STEGAM LAUNDRY SERVICES</title>
    <style>
        .bodyadd {
            background-color: #17ecec;
            color: blue;
            height: 87px;
            display: flex;
            flex-direction: column;
            column-count: 2;
            align-items: center;
        }
.belowadd{
    background-color: #34CCFF;
    height: max-content;
    display:flex;
    flex-direction: row-reverse;
    justify-content: space-between;
}
    
    </style>
</head>
<body bgcolor="#17ecec">
    <div class="bodyadd">
        <h1>STEGAM LAUNDRY SERVICES</h1>
        <br>
        <h2>ADMIN ADD FORM</h2>
        <h2>ADD STOCK</h2>
        <form action="insertstock.php" method="post">
		<label for="item">Item:</label><br>
		<input type="text" id="item" name="item"><br>
		<label for="quantity">Quantity:</label><br>
		<input type="text" id="quantity" name="quantity"><br><br>
        <label for="checkbox">Checkbox:</label><br>
        <input type ="text" id="checkbox" name="checkbox"><br><br>
        <input type="submit" value="Submit">
	</form>
    <h2>ADD EMPLOYEE</h2>
	<form action="insertusers.php" method="post">
		<label for="employee">Employee:</label><br>
		<input type="text" id="employee" name="employee"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form>
    </div>
</div>
    <div class="belowadd">
        <a href="index.php"><button>HOME</button></a>
    
    <a href="DELETE.php"><button>DELETE</button></a>

    <a href="REVIEW.php"><button>REVIEW</button></a>
    <a href="INSIDER.php"><button>ADMIN</button></a>
</div>
</body>
</html>