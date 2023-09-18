<!DOCTYPE html>
<html>
<head>
	<title>Car Product Specification</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			line-height: 1.5;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
		h1 {
			font-size: 2em;
			margin-bottom: 1em;
			text-align: center;
		}
		h2 {
			font-size: 1.5em;
			margin-bottom: 0.5em;
		}
		p {
			margin-bottom: 1em;
		}
		ul {
			margin-left: 1.5em;
			margin-bottom: 1em;
		}
		table {
			border-collapse: collapse;
			margin-bottom: 1em;
			width: 100%;
		}
		th, td {
			border: 1px solid black;
			padding: 0.5em;
			text-align: left;
		}
		th {
			background-color: #eee;
		}
		.specification {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			margin: 1em;
			padding: 1em;
			max-width: 800px;
			margin: 0 auto;
		}
		.specification h2 {
			border-bottom: 1px solid #ccc;
			margin-top: 1em;
			padding-bottom: 0.5em;
		}
		.specification p {
			margin-bottom: 0.5em;
		}
		.specification ul {
			margin-bottom: 0.5em;
		}
		.specification table {
			margin-bottom: 0.5em;
		}
		.car-image {
			max-width: 100%;
			height: auto;
			margin-bottom: 1em;
		}
	</style>
</head>
<body>
	<h1>Car Product Specification</h1>

<?php
	// Define car information as an array
	$car_info = array(
		'make' => 'Toyota',
		'model' => 'Camry',
		'year' => 2022,
		'color' => 'Silver',
		'price' => '$29,970'
	);

	// Define car features as an array
	$car_features = array(
		'3.5L V6 engine',
		'8-speed automatic transmission',
		'Front-wheel drive',
		'17-inch alloy wheels',
		'LED headlights',
		'Bluetooth connectivity',
		'Apple CarPlay and Android Auto compatibility',
		'Backup camera',
		'Adaptive cruise control',
		'Lane departure warning'
	);

	// Define car technical specifications as an array
	$car_specs = array(
		'Engine' => '3.5L V6',
		'Horsepower' => '301 hp',
		'Torque' => '267 lb-ft',
		'Transmission' => '8-speed automatic',
		'Drive Type' => 'Front-wheel drive',
		'Length' => '192.1 in',
		'Width' => '72.4 in',
		'Height' => '56.9 in',
		'Curb' => '56 in',
        'Weight' => '3,571 lb',
		'Fuel Economy (city/highway/combined)' => '22/33/26 mpg',
		'Seat Capacity' => '5'
	);
?>

<div class="specification">
	<img src="image/camry.jpg" alt="Toyota Camry" class="car-image">

	<h2><?php echo $car_info['year'] . ' ' . $car_info['make'] . ' ' . $car_info['model'] . ' - ' . $car_info['color']; ?></h2>

	<table>
		<tr>
			<th>Price</th>
			<td><?php echo $car_info['price']; ?></td>
		</tr>
	</table>

	<h2>Features</h2>

	<ul>
		<?php foreach ($car_features as $feature) {
			echo '<li>' . $feature . '</li>';
		} ?>
	</ul>

	<h2>Technical Specifications</h2>

	<table>
		<?php foreach ($car_specs as $spec_name => $spec_value) {
			echo '<tr><th>' . $spec_name . '</th><td>' . $spec_value . '</td></tr>';
		} ?>
	</table>

</div>
</body>
</html>
