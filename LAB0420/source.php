<?php
require_once('product.php');

$products = array(new Product("prod1", 234), new Product("prod2", 176), new Product("prod3", 50), new Product("prod4", 981));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prod = new Product($_POST['name'], $_POST['price']);
    array_push($products, $prod);
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $prod = Product::SearchByName($products, $search);
    if ($prod != null) {
        echo $prod -> GetProd();
    } else {
        echo "Product not found :(";
    }
}
?>

<html>
<body style="background-color: #e6edf3; color: #1f1f1f; font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',
Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji';">
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>Price:</label>
        <input type="text" name="price"><br>
        <input type="submit" value="Add">
    </form>
    
    <?php
    foreach ($products as $product) {
        echo $product -> GetSearchProd();
    }
    ?>
    
    <form method="GET">
        <label>Search:</label>
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
</body>
</html>
