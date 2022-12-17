<?php 
require "inc/db.php";
include "inc/function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>result by local government</title>
</head>
<body>
    <h1>Result By Local Government Area</h1>
    <table>
        <tr>
        
        <th>party</th>
        <th>score</th>
        </tr>
        <?php total_result(); ?>
    </table>
</body>
</html>