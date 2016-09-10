<?php
	include 'dbc.php';
    
    if ( $_SERVER['REQUEST_METHOD'] == "POST" )
    {
    	$id = $_POST['id'];
        $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");

        $stmt->bindParam(1,$id,PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $data['fname']." ".$data['lname'];

        echo $name;

    }

?>