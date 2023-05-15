<?php
$tickets_file = 'tickets.txt';
if (file_exists($tickets_file)) {
    $tickets_json = file_get_contents($tickets_file);
    $tickets = json_decode($tickets_json, true);
} else {
    $tickets = null;
}
?>

<html>
<head>
    <title>Tickets</title>
</head>
<body>
<?php
    if ($tickets && count($tickets)){
        
    }
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">Count</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($tickets as $ticket) {
        echo "<tr><td>" . $ticket['date'] . "</td>";
        foreach ($ticket['items'] as $item) {
            echo "<td>" . $item['title'] . "</td>" . "<td>" . $item['count'] . "</td>" . "<td>" . number_format($item['price']) . "</td>" . "<td>" . number_format($item['total']) . "</td>";
        }
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
<hr>
<?php
$total = 0;
foreach ($tickets as $ticket) {
    foreach ($ticket['items'] as $item) {
        $total += floatval($item['total']);
    }
}
echo "Total of totals: " . number_format($total);
?>
</body>
</html>