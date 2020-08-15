<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice Exercise 2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Access to our data</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <label>Select what data you want to see
                <select name="data">
                    <option value="books">List of books</option>
                    <option value="mentors">List of mentors</option>
                </select>
            </label><br/>
            <input type="submit" value="View"/>
        </form>
        <?php
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            if ($data=="books"){
                echo '<h3>Books list</h3>';
                echo file_get_contents('http://localhost/codiFunExample/practiceExercise2/api/books/index.php?data=books');
            }
            if ($data=="mentors"){
                echo '<h3>Mentors list</h3>';
                echo file_get_contents('http://localhost/codiFunExample/practiceExercise2/api/mentors/index.php?data=mentors');
            }
        }else{
            echo "Select an option!";
        }
        ?>
    </div>
</body>
</html>