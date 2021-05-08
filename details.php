<?php
require_once 'components/db_connect.php';

if ($_GET['id']) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM travel WHERE id = $id";
	$result = $connect->query($sql);

	if ($result->num_rows == 1) {
		$data = $result->fetch_assoc();
		$name = $data['name'];
		$state = $data['state'];
		$price = $data['price'];
		$descript = $data['descript'];
		$lat = $data['lat'];
		$lng = $data['lng'];
		$pic = $data['pic'];
		$days = $data['days'];
		$info = $data['info'];

		if ($pic == $defpic) {
			$message = "
			<br><br>
			<img id='descimg' src='$pic' alt='$name'>
            <br><br>";
		} else {
			$message = "
			<br><br>
			<img id='descimg' src='$pic' alt='$name'>
            <br><br>";
		}
		$message .= "Price: $price €<br>
			Duration: $days days<br>
			<br>
			Description:<br>
			<div id='descript'>$descript <br></div>
			<br>";
		if ($info == '#') {
			$message .= "<a href='$info'>$info</a><br><br>";
		} else {
			$message .= "<a href='$info' target='_blank'>Learn more about $name</a><br><br>";
		}
	} else {
		header("location: error.php");
	}
	$connect->close();
} else {
	header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Mount Everest - Details</title>
	<?php require_once 'components/style.php'; ?>
</head>

<body>
	<?php include 'components/navbar.php'; ?>

	<fieldset>
		<legend class='h2'><?php echo $name ?></legend>
		<font class='medtype'><?php echo $state ?></font>

		<?php echo $message; ?>

		<div id="map"></div>

		<script>
			let myLatLng;
			let map;

			function initMap() {
				myLatLng = {
					lat: <?php echo $lat ?>,
					lng: <?php echo $lng ?>
				};

				map = new google.maps.Map(document.getElementById("map"), {
					zoom: 10,
					center: myLatLng,
				});

				new google.maps.Marker({
					position: myLatLng,
					map,
					title: "<?php echo $name . ", " . $state ?>",
				});
			}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

		<br><br>
		<tr>
			<form action="crud/actions/a_update.php" method="post" enctype="multipart/form-data">
				<?php
				echo "<a href='crud/update.php?id=$id'><button class='btn btn-outline-warning' type='button'>Edit</button></a>
						<a href='crud/delete.php?id=$id'><button class='btn btn-outline-danger' type='button'>Delete</button></a>
						<a href= 'dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>
                <a href= 'index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>";
				?>
			</form>
		</tr>
		<br><br>

	</fieldset>
</body>


</html>