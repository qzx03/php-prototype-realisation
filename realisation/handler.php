<?php 
require "functions.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
    $info = [
    "Lname" => $_POST['SLname'],
    "Fname" => $_POST['SFname'],
    "Bdate" => $_POST['Bdate'],
    "major" => $_POST['major'],
    ];
    $grades = [
    "FrondEnd" => [$_POST['FrG1'], $_POST['FrG2']],
    "BackEnd" => [$_POST['BeG1'], $_POST['BeG2']],
    "Entrepreneurship" => [$_POST['EsG1'], $_POST['EsG2']],
    "English" => [$_POST['EnG1'], $_POST['EnG2']],
    "SoftSkills" => [$_POST['SsG1'], $_POST['SsG2']],
    ];
    $EachAv = calculateEachAverage($grades);
    $average = calculateaverage($EachAv);
    $finalGrade = finalGrade($average);
    $finaldecision = finaldecision($finalGrade);
    $major = displaymajor($info["major"]);


    echo '
<div class="reportCard" style="border:2px solid #333; padding:20px; width:400px; font-family:sans-serif;">
    <h2>Report Card</h2>
    <p><strong>Student:</strong> '.$info["Fname"].' '.$info["Lname"].'</p>
    <p><strong>Date of Birth:</strong> '.$info["Bdate"].'</p>
    <p><strong>Major:</strong> '.$major.'</p>

    <h3>Grades per Subject</h3>
    <ul>
        <li>FrontEnd: '.$EachAv["FrontEnd"].'</li>
        <li>BackEnd: '.$EachAv["BackEnd"].'</li>
        <li>Entrepreneurship: '.$EachAv["Entrepreneurship"].'</li>
        <li>English: '.$EachAv["English"].'</li>
        <li>Soft Skills: '.$EachAv["SoftSkills"].'</li>
    </ul>

    <p><strong>GPA:</strong> '.$average.'</p>
    <p><strong>Final Grade:</strong> '.$finalGrade.'</p>
    <p><strong>Decision:</strong> '.$finaldecision.'</p>
</div>
';
}
}
?>