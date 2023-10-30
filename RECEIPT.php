<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8">
    <title>SYEGAM LAUNDRY SERVICES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    </head>
    
        <style>
            .container7 {
              display:flexbox;
              float: right;
              width: min-content;
              justify-content: space-evenly;
              align-items: center;
              height: min-content;
            }
        </style>
        <body>
            <div class="container7"></div>
        <H>STEGAM LAUNDRY SERVICES</H>
        <p> THANKYOU FOR BEING WITH US. BELOW IS  HOW TO GET YOUR RECEIPT. ENSURE TO FILL THE RIGHT DETAILS</p>
  <style>
    /* CSS styles for the payment box */
    .payment-box {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .payment-box label {
      display: block;
      margin-bottom: 10px;
    }
    .payment-box input[type="radio"] {
      margin-right: 5px;
    }
    .payment-box button {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Payment Selection</h1>

  <div class="payment-box">
    <label>
      <input type="radio" name="paymentMethod" value="mpesa"> Pay with M-Pesa
    </label>
    <label>
      <input type="radio" name="paymentMethod" value="card"> Pay with Card
    </label>
    <button onclick="processPayment()">Process Payment</button>
  </div>

  <script>
    // JavaScript code to handle payment selection and receipt generation
    function processPayment() {
      const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

      if (paymentMethod === 'mpesa') {
        alert('Please follow these steps to complete the payment with M-Pesa:\n\n1. Dial *150*00# on your phone.\n2. Select "Send Money".\n3. Enter the recipient number provided.\n4. Enter the total amount to be paid.\n5. Confirm the transaction.\n6. Wait for the confirmation message from M-Pesa.');
      } else if (paymentMethod === 'card') {
        alert('Please follow these steps to complete the payment with a card:\n\n1. Enter your card details in the provided fields.\n2. Click "Submit" to process the payment.\n3. Wait for the confirmation message from your bank.');
      }

      printReceipt();
    }

    function printReceipt() {
      const totalCost = calculateTotalCost(); // Replace this with your own calculation logic

      const receipt = `
        Receipt
        --------
        Total Cost: $${totalCost}
        Payment Method: ${document.querySelector('input[name="paymentMethod"]:checked').value}
        Date: ${new Date().toLocaleDateString()}
        Time: ${new Date().toLocaleTimeString()}
      `;

      console.log(receipt); // Replace this with your own receipt printing logic
    }

    function calculateTotalCost() {
      // Replace this with your own calculation logic based on the previous page's total cost
      return 100; // Example value
    }
  </script>

  <style>
    /* CSS styles for the card details box */
    .card-details {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .card-details label {
      display: block;
      margin-bottom: 10px;
    }
    .card-details input[type="text"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    .card-details button {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <h1>Card Details</h1>

  <div class="card-details">
    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" placeholder="Enter card number">

    <label for="expiration-date">Expiration Date:</label>
    <input type="text" id="expiration-date" placeholder="Enter expiration date">

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" placeholder="Enter CVV">

    <button onclick="submitCardDetails()">Submit</button>
  </div>

  <script>
    function submitCardDetails() {
      const cardNumber = document.getElementById('card-number').value;
      const expirationDate = document.getElementById('expiration-date').value;
      const cvv = document.getElementById('cvv').value;

      // Perform further processing or validation here
      console.log('Card Number:', cardNumber);
      console.log('Expiration Date:', expirationDate);
      console.log('CVV:', cvv);
    }
  </script>
</body>
<a href="index.php" class="blink-button">HOME</a>
<button onclick="myFunction()">Log Out</button>
<script>
    function myFunction() {
      var r = confirm("Are you sure you want to log out?");
      if (r == true) {
        window.close(); // Closes the current window
      } else {
        // Do nothing
      }
    }
    </script>  
</html>
