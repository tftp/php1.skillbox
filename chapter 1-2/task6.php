<?php

$studentsCount = rand(0, 1000000);

if (in_array($studentsCount % 100, [11, 12, 13, 14])) {
    echo "На учёбе $studentsCount студентов";
} else {
    switch ($studentsCount % 10) {
        case 1:
            echo "На учёбе $studentsCount студент";
            break;
        case 2:
        case 3:
        case 4:
            echo "На учёбе $studentsCount студента";
            break;
        default:
            echo "На учёбе $studentsCount студентов";
            break;
    }
}
