<!DOCTYPE html>
<html>
<head>
  <title>TIMECARD</title>
  
</head>
<body>
    <div class="topclass">
        <style>
            
                .topclass{
                    color: #2f56E9;;
                    background-color: white;
                    height: min-content;
                flex-direction: row;
                    display: flex;
                justify-content: space-around;

                }
            
            </style>
        <h1>STEGAM LAUNDRY SERVICES</h1>
        <a href="index.php" class="button">HOME</a>
        <a href="ABOUT.php" class="button">ABOUT</a>
        <img src ="https://www.bing.com/th?id=OIP.K60qBH8x9SBqu05bmKibOwHaIv&pid=3.1&cb=&w=300&h=300&p=0" width="90px" height="90px"></img>
        <br>
        <div class="container6">
        <h8>INSTRUCTIONS</h8>

        <div class="tip">
    
            <h2>1.WORKING HOURS </h2>
            <p>Be sure to fill the time card in oder to generate your slip.Be honest with your filling.</p>
        </div>

        <div class="tip">
            <h2>2.PAY.</h2>
            <p>STEGAM pays all its workers per day according to the hours worked.Once you fill the time card generate payslip.</p>
        </div>

        <div class="tip">
            <h2>3. HR</h2>
            <p>Once you dowload your payslip you can exit the system and visit the HR desk to receive your payment before walking out of the store.</p>
        </div>
    </div>
<style>
  @keyframes slide-in {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

    .container6 {
            width: 60%;
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            height: 140px;
            left: 70%;
            background-color:white ;
            color:black ;
            animation: slide-in 2s ease;
            overflow-x: hidden;
            position: fixed;
        }
        h8 {
            color: red;
        }
        .tip {
            border: 2px solid #333;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .tip h2 {
          color: blue;
        }
        .tip p {
            color: #666;
        }
    </style>
            </div>
            <div class="bottomclass">
<div class="timeform">
  <h2>Timecard Form</h2>
  <form method="post" action="submit.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="day">Day:</label>
    <input type="date" id="day" name="day" required><br><br>

    
    <label for="time">Time in:</label>
<input type="time" id="timein" name="timein" required><br><br>

<label for="time">Time out:</label>
<input type="time" id="timeout" name="timeout" required><br><br>

    <input type="submit" value="Submit">
  </form>

    
    <style>
        .bottomclass{
            color: black;
            background-color: #34CCFF;
            height: max-content;
            margin top: 5px;
        }
        </style>

<a href="PAYSLIP.php">
    <button>PAY SLIP PAGE</button>
</a>

    </div>
</body>
</html>
