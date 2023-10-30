<!DOCTYPE html>
<html>
<head>
  <title>Payslip Form</title>
  
</head>
<body>
  <body bgcolor="aqua">
  <h1>STEGAM LAUNDRY SERVICES</h1>
    <div class="up">
      <style>
        .up{
          height: max-content;
          background-color: white;
          color: black;
          padding: 10px;
          margin-top: 5px;
        }
        </style>
  <h1>Payslip Form</h1>
  <form method="post" action="generate.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="day">Day:</label>
    <input type="date" id="day" name="day" required><br><br>

    <label for="timein">Time in:</label>
    <input type="time" id="timein" name="timein" step="1"><br><br>

    <label for="timeout">Time out:</label>
    <input type="time" id="timeout" name="timeout" step="1"><br><br>

    <button type="submit">Generate Payslip</button>
  </form>
    </div>
 <div class="down">
  <style>
    .down{
      background-color: navajowhite;
      diplay :flex;
      flex-direction: row;
      justify-content: space-between;
    }
  .downbuttons{
    background-color: #34CCFF;
    color: black;
    height: 100px;
  display: flex;
  flex-direction:row-reverse;
  justify-content: space-between;
  }
  </style>
<div class ="downbuttons">
  
<a href="index.php" class="blink-button">HOME</a>
    <a href="TIME CARD.php" class="blink-button">EMPLOYEE</a>
    <a href="ABOUT.php" class ="blink-button">ABOUT</a>
</body>
</html>
