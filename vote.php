<?php
    include 'dbc.php';

    $style = $_POST['style'];

    if ( $_SERVER['REQUEST_METHOD'] == "POST" && $style != 0 )
    {
        $id = $_POST['id'];

        $stmt = $conn->prepare("SELECT * FROM vote WHERE id = ?");

        $stmt->bindValue(1,$id,PDO::PARAM_STR);

        $stmt->execute();

        if ( $stmt->rowCount() == 1 ) { // exist
            echo "failed";
        }
        else { // Insert new one
            $style = $_POST['style'];

            $stmt = $conn->prepare("INSERT INTO vote (id, style) VALUES ( ? , ? )");

            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $stmt->bindValue(2, $style, PDO:: PARAM_INT);

            $stmt->execute();

            echo "success";
        }
    }
    else {
        echo "failed";
    }
?>