<?php

require '../config/db_config.php';


 $id  = $_POST["id"];

 $sql = "DELETE FROM student WHERE id = '".$id."'";

 $result = $mysqli->query($sql);

 echo json_encode([$id]);

?>
