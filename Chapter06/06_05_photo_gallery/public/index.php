<?php
require_once("../includes/database.php");

if(isset($database)) { echo "true"; } else { echo "false"; }
echo "<br />";

echo $database->escape_value("It's working?<br />");

// $sql  = "INSERT INTO users (id, username, password, first_name, last_name) ";
// $sql .= "VALUES (1, 'kskoglund', 'secretpwd', 'Kevin', 'Skoglund')";
// $result = $database->query($sql);

$sql = "SELECT * FROM users WHERE id = 1";
$result_set = $database->query($sql);
$found_user = $database->fetch_array($result_set);
echo $found_user['username'];

?>