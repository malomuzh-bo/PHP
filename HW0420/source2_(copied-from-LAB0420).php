<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        hr{
            border: #7d8590 1px solid;
        }
    </style>
</head>
<body style="background-color: #0d1117; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #e6edf3">
<?php
include_once 'product.php';
include_once 'monitor.php';
include_once 'phone.php';
include_once 'session.php';

$products = array(
    new Phone("Galaxy S22", 30000, "ok", "Samsung", "CPU1", 6, 2, 128, "Android"),
    new Monitor("Monitor1", 400, "Info1", "Brand1", 27, 60, "HDMI, DisplayPort"),
    new Phone("IPhone 7", 8000, "k.o.", "Apple", "CPU2", 4, 1, 64, "IOS"),
    new Monitor("Monitor2", 849, "Info2", "Brand2", 40, 260, "2xHDMI, DisplayPort, USB-C"),
    new Phone("IPhone 14 Pro", 40000, "OK", "Apple", "CPU3", 6, 2, 256, "IOS"),
);

$session = new Session();
?>

<?php
echo "Трошечки темної теми, шоб очі кайфанули <i>(напевно)</i>";

$arr = array();

foreach ($products as $item) {
    echo    "<form method='post'>
                <p name='product'>".$item -> GetProduct()."</p>
                <input type='submit' class='customBtn' name='addToCart' value='Add to Cart' 
                data-item='" . htmlspecialchars(json_encode($item)) . "' />                
            </form>
            <hr>";
    array_push($arr, $item);
}
?>
<?php
session_start();
echo "<form action='cart2.php'><button>To Cart</button></form>";
$_SESSION['cart_arr'] = serialize($arr);
?>
<script>
    var addToCart = document.querySelectorAll('.customBtn');

    addToCart.forEach(button => {
        button.addEventListener('click', event => {
            event.preventDefault();
            <?php
                $session -> AddToCart($item);
            ?>
        });
    });
</script>
</body>
</html>