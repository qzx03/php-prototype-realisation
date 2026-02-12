<?php

function calculateEachAverage($grades){
$FE = ($grades["FrondEnd"][0] + $grades["FrondEnd"][1]) / 2;
$BE = ($grades["BackEnd"][0] + $grades["BackEnd"][1]) / 2;
$ES = ($grades["Entrepreneurship"][0] + $grades["Entrepreneurship"][1]) / 2;
$EN = ($grades["English"][0] + $grades["English"][1]) / 2;
$Ss = ($grades["SoftSkills"][0] + $grades["SoftSkills"][1]) / 2;


return [
    "FrontEnd" => $FE,
    "BackEnd" => $BE,
    "Entrepreneurship" => $ES,
    "English" => $EN,
    "SoftSkills" => $Ss
    ];
}
function calculateaverage($grades) {
    return number_format((($grades["FrontEnd"] + $grades["BackEnd"] + $grades["Entrepreneurship"] + $grades["English"] + $grades["SoftSkills"]) / 5), 2);


}
function finalGrade($average) {
    if ($average === 16) return "A+";
    if ($average >= 16) return "A";
    if ($average >= 14) return "B";
    if ($average >= 12) return "C";
    if ($average >= 10) return "D";
    return "F"; 


}
function finaldecision($Fgrade) {
    if ($Fgrade === "F") {return "Failed";}
    else{return "Passed";};


}

function displaymajor($major_u){
    if($major_u === "web_dev"){return "Web Developement";}
    elseif($major_u === "mob_dev") {return "Mobile Developement";}
    else{return "Software Engineering";}


}
?>