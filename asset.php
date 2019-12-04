<?php
	include 'database.php';
	function getAsset(){
	$dbConn = getDatabaseConnection();
	$equip = $_POST['searched'];
    $sql = "SELECT * FROM assets WHERE equip = $equip";

    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll();

    foreach ($records as $record) {
      $webpage = $record['web_page'];
      echo '<h2> ' . $record["equip"] . '</h2>';
      echo '<h2> ' . $record["man_name"] . '</h2>';
      echo '<h2> ' . $record["addr"] . '</h2>';
      echo '<h2> ' . $record["phone"] . '</h2>';
      echo '<h2> ' . $webpage . '</h2>';
      echo '<h2> ' . $record["model"] . '</h2>';
      echo '<h2> ' . $record["purchased"] . '</h2>';
      echo '<h2> ' . $record["price"] . '</h2>';
      echo '<h2> ' . $record["exp"] . '</h2>';
      echo '<h2> ' . $record["retired"] . '</h2>';
      echo '<h2> Comments:</h2>';
      echo '<p> ' . $record["comments"] . '</p>';
    }
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Assets</title>
  </head>
  <body>
    <h1>All Assets:</h1>
    <!--- display all assets here --->
    <?php
      getAsset();
    ?>
  </body>
</html>