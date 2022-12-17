<?php 
require "inc/db.php";
include "inc/function.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>local governments</title>
</head>
<body>
    <h1>Results By Local Government Area</h1>
    <form action="lga_total.php" method = "get">
    <select name="lga">
        <option disabled selected hidden>select lga</option>
        <?php lga_list(); ?>
    </select>
    <input type="submit" name="submit">

    </form>

    
</body>
</html>