<!DOCTYPE html>
<html>
    <head>
        <title>Application result</title>
    </head>
    <body>
        <h1>Student Profile Result</h1>
        <?php
            $name = $_POST["name"];
            $email = $_POST["email"];
            $education = $_POST["education"];
            $skills = $_POST["skills"];
            $location = $_POST["location"];
            $major = $_POST["major"];

            echo "<p>Name: ".$name."</p>";
            echo "<p>Email: ".$email."</p>";
            echo "<p>Education Level: ".$education."</p>";
            echo "<p>Skills: ";
            $length = count($skills);
            for ($i=0; $i<$length; $i++) {
                echo $skills[$i]." ";
            }
            echo "</p>";
            echo "<p>Location: ".$location."</p>";
            echo "<p>Major: ";
            $length = count($major);
            for ($i=0; $i<$length; $i++) {
                echo $major[$i]." ";
            }
            echo"</p>";

        ?>
    </body> 
</html>       