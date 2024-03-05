<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Quiz</title>
    <link rel="stylesheet" href="lp.css">
</head>
<body>

<?php
// Array of questions and their respective options

$questions = array(
    "What is your age?" => array(
        "Less than 18", "18-22", "22-30", "More than 30"),
    "Are you going school?" => array(
        "Yes", "No"
    ),
    "Which degree you had choosen?" => array(
        "Engineering","Arts","Medical"
    ),
    "What is your employement status?" => array(
        "Full Time Employee" ,"Working","Bussiness" ,"PostGraduate"
    ),
    "What is your anual income?" => array(
        "below 30k" ,"30k-40k","40k-50k","above 50k"
    ),
    "Which country you belongs to?" => array(
        "India","USA","canada","other"
    ),
    "Gender"=>array(
        "Male","Female","Not to say"
    ),
    "English"=>array(
        "Yes","No"
    ),
    "MotherToungue"=>array(
        "Hindhi","Tamil","Telungu","Other"
    )

);
$a=0;$b=0;
$formSubmitted = false;
$flag=false;
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formSubmitted = true;
}
if(!$formSubmitted)
{
echo "<div class='cont'><div class='box'><p>1 What is your age?</p>";
        echo "<form method='post' action=''>";
        foreach ($questions["What is your age?"] as $option) {
            echo "<input type='radio' name='one' value='$option'>$option<br><br>";
            echo "\n";
        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
        $a=1;
}

    $selected_answer="";
if ($_SERVER["REQUEST_METHOD"] == "POST" && $b==0) {
    if(isset($_POST['one']))
    {
    $selected_answer = $_POST["one"];
    $b=1;
    }

    if ($selected_answer == "Less than 18") {
        echo "<div class='cont'><div class='box'><p>2 Are you going school?</p>";
        echo "<form method='post' action=''>";
        foreach ($questions["Are you going school?"] as $option) {
            echo "<input type='radio' name='2nd' value='$option'>$option<br><br>";
            echo "\n";

        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
    } else if($selected_answer=="18-22"){
        echo "<div class='cont'><div class='box'><p>2 Which degree you had choosen?</p>";
        // Display the same question again
        echo "<form method='post' action=''>";
        foreach ($questions["Which degree you had choosen?"] as $option) {
            echo "<input type='radio' name='2nd' value='$option'>$option<br><br>";
            echo "\n";
        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
    }
    else if($selected_answer=="22-30")
    {
        echo "<div class='cont'><div class='box'><p>2 What is your employement status?</p>";
        echo "<form method='POST'>";
        foreach ($questions["What is your employement status?"] as $option) {
            echo "<input type='radio' name='2nd' value='$option'>$option<br><br>";
            echo "\n";
        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
    }
    else if($selected_answer=="More than 30")
    {
        echo "<div class='cont'><div class='box'><p>2 What is your anual income?</p>";
        echo "<form method='POST'>";
        foreach ($questions["What is your anual income?"] as $option) {
            echo "<input type='radio' name='2nd' value='$option'>$option<br><br>";
            echo "\n";

        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
    }
    $b=1;
} 
if(isset($_POST['2nd']))
{

echo "<div class='cont'><div class='box'><p>3 What is your Gender?</p>";
        echo "<form method='post' action=''>";
        foreach ($questions["Gender"] as $option) {
            echo "<input type='radio' name='3rd' value='$option'>$option<br><br>";
            echo "\n";

        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
}

if(isset($_POST['3rd']))
{

echo "<div class='cont'><div class='box'><p>4 Do you Know English?</p>";
        echo "<form method='post' action=''>";
        foreach ($questions["English"] as $option) {
            echo "<input type='radio' name='4th' value='$option'>$option<br><br>";
        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
}

if(isset($_POST['4th']))
{
echo "<div class='cont'><div class='box'><p>5 What is your MotherToungue?</p>";
        echo "<form method='post' action=''>";
        foreach ($questions["MotherToungue"] as $option) {
            echo "<input type='radio' name='5th' value='$option'>$option<br><br>";
        }
        echo "<input type='submit' class='next' value='next'>";
        echo "</form></div></div>";
        $flag=true;
}


?>
</body>
</html>