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
    <title>view results</title>
</head>
<body>
    <h1>Result for Polling unit</h1>
    <table>
        <tr>
            <th>Party Name</th>
            <th>Party score</th>
        </tr>
        <?php view_pu_result(); ?>

    </table>
    
</body>
</html>