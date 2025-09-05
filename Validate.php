<?php

function validate_NoMoreThan9CreditHours($avail_Reg_Courses)
{
$currentRegisterdCourses = "";
$currentCreditHours = 0;
foreach ($avail_Reg_Courses as $course) 
{
    $code = $course->getCode();
    $title = $course->getTitle();
    $creditHours = $course->getCreditHours();
    $registered = $course->getRegistered();

   

    if($registered == true) 
    {
    $currentRegisterdCourses = $currentRegisterdCourses . $code . " " . $title . "<br>";
    $currentCreditHours = $currentCreditHours + $creditHours;
    }
  }
  if($currentCreditHours < 9 ) {
    return "";
  }else if ($currentCreditHours >= 9 ) {
    return "<br>You cannot register for more than 9 credit hours per term ";
}
  
}
function validate_NotPreviouslyRegistered($avail_Reg_Courses, $selectCourseElementName)
{
 

 $currentRegisterdCourses = "";
$currentCreditHours = 0;
foreach ($avail_Reg_Courses as $course) 
{
    $code = $course->getCode();
    $title = $course->getTitle();
    $creditHours = $course->getCreditHours();
    $registered = $course->getRegistered();

   

    if($registered == true) 
    {
    $currentRegisterdCourses = $currentRegisterdCourses . $code . " " . $title . "<br>";
    $currentCreditHours = $currentCreditHours + $creditHours;
    }
  } 
  
  if (str_contains($currentRegisterdCourses, $selectCourseElementName)) {
    return "<br> You have already registered for " .$selectCourseElementName;
  } else { return "";
    }
  }





?>