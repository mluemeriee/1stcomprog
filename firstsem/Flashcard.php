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
	<?php
$menu = [
    "1" => ["name" => "Burger", "price" => 5.00],
    "2" => ["name" => "Fries", "price" => 2.50],
    "3" => ["name" => "Soda", "price" => 1.50],
    "4" => ["name" => "Pizza", "price" => 8.00],
    "5" => ["name" => "Salad", "price" => 4.00],
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