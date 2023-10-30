
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

    <form method="post" action="process2.php">
		<label for="access-type">Access Type:</label>
		<select id="access-type" name="access-type">
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

        <button type="submit" id="login-button">Login</button>
    </form>
   
   