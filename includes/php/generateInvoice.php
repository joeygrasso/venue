<?php
	// Generate Invoice
	$rID = $_GET['rID'];
	$start = $_GET['start'];
	$end = $_GET['end'];
	$venue = $_GET['venue'];

	switch($venue){
		case 'Beach':
			$rate = 150;
		break;

		case 'Downtown':
			$rate = 250;
		break;

		case 'Plantation':
			$rate = 350;
		break;
	}

	$daylen = 60*60*24;

    $numOfDays = (strtotime($end)-strtotime($start))/$daylen;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Invoice</title>
	</head>
	<body>
		<img src="../../images/logo.png" alt="Venu" />
		<table cellspacing="20" cellpadding="10">
			<tr>
				<td><h1>INVOICE</h1></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Mail Payments To:</td>
				<td><strong>Venu Reservations</storng><br /> 123 Main St. <br /> Savannah, GA 31419</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><strong>Venue</strong></td>
				<td><strong>Start Date</strong></td>
				<td><strong>End Date</strong></td>
				<td><strong>Number of Days</strong></td>
				<td><strong>Rate</strong></td>
			</tr>
			<tr>
				<td><?php echo $venue; ?></td>
				<td><?php echo $start; ?></td>
				<td><?php echo $end; ?></td>
				<td><?php echo $numOfDays; ?></td>
				<td>$<?php echo $rate; ?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<th>TOTAL:</th>
				<td>$<?php echo $rate * $numOfDays; ?></td>
			</tr>
		</table>
	</body>
</html>



