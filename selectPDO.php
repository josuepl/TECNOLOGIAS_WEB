<?php
    require_once('includes/inc.conn.php'); 
    $sql= "SELECT * FROM ejemplo";
    $stmt = $mbd->prepare($sql);
    try{
        $stmt->execute();
    }
    catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $total= $stmt->rowCount();
    while ($row = $stmt->fetchObject()) {
        echo "<li>{$row->id}</li>";
    }

?>