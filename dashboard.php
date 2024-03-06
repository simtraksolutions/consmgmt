<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
  </head>

  <body>
    <div class="sidebar">
      <div class="top">
        <div class="logo">Logo</div>
        <div class="cms">CMS</div>
      </div>
      <div class="list-menu">
        <div class="list-item">Home</div>
        <div class="list-item">Inventory</div>
        <div class="list-item">Report</div>
        <div class="list-item">Suppliers</div>
        <div class="list-item">Order</div>
        <div class="list-item">Manage Store</div>
      </div>
      <div class="bottom">
        <div class="settings">Settings</div>
        <div class="log-out">Log Out</div>
      </div>
    </div>

    <div class="top-bar">
      <input type="text" class="search-input" placeholder="Search..." />
    </div>

    <div class="main-content">
      <div class="overall-inventory">Overall Inventory content</div>
      <div class="buttons-container">
        <button>Add Product</button>
        <button>Delete Product</button>
        <button>Download All</button>
      </div>
      <div class="products">
        <table>
          <thead>
            <tr>
              <th>Products</th>
              <th>Buying Price</th>
              <th>Quantity</th>
              <th>Threshold Value</th>
              <th>Expiry Date</th>
              <th>Availability</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Product A</td>
              <td>$20.00</td>
              <td>50</td>
              <td>10</td>
              <td>2024-03-01</td>
              <td>In Stock</td>
            </tr>
            <tr>
              <td>Product B</td>
              <td>$30.00</td>
              <td>30</td>
              <td>5</td>
              <td>2024-04-15</td>
              <td>In Stock</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
  </body>
</html>


<?php
    //CODE HERE
    

    if($conn)
        mysqli_close($conn);
?>