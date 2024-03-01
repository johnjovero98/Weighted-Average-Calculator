<?php
// calculate grades here
// intialize variables
$desired_grade = $_POST["desired-grade"];
$weighted_avg = "0";
$precent_need = "0";

$grade_list = array();
$weight_list = array();
$adjusted_grades = array();


// setup array
for ($i = 1; $i <= $asgn_count; $i++) {
    $grade_list[] = (float) $_POST["grade" . $i];
    $weight_list[] = (float) $_POST["weight" . $i] / 100;
}

// adjust grades based on their weights
for ($i = 0; $i < $asgn_count; $i++) {
    $adjusted_grades[] = (float) $grade_list[$i] * (float) $weight_list[$i];
}

function weighed_average($adjusted_grade_array, $weight_array){
    // this function calculates the weighted average
    if (array_sum($weight_array) == 0) {
        throw new Exception("Please generate tables and enter the number of assignments you completed so far.");
    }
    return array_sum($adjusted_grade_array) / array_sum($weight_array);
}

function percent_needed($desired_mrk, $current_weighted_avg, $weight_array){
    // this function calculates the percent needed to achieve a desired final mark
    $remaining_weight = 1 - array_sum($weight_array);
    if ($remaining_weight == 0) {
        $percent_needed = 'error';
        throw new Exception("Desired grade cannot be achieved. Your final grade is " . (string)$current_weighted_avg . "%");
    }
    $percent_needed = ($desired_mrk - ((1 - $remaining_weight)) * $current_weighted_avg) / $remaining_weight;
    return $percent_needed;
}

try {
    $weighted_avg = weighed_average($adjusted_grades, $weight_list);
    $precent_need = percent_needed($desired_grade, $weighted_avg, $weight_list);
} catch (Exception $e) {
    $error = $e->getMessage();
    echo "<p class=\"text-white text-center display-6 my-3\">$error</p>";
}


?>