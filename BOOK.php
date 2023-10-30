
<html>
    <head>
    
    <title>STEGAM LAUNDRY SERVICES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    </head>
    <body>
<div class="container1">
    <div class ="booktopbar">
        <img src ="https://www.bing.com/th?id=OIP.K60qBH8x9SBqu05bmKibOwHaIv&pid=3.1&cb=&w=300&h=300&p=0" width="90px" height="90px"></img>
    <H1>STEGAM LAUNDRY SERVICES</H1>
    <a href="VIEW.php" class="blink-button">VIEW</a>
    <a href="index.php" class="blink-button">HOME</a>
    
    <a href="BILLING.php" class="blink-button">BILLING</a>
    </div>
    <div class="content">
      <h2>Please fill in all fields</h2>
      <p4>Be sure to fill in correct details.</p4>
      <form action ="insert.php" method = "post" >
        <label for=" name"> Names:</label>
        <input type="text" id="text" name="Names">
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email">
        <label for="Tel">Telephone:</label>
        <input type="number" id="number" name="Telephone">
        <label for="address">Address:</label>
        <input type="address" id="address" name="Address">
        <label for="apartment">Apartment:</label>
        <input type="text" id="text" name="Apartment">
        <label for="Date of Pick">Date of pick</label>
        <input type="date" id="date" name="date of pick">
        <label for="date of return">Date of return:</label>
        <input type="date" id="date" name="date of return">

        <input type="submit" value="Submit">
        <br>
        <input type = "submit" value = "Clear">
      </form>
    </div>
  </div>
  </body>
</html>
  