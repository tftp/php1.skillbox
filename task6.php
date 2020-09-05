<?php

$studentsCount = rand(0, 1000000);

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
