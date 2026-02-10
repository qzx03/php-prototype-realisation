<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <form action="handler.php" method="POST">
    <fieldset>
    <fieldset><legend>Student Information</legend>
    <label for="SLname">Last name</label><br>
     <input type="text" name="SLname" placeholder="smith" required><br>
    <label for="SFname">First name</label><br>
     <input type="text" name="SFname" placeholder="adam" required><br>
    <label for="Bdate">Date of birth</label><br>
     <input type="date" name="Bdate" required><br>
    <label for="major">Major:</label><br>
      <select name="major" id="major">
        <option value="web_dev">Web Developement</option>
        <option value="mob_dev">Mobile Developement</option>
        <option value="sof_eng">Software Engineering</option>
    </select><br>
    </fieldset>


    <fieldset><legend>Student Grades</legend>
    <h4>Frontend</h4><br>
    <label for="FrG1">Grade 1</label>
    <input type="number" name="FrG1" min="0" max="20" step="0.25" required>
    <label for="FrG2">Grade 2</label>
    <input type="number" name="FrG2" min="0" max="20" step="0.25" required><br>
    <h4>Backend</h4><br>
    <label for="BeG1">Grade 1</label>
    <input type="number" name="BeG1" min="0" max="20" step="0.25" required>
    <label for="BeG2">Grade 2</label>
    <input type="number" name="BeG2" min="0" max="20" step="0.25" required><br>
    <h4>Entrepreneurship</h4><br>
    <label for="EsG1">Grade 1</label>
    <input type="number" name="EsG1" min="0" max="20" step="0.25" required> 
    <label for="EsG2">Grade 2</label>
    <input type="number" name="EsG2" min="0" max="20" step="0.25" required><br>
    <h4>English</h4><br>
    <label for="EnG1">Grade 1</label>
    <input type="number" name="EnG1" min="0" max="20" step="0.25" required> 
    <label for="EnG2">Grade 2</label>
    <input type="number" name="EnG2" min="0" max="20" step="0.25" required><br>
    <h4>Soft Skills</h4><br>
    <label for="SsG1">Grade 1</label>
    <input type="number" name="SsG1" min="0" max="20" step="0.25" required> 
    <label for="SsG2">Grade 2</label>
    <input type="number" name="SsG2" min="0" max="20" step="0.25" required><br>



    </fieldset>
    <input type="submit" name="submit" value="Submit">
    <input type="button" value="Reset" onclick="window.location.reload()">
    </fieldset>
    </form>



</body>
</html>