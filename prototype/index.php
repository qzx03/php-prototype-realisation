<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade calculator</title>
    <style>
        * {
  box-sizing: border-box;
  font-family: system-ui, sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0f1220;
  color: #eaeaf0;
  flex-direction: column;
  gap: 1rem;
}

form {
  width: 320px;
}

fieldset {
  border: 2px solid #3f46ff;
  border-radius: 12px;
  padding: 1.5rem;
  background: #161a35;
}

legend {
  padding: 0 12px;
  font-size: 1.1rem;
  font-weight: 600;
  color: #8b90ff;
}

label {
  display: block;
  margin-top: 1rem;
  font-size: 0.9rem;
}

input[type="text"] {
  width: 100%;
  padding: 0.5rem 0.6rem;
  margin-top: 0.4rem;
  border-radius: 6px;
  border: 1px solid #2e356a;
  background: #0f1220;
  color: #fff;
}

input[type="text"]:focus {
  outline: none;
  border-color: #3f46ff;
  box-shadow: 0 0 0 2px rgba(63, 70, 255, 0.3);
}

input[type="submit"] {
  margin-top: 1.5rem;
  width: 100%;
  padding: 0.6rem;
  border: none;
  border-radius: 8px;
  background: #3f46ff;
  color: white;
  font-weight: 600;
  cursor: pointer;
}

input[type="submit"]:hover {
  background: #5a60ff;
}
.result {
  margin-top: 1.5rem;
  padding: 1rem 1.2rem;
  border-radius: 10px;
  background: #1f2345;
  border: 2px solid #3f46ff;
  text-align: center;
  font-weight: 600;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  font-size: 1rem;
  transition: all 0.3s ease;
}

.result:hover {
  background: #2a2f5a;
  transform: translateY(-2px);
}


    </style>
</head>
<body>
    

    <form action="index.php" method="POST">
        <fieldset><legend>grade calculator</legend>
    <label for="SName">Student Name:</label>
    <input type="text" name="SName">
    <label for="G1">Grade 1:</label>
    <input type="text" name="G1">
    <label for="G2">Grade 2:</label>
    <input type="text" name="G2">
    <label for="G3">Grade 3:</label>
    <input type="text" name="G3">
    <input type="submit">
    </fieldset>
    </form>


</body>
</html>

<?php


if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $SName = $_POST['SName'];
    $G1 = trim($_POST['G1']);
    $G2 = trim($_POST['G2']);
    $G3 = trim($_POST['G3']);
    $AllG = [$G1, $G2, $G3];
    $av = NULL;


    if($SName === "" || $G1 === "" || $G2 === "" || $G3 === ""){
        echo"All fields must be filled";
}elseif($G1 >= 0 && $G1 <= 20 && $G2 >= 0 && $G2 <= 20 && $G3 >= 0 && $G3 <= 20){
        $av = calculateAverage($AllG);
        getGrade($av, $SName);
    }

}

function calculateAverage($grades) {

    return array_sum($grades) / count($grades);

}

function getGrade($average, $StudentName) {

    $letter = NULL;

    switch (true) {
    case ($average === 20):
        $letter = "A+"; 
        break;
    case ($average >= 16):
        $letter = "A";
        break;
    case ($average >= 13):
        $letter = "B";
        break;
    case ($average >= 10):
        $letter = "C";
        break;
    case ($average >= 7):
        $letter = "D";
        break;
    default:
        $letter = "F";
}
$Faverage = number_format($average, 2);


echo "<div class='result'>
        GPA: {$Faverage}<br>
        Grade: {$letter}
      </div>";

}


?>