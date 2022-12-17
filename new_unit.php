<?php 
require "inc/db.php";
include "inc/function.php";
result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Add new polling unit</title>
</head>
<body>
    <h1>Create New polling unit Result</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <select name="unit">
        <option disabled selected hidden>select polling unit</option>
            <?php pu(); ?>
        </select>
        <select name="party">
        <option disabled selected hidden>select party</option>
            <?php party(); ?>
        </select>
        <input type="text" name="score" placeholder="party score">
        <input type="text" name="user" placeholder="result entered by">
        <input type="submit" value="submit" name="submit">

    </form>

    
</body>
</html>