<?php

$content = file_get_contents("les5_data.json");
$result = json_decode($content, true);

echo "<pre>";
print_r($result);

?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Телефонный справочник</title>
	</head>
	<body>
		<table>
			<?php foreach ($result as $data) { ?>
			<tr>
				<td><?php echo $data['firstName']; ?></td>
				<td><?php echo $data['lastName']; ?></td>
				<td><?php echo $data['address']; ?></td>
				<td><?php echo $data['phoneNumber']; ?></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>
