<?php 
   include 'database.php';


  function createAsset($equip,$man_name,$addr,$phone,$web_page,$model,$purchased,$price,$exp,$comments,$description){
    $dbConn = getDatabaseConnection();
    $sql = "INSERT INTO `assets` (`id`, `equip`, `man_name`, `addr`, `phone`, `web_page`, `model`, `purchased`, `price`, `exp`, `retired`, `comments`, `description`) VALUES (NUll,'$equip', '$man_name', '$addr', '$phone', '$web_page', '$model', '$purchased', '$price', '$exp', 'no', 'test', 'test');";
  echo "SQL Query to execute: insert";
    $statement = $dbConn->prepare($sql);
    $result = $statement->execute();
    if(result){
      echo "<h1>success</h1>";
    }
    else {
      echo mysql_error();
    }
  }

  

  if( isset($_POST['equip']) && empty($_POST['retired']) && empty($_POST['update'])){
    
    createAsset($_POST['equip'],$_POST['man_name'],$_POST['addr'],$_POST['phone'],$_POST['web_page'],$_POST['model'],$_POST['purchased'],$_POST['price'],$_POST['exp'],$_POST['comments'],$_POST['description']);
  }

  

  function displayAssets(){
    $dbConn = getDatabaseConnection();
    $sql = "SELECT * FROM assets WHERE 1";

    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll();

    foreach ($records as $record) {
      $webpage = $record['web_page'];
      echo '<h2> ' . $record["equip"] . '</h2>';
      echo '<h2> ' . $record["man_name"] . '</h2>';
      echo '<h2> ' . $webpage . '</h2>';
      echo '<h2> ' . $record["price"] . '</h2>';
      echo '<h2> Comments:</h2>';
      echo '<p> ' . $record["comments"] . '</p>';
    }


  }
  echo '<h1> ' . $_POST['man_name'] . '</h2>';


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
      displayAssets();
    ?>
  </body>
</html>