<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}


$studentGrades = array(
    'Student_1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student_2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student_3' => array('Math' => 75, 'English' => 80, 'Science' => 82)
);

calculateAverageGrades($studentGrades);
?>
