<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 10/7</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,
        td{
            border: 2px dashed black;
            padding: 5px 20px;
        }
        td:last-child{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $dateusers=array(
            array("Петрова","Инна",22),
            array("Сидоров","Илья",25),
            array("Иванова","Анна",27)
        );
        echo "<table><tr><th>Фамилия</th><th>Имя</th><th>Возраст</th></tr>";
        for($row=0;$row<count($dateusers);$row++){
            echo "<tr>";
            for($column=0;$column<3;$column++){
                echo "<td>".$dateusers[$row][$column]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>  
</body>
</html>