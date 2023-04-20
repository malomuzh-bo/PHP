<!DOCTYPE html>
<html>
<head>
	<title>Lab</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Search</h2>
	<form method="post">
		<input type="text" name="search" placeholder="Enter country..."><br><br>
        <!-- <ul name="countries[]">
            <li><span>Portugal</span></li>
            <li><span>Singapore</span></li>
            <li><span>Poland</span></li>
            <li><span>Ukraine</span></li>
            <li><span>French Polynesia</span></li>
        </ul> -->
		<button type="submit" name="submit">Search</button>
	</form>
	<br>
	<?php
    $countries = array("Portugal", "Singapore", "Poland", "Ukraine", "French Polynesia");

    //if you need same like lab, comment 25-29 strings
    echo "<ul>";
    foreach ($countries as $country) {
        echo "<li><span>" . $country . "</span></li>";
    }
    echo "</ul>";

	if (isset($_POST['submit'])) {
		$search = $_POST['search'];
		echo "<ul>";
		foreach ($countries as $country) {
			if (stripos($country, $search) !== false) {
				$country = str_ireplace($search, "<span style='color:red; font-weight:bold;'>" . $search . "</span>", $country);
				echo "<li>".$country."</li>";
			}
		}
		echo "</ul>";
	}
	?>
</body>
</html>
