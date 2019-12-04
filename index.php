<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Welcome</title>
  </head>
  <body>
    <h1>Assets Creation</h1>
    <br><br>
    <h3>Welcome to our Assets Website!</h3>
    <p> To update a current asset fill in the info with correct Asset number and check update</p>
    <form method="post" action="asset.php">
      <input type="number" name="searched" placeholder="Search By Asset Number"></input>
      <input type="submit"></input>
    </form>
    <br>
    <form method="post" action="assets.php">
        Equipment Number: <input type="number" name="equip"></input> <br/>
        Manafacturer Name: <input type="text" name="man_name"></input> <br/>
        Manafacturer Addr: <input type="text" name="addr"></input> <br/>
        Manafacturer Phone: <input type="text" name="phone"></input> <br/>
        Manafacturer WebPage: <input type="text" name="web_page"></input> <br/>
        Model: <input type="text" name="model"></input> <br/>
        Date Purchased: <input type="text" name="purchased"></input> <br/>
        Price: <input type="text" name="price"></input> <br/>
        Warranty Exp: <input type="text" name="exp"></input> <br/>
        Retired Date: <input type="text" name="retired"></input> <br/>
        <textarea name="description" rows="5" cols="50" placeholder="description"></textarea><br/>
        <textarea name="comments" rows="5" cols="50" placeholder="comments"></textarea><br/>
        <input type="checkbox" name="update"> Update<br>
        <input type="submit"></input>
    </form>
    
    <a href="./assets.php"> View All Assets</a>
  </body>
</html>