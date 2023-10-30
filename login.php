
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Access Page</title>
    
    <style>
        /* Add your CSS styles here */
        
            body{

color: #fff;
font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-size: small;
background:linear-gradient(rgba(10, 10, 10, 0.7), rgba(32, 32, 32, 0.7)),url( "https://th.bing.com/th/id/OIP.dqm73wSA9gEYiLtQD2HchwHaFj?pid=ImgDet&rs=1");
opacity: 2;
background-size: cover;
background-blend-mode: darken;

}
            
        
        .form-container {
            max-width: 500px;
            height: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #d5e0dd;
            color: black;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
        }
        
        .form-group button {
            padding: 10px 20px;
            
            background-color: #4CAF50;
            color: white;
            border: none;
            justify-items: center;
        }
    header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}
        @media screen and (max-width: 768px) {
            header {
                font-size: 24px;
            }
        }    
    </style>
</head>
<body>
    <h>STEGAM LAUNDRY SERVICES</h>
    <style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px #ccc;
			width: 300px;
		}
        input[type="submit"] {
			padding: 10px;
			margin-top: 20px;
			background-color: #4CAF50;
			color: white;
			border-radius: 5px;
			border: none;
			cursor: pointer;
		}
	</style>

    <form method="post" action="process.php">
		<label for="accesstype">Access Type:</label>
		<select id="accesstype" name="accesstype">
			<option value="admin">Admin</option>
			<option value="employee">Employee</option>
            <option value ="customer">Customer</option>
		</select>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <input type="submit" value="Submit">
        
    </form>
    <button id="toggleHelp">Show Help</button>
    <div id="helpContainer" class="hidden">
        <div class="helpContent">
                <h2>How to Operate the System</h2>
                <div class="paragraph">
                    <p class="sentence">1. FOR ADMIN AND EMPLOYEES, YOU HAVE TO SET A PASSWORD THAT WILL GRANT YOU ACCESS TO THE SYSTEM. FOR A CUSTOMER, CLICK SUBMIT TO PROCEED</p>
                        <p class="sentence"> 2. BE SURE TO PROVIDE THE RIGHT DETAILS WHEN BOOKING.</p>
                        <p class="sentence"> 3.BE CAUTIOUS NOT TO PROVIDE SENSITIVE INFORMATION. PLEASE SEE OUR CONTACTS AT THE BOTTOM OF THE HOME PAGE.THOSE ARE THE CONTACTS THAT WE USE TO REACH OUR CUSTOMERS.</p>
                        <p class="sentence">4.ONLY ADMIN HAS ACCESS TO THE INSIDER INFORMATION.</p>
                        <p class="sentence">5.TO EXIST SYSTEM AFTER LOGIN, FIND THE LOG OUT BUTTON IN THE HOME PAGE</p>
                        <p class="sentence"> 6. EMPLOYEES ARE ADVISED TO REGULARY CHANGE THEIR PASSWORDS AS ADVISED BY THE ADMIN.</p>
        </div>
            <button id="closeHelp">Close</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleHelpButton = document.getElementById('toggleHelp');
            const helpContainer = document.getElementById('helpContainer');
            const closeHelpButton = document.getElementById('closeHelp');
        
            toggleHelpButton.addEventListener('click', function () {
                helpContainer.classList.toggle('hidden');
            });
        
            closeHelpButton.addEventListener('click', function () {
                helpContainer.classList.add('hidden');
            });
        });
        
    </script>

</body>
</html>
