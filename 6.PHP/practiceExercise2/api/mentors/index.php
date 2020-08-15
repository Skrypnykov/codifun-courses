<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array mentors</title>
    <style>
        table { 
            border: 3px double black;
            border-collapse: collapse;
        }
        td {
            width: 150px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $mentors=array(
        array('mentor_name'=>'Jhon','phone'=>'088997755'),
        array('mentor_name'=>'Hanna','phone'=>'044559955')
    );
    //get mentors list
    function get_mentors($arr_name){
        echo "<table border='1' cellpadding='5'><tr><th>Mentor name</th><th>Mentor phone</th></tr>";
        foreach($arr_name as $mentor){
            echo "<tr><td>$mentor[mentor_name]</td><td>$mentor[phone]</td></tr>";
        }
        echo "</table>";
    }
    if($_GET['data']=='mentors')get_mentors($mentors);
?>
</body>
</html>