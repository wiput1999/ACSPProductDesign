<?php
	include 'dbc.php';

    $captcha = $_POST['captcha'];
    if ( $captcha == 0 ) {
        echo "err_captcha";
    }
    else {
        if ( $_SERVER['REQUEST_METHOD'] == "POST")
        {
        	$id = $_POST['id'];
            $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");

            $stmt->bindParam(1,$id,PDO::PARAM_STR);
            $stmt->execute();

            if ( $stmt->rowCount() != 1 ) { // exist
                echo "notfound";
            }
            else {
            	$data = $stmt->fetch(PDO::FETCH_ASSOC);

    	        $name = $data['fname']." ".$data['lname'];

    	        echo $name;
            }
        }
        else {
        	echo "failed";
        }
    }

?>