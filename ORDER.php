<!DOCTYPE html>
<html>
<head>
    <title>STEGAM LAUNDRY SERVICES</title>
    <style>
        .topnav1 {
            background-color: #17ecec;
            color: black;
            height: 100px;
            align-items: center;
        }

        .bottom1 {
            background-color: #17ecec;
            color: white;
            height: 100px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
    </style>
</head>
<body bgcolor="#17ecec">
    <div class="topnav1">
        <h1>STEGAM LAUNDRY SERVICES</h1>
        <h2>ADMIN ORDER FORM</h2>
    </div>

    <form method="post" action="send.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="orderto">To:</label>
        <input type="text" id="Name1" name="Name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="Email1" name="Email" required><br><br>

        <label for="item">Item:</label>
        <input type ="item" id="item"  name="item" required><br></br>

        <label for="quantity">Quantity:</label>
        <input type ="quantity" id ="quantity" name ="quantity" required><br></br>

        <button type="submit">SUBMIT ORDER</button>
    </form>
    </div>
    <br>
    <div class="bottom1">
    <a href="index.php"><button>HOME</button></a>
    <a href="ADD.php"><button>ADD</button></a>
    <a href="DELETE.php"><button>DELETE</button></a>

    <a href="REVIEW.php"><button>REVIEW</button></a>
    <a href="INSIDER.php"><button>ADMIN</button></a>
    </div>
</body>
</html>
