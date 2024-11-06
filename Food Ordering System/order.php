<?php
// Database connection parameters
$host = 'sql101.infinityfree.com';
$db = 'if0_34452243_foodorderingsystem';
$user = '	if0_34452243';
$password = 'fntfUZInZh2mPdj';

// Create a PDO instance
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Get the form data
$name = $_POST['name'];
$food = $_POST['food'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
// Insert the order into the database
$sql = "INSERT INTO orders (name, food, quantity,price) VALUES (?, ?, ?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $food, $quantity,$price]);





// Close the database connection
$pdo = null;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Page</title>
  <link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body style="background:url(payyy.jpg);background-repeat:no repeat;background-size:100%">
  <div class="container">
    <h1>Payment Page</h1>
    <form action="placed.html" method="post">
      <div class="form-group">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number" required>
      </div>
      <div class="form-group">
        <label for="expiration">Expiration Date</label>
        <input type="text" id="expiration" name="expiration" placeholder="MM/YYYY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
      </div>
      <div class="form-group">
        <label for="name">Name on Card</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <button type="submit">Submit Payment</button>
    </form>
  </div>
</body>
</html>

