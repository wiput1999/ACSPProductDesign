<?
	header('Content-Type: application/json');
	include 'dbc.php';
	$stmt = $conn->query("SELECT count(id) AS num_id, style FROM vote GROUP BY style");
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$result = [];
	foreach ($data as $key => $value) {
		$result[$key]['num_id'] = (int) $value['num_id'];
		$result[$key]['style'] = (int) $value['style'];
	}
	//Create Array
	echo json_encode($result);
?>
