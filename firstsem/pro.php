<?php
$menu = [
    "1" => ["name" => "Burger", "price" => 55.00],
    "2" => ["name" => "Fries", "price" => 30.50],
    "3" => ["name" => "Soda", "price" => 30.50],
    "4" => ["name" => "Pizza", "price" => 550.00],
    "5" => ["name" => "Salad", "price" => 300.00],
];

$total = 0;
$order = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($menu as $key => $item) {
        if (!empty($_POST["item_$key"])) {
            $quantity = intval($_POST["item_$key"]);
            if ($quantity > 0) {
                $order[$key] = $quantity;
                $total += $item["price"] * $quantity;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1B Shop</title>
</head>
<body>
    <h1>Welcome to 1B Shop!</h1>
    <form method="post">
        <h2>Menu:</h2>
        <?php foreach ($menu as $key => $item): ?>
            <div>
                <label>
                    <?php echo $item['name']; ?> - ₱<?php echo number_format($item['price'], 2); ?> 
                    <input type="number" name="item_<?php echo $key; ?>" min="0" value="0">
                </label>
            </div>
        <?php endforeach; ?>
        <button type="submit">Place Order</button>
    </form>

    <?php if (!empty($order)): ?>
        <h2>Your Order:</h2>
        <ul>
            <?php foreach ($order as $key => $quantity): ?>
                <li>
                    <?php echo $menu[$key]['name']; ?> x <?php echo $quantity; ?> - ₱<?php echo number_format($menu[$key]['price'] * $quantity, 2); ?> <!-- CHANGE TO PESO SIGN -->
                </li>
            <?php endforeach; ?>
        </ul>
        <h3>Total Amount: ₱<?php echo number_format($total, 2); ?></h3> 
    <?php endif; ?>
</body>
</html>