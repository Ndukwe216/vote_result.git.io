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
    <title>view polling results</title>
</head>
<body>
    <a href="lga.php">View By LGA</a>
    <a href="new_unit.php">Create A polling Unit</a>
   <h1>List of polling Units</h1>
   <table>
    <tr>
    <th>Polling Unique Id</th>
    <!-- <th>Polling Unit Id</th> -->
    <th>Polling Unit Name</th>
    <th>Action</th>
    </tr>
    <?php view_polling_units(); ?>
   </table>


    
</body>
</html>