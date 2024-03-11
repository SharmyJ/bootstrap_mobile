<?php

// Student information
$studentName = "Jade Anderson";
$english = 90;
$math = 85;
$science = 95;
$mapeh = 90;
$history = 91;

// Calculate average
$totalSubjects = 5; // Assuming 5 subjects
$totalGrade = $english + $math + $science + $mapeh + $history;
$average = $totalGrade / $totalSubjects;

// Determine remarks
if ($average >= 90 && $average <= 100) {
    $remarks = "Excellent";
    $image = "pic/excellent.png"; // Image file for Excellent
    $imageWidth = 150; // Width for Excellent image
    $imageHeight = 150; // Height for Excellent image
} elseif ($average >= 85 && $average <= 89) {
    $remarks = "Very Good";
    $image = "pic/very_good.png"; // Image file for Very Good
    $imageWidth = 120; // Width for Very Good image
    $imageHeight = 120; // Height for Very Good image
} elseif ($average >= 80 && $average <= 84) {
    $remarks = "Good";
    $image = "pic/good.png"; // Image file for Good
    $imageWidth = 100; // Width for Good image
    $imageHeight = 100; // Height for Good image
} elseif ($average >= 75 && $average <= 79) {
    $remarks = "Passed";
    $image = "pic/passed.png"; // Image file for Passed
    $imageWidth = 80; // Width for Passed image
    $imageHeight = 80; // Height for Passed image
} else {
    $remarks = "Failed";
    $image = "pic/failed.png"; // Image file for Failed
    $imageWidth = 60; // Width for Failed image
    $imageHeight = 60; // Height for Failed image
}

// Output with HTML and image
echo "<h2>Student Name: " . $studentName . "</h2>";
echo "<h3>Average: " . number_format($average, 1) . "</h3>";
echo "<h3>Remarks: " . $remarks . "</h3>";
echo "<img src='" . $image . "' alt='" . $remarks . "' width='" . $imageWidth . "' height='" . $imageHeight . "'>";

?>
