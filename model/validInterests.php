<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

require "validation.php";

$errors = array();

//valide interests
$validIndoors = true;
$validOutdoors = true;

$indoorOptions = array("tv","movies","cooking","bgames","puzzles","reading","cards","vgames");
$outdoorOptions = array("hiking","biking","swimming","collecting","walking","climbing");

foreach ($outdoorInterests as $interest)
{
    if (!in_Array($outdoorOptions, $interest))
    {
        $errors['outdoor'] = "invalid outdoor value!";
    }
}

foreach ($indoorInterests as $interest)
{
    if (!in_Array($indoorOptions, $interest))
    {
        $error['indoor'] = "invalid indoor value!";
    }
}
$success = (sizeof($errors) == 0);
