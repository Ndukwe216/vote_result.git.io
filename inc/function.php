<?php
// list of polling units
function view_polling_units(){
    global $con;
    
$sql = "select * from `polling_unit`  LIMIT 25";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    $u_id = $row['uniqueid'];
    // $pu_id = $row['polling_unit_id'];
    $name = $row['polling_unit_name'];

    echo "
        <tr>
    <td>$u_id</td>
    
    <td>$name</td>
    <td>
        <a href='view_result.php?viewId=$u_id'>Result</a>
    </td>
    
        </tr>
    "; 
}

}

// function to view result of a single polling unit
function view_pu_result(){
    global $con;
    if (isset($_GET['viewId'])) {
        $id = $_GET['viewId'];
        $sql = "select * from `announced_pu_results` where polling_unit_uniqueid = $id";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $party = $row['party_abbreviation'];
            $score = $row['party_score'];

            echo "
            <tr>
            <td>$party</td>
            <td>$score</td>
            </tr>
            ";
        }
    }

}
// function to list all local governments
function lga_list(){
    global $con;
    $sql = "select * from `lga`";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['lga_id'];
        $name = $row['lga_name'];

        echo "
        <option id='$id'> $name </option>
        ";
    }
}
// summed total result of all polling units
function total_result(){
    global $con;
    if (isset($_GET['submit'])) {
        $name = $_GET['lga'];
        $sql = "select * from `lga` where lga_name = '$name'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['lga_id'];
        $Lname = $row['lga_name'];
        $pu_sql = "select * from `polling_unit` where lga_id = $id";;
        $pu_result = mysqli_query($con,$pu_sql);
        while ($puRow = mysqli_fetch_assoc($pu_result)) {
            $unique_id = $puRow['uniqueid'];
            $id = $puRow['polling_unit_id'];
            $name = $puRow['polling_unit_name'];
            // $sql = "select * from `announced_pu_results` where polling_unit_uniqueid = $unique_id";
            // $result = mysqli_query($con,$sql);
            $sql = "select party_abbreviation,SUM(party_score) AS value_sum from `announced_pu_results` where polling_unit_uniqueid = $unique_id GROUP BY party_abbreviation" ;
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $party = $row['party_abbreviation'];
                $score = $row['value_sum'];

                echo "
                <tr>
                <td>$party</td>
                <td>$score</td>
                </tr>
                ";
            } 
        
    }
}
}

// function to list all parties
function party(){
    global $con;
    $sql = "select * from `party`";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['partyname'];
        $id = $row['partyid'];
        echo "
        <option>$name</option>
        ";
    }
}
// select all polling units
function pu(){
    global $con;
    $sql = "select * from `polling_unit`";
    $result = mysqli_query($con,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['uniqueid'];
        $name = $row['polling_unit_name'];
        echo "
            <option value='$id'>$name</option>
        ";
    }
}
// function to insert party result
function result(){
    global $con;
    if (isset($_POST['submit'])) {
        $unit = htmlspecialchars($_POST['unit']);
        $party = htmlspecialchars($_POST['party']);
        $score = htmlspecialchars($_POST['score']);
        $user = htmlspecialchars($_POST['user']);
        $sql = "insert into `announced_pu_results` (polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,date_entered)values('$unit','$party','$score','$user',Now())";
        $result = mysqli_query($con,$sql);
        if ($result) {
            echo "result inserted";
        }
    }
   
}