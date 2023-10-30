<html>
    <head>
        
    <meta charset="utf-8">
    <title>STEGAM LAUNDRY SERVICES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    </head>
    <body>
        
        <h1>STEGAM LAUNDRY SERVICES<sub></sup>Your N0.1 expert cleaning partner</sub></h1>
        <!DOCTYPE html>
<html>
<head>
  <title>Database Example</title>
  <!DOCTYPE html>
<html>
<head>
  <title>Database Example</title>
  <style>
    /* CSS styles for the table */
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h1>Service Cost Calculator</h1>

  <table id="serviceTable">
    <tr>
      <th>Service</th>
      <th>Cost per Item</th>
      <th>Items</th>
      <th>Total Cost</th>
    </tr>
    <!-- Data will be dynamically inserted here -->
  </table>

  <script>
    // JavaScript code to retrieve data from the database
    // and calculate the total cost for a service
    const services = [
      { name: 'WASH AND FOLD', cost: 100 },
      { name: 'IRONING', cost: 50 },
      { name: 'DRY CLEANING', cost: 200 },
      {name:'CARPET CLEANING', cost :800}
      // Add more services as needed
    ];

    // Function to display the data in the table
    function displayData() {
      const table = document.getElementById('serviceTable');
      let totalCost = 0;

      services.forEach(service => {
        const row = table.insertRow();
        const nameCell = row.insertCell(0);
        const costCell = row.insertCell(1);
        const itemsCell = row.insertCell(2);
        const totalCostCell = row.insertCell(3);

        nameCell.innerHTML = service.name;
        costCell.innerHTML = `$${service.cost}`;
        itemsCell.innerHTML = `<input type="number" min="0" value="0" onchange="calculateTotalCost(this, ${service.cost}, ${services.indexOf(service)})">`;
        totalCostCell.innerHTML = `$0`;

        totalCost += service.cost;
      });

      // Display the total cost
      const totalRow = table.insertRow();
      const totalLabelCell = totalRow.insertCell(0);
      const emptyCell1 = totalRow.insertCell(1);
      const emptyCell2 = totalRow.insertCell(2);
      const totalCostCell = totalRow.insertCell(3);

      totalLabelCell.innerHTML = '<strong>Total Cost:</strong>';
      emptyCell1.innerHTML = '';
      emptyCell2.innerHTML = '';
      totalCostCell.innerHTML = `<strong>$${totalCost}</strong>`;
    }

    // Function to calculate the total cost based on the number of items
    function calculateTotalCost(input, costPerItem, index) {
      const table = document.getElementById('serviceTable');
      const row = table.rows[index];
      const itemsCell = row.cells[2];
      const totalCostCell = row.cells[3];
      
      let itemsCount = parseInt(input.value);
      
      if (isNaN(itemsCount) || itemsCount < 0) {
        itemsCount = 0;
        input.value = 0;
      }

      let totalCost = itemsCount * costPerItem;
      
      if (isNaN(totalCost)) {
        totalCost = 0;
      }

      totalCostCell.innerHTML = `$${totalCost}`;

      // Recalculate the overall total cost
      let overallTotalCost = 0;

      for (let i = 1; i < table.rows.length - 1; i++) {
        overallTotalCost += parseInt(table.rows[i].cells[3].innerHTML.slice(1));
      }

      table.rows[table.rows.length - 1].cells[3].innerHTML = `<strong>$${overallTotalCost}</strong>`;
    }

    // Call the displayData function to populate the table
    displayData();
  </script>
  <a href="BOOK.php" class="blink-button">BOOK</a>
  <a href="index.php" class="blink-button">HOME</a>
  <a href="RECEIPT.php" class="blink-button">RECEIPT</a>
</body>
</html>
