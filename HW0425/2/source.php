<?php
include_once 'product.php';

function saveTickets($tickets) {
    $filename = 'tickets.txt';
    $data = json_encode($tickets, JSON_PRETTY_PRINT);
    file_put_contents($filename, $data);
}

function loadTickets() {
    $filename = 'tickets.txt';
    if (file_exists($filename)) {
        $data = file_get_contents($filename);
        return json_decode($data, true);
    } else {
        return array();
    }
}

$items = array();
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['title']) && isset($_POST['count']) && isset($_POST['price'])) {
        $title = $_POST['title'];
        $count = intval($_POST['count']);
        $price = floatval($_POST['price']);
        $product = new Product($title, $count, $price);
        $items[] = $product -> toArray();
        $tickets = loadTickets();
        $tickets[] = array(
            'date' => date('H:i'),
            'items' => $items
        );
        saveTickets($tickets);
    }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #e6edf3; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #0d1117">
    <h2>Adding Item</h2>
    <form method="post">
        <input placeholder="Title..." name="title"><br>
        <input placeholder="Count..." name="count"><br>
        <input placeholder="Price..." name="price"><br>
        <input type="submit" value="AddItem">
    </form>
    <br>
    <form method="post" action="tickets.php">
        <input type="submit" value="Buy">
    </form>
    <form method="get" action="tickets.php">
        <input type="submit" value="GetTickets">
    </form>
</body>
</html>