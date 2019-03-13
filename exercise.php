<?php 
	include 'db.php';

	$stmt = $pdo->prepare('SELECT * FROM work');
	$stmt->execute();

	$results = $stmt->fetchAll();

	echo json_encode($results);

?>
