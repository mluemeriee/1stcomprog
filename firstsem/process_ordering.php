<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fast Food Ordering System</title>
</head>
<body>
    <h1>Fast Food Ordering System</h1>
    <form action="" method="post">
        <h2>Menu</h2>

        <label for="burger">Burger - ₱25</label>
        <input type="checkbox" id="burger" name="items[]" value="Burger"><br>

        <label for="pizza">Pizza - ₱125</label>
        <input type="checkbox" id="pizza" name="items[]" value="Pizza"><br>

        <label for="fries">Fries - ₱30</label>
        <input type="checkbox" id="fries" name="items[]" value="Fries"><br>

        <label for="soda">Soda - ₱25</label>
        <input type="checkbox" id="soda" name="items[]" value="Soda"><br>

        <label for="milk_tea">Milk Tea - ₱100</label>
        <input type="checkbox" id="milk_tea" name="items[]" value="Milk Tea"><br>
		
		<label for="burger">Spaghetti - ₱75</label>
        <input type="checkbox" id="Spaghetti" name="items[]" value="Spaghetti"><br>
		
		<label for="burger">Fried Chicken - ₱60</label>
        <input type="checkbox" id="Fried_Chicken" name="items[]" value="Fried Chicken"><br>
		
		<label for="burger">Lumpia - ₱30</label>
        <input type="checkbox" id="Lumpia" name="items[]" value="Lumpia"><br>
		
		<label for="burger">Sotanghon - ₱150</label>
        <input type="checkbox" id="Sotanghon" name="items[]" value="Sotanghon"><br>
		
		<label for="burger">Peach Mango Pie - ₱49</label>
        <input type="checkbox" id="Peach_MAngo_Pie" name="items[]" value="Peach Mango Pie"><br>
		
		<label for="burger">Cheesecake - ₱75</label>
        <input type="checkbox" id="Cheesecake" name="items[]" value="Cheesecake"><br>

        <h3>Contact Information</h3>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <h3>Payment</h3>
        <label for="cash">Enter Cash Amount (₱):</label>
        <input type="number" id="cash" name="cash" min="0" required><br><br>

        <button type="submit">Place Order</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Initialize the total price
        $totalPrice = 0;

        // Get the ordered items
        $selectedItems = $_POST['items'] ?? [];
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $cash = floatval($_POST['cash']);

        // Display the receipt
        echo "<h2>Order Receipt</h2>";
        echo "Thank you, <strong>$name</strong>, for your order!<br>";
        echo "Delivery Address: <strong>$address</strong><br>";
        echo "<h3>Items Ordered:</h3>";

        // Loop through each selected item and calculate total price
        foreach ($selectedItems as $item) {
            $price = 0;
            if ($item === 'Burger') $price = 25;
            elseif ($item === 'Pizza') $price = 125;
            elseif ($item === 'Fries') $price = 30;
            elseif ($item === 'Soda') $price = 25;
            elseif ($item === 'Milk Tea') $price = 100;
			elseif ($item === 'Spaghetti') $price = 75;
			elseif ($item === 'Fried Chicken') $price = 60;
			elseif ($item === 'Lumpia') $price = 30;
			elseif ($item === 'Sotanghon') $price = 150;
			elseif ($item === 'Cheesecake') $price = 70;
			elseif ($item === 'Peach Mango Pie') $price = 49;

            // Add to total price
            $totalPrice += $price;

            // Display item and price
            echo "<p>$item - ₱$price</p>";
        }

        // Display total price
        echo "<h3>Total Price: ₱$totalPrice</h3>";

        // Calculate and display change
        if ($cash >= $totalPrice) {
            $change = $cash - $totalPrice;
            echo "<h3>Cash Given: ₱$cash</h3>";
            echo "<h3>Change: ₱$change</h3>";
        } else {
            echo "<h3 style='color: red;'>Insufficient cash! Please provide at least ₱$totalPrice.</h3>";
        }
    }
    ?>
</body>
</html>