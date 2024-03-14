<!DOCTYPE html>
<html>
    <head>
        <title>HTML form</title>
    </head>
    
    <body>
        
        <?php
            include("menu.html");
        ?>

        <h1>Student Profile</h1>
        <form name="profile" method="post" action="Application.php">
            
            Name: <input type="text" id="name" name="name" value=""><br><br>
            Email: <input type="text" id="email" name="email" value=""><br><br>
            Education Level:<br>
            <input type="radio" name="education" value="undergraduate">Undergraduate<br>
            <input type="radio" name="education" value="graduate">Graduate<br><br>

            Skills:<br>
            <input type="checkbox" name="skills[]" value="html">HTML<br>
            <input type="checkbox" name="skills[]" value="css">CSS<br>
            <input type="checkbox" name="skills[]" value="javascript">JavaScript<br>
            <input type="checkbox" name="skills[]" value="php">PHP<br>
            <input type="checkbox" name="skills[]" value="python">Python<br><br>

            Home Loation:<br>
            <select name="location">
                <option value="ATL">Atlanta</option>
                <option value="CM">Cumming</option>
                <option value="MR" selected>Marietta</option>
                <option value="KS">Kennesaw</option>
                <option value="AR">Alpharetta</option>

            </select><br><br>
            Major:<br>
            <select name="major[]" size="3">
                <option value="cs">Computer Science</option>
                <option value="it" selected>Information Technology</option>
                <option value="SWE">Software Engineer</option>
                <option value="IS">Information System</option>
            </select><br>
            <button type="submit">Submit</button>
            

        </form>
    </body>
</html>