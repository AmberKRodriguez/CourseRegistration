<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>AssignmentW3</title>
  
  
</head>
<body>
<?php
/*Amber Rodriguez
CMSC 320 Webprogramming 
Assignement 3 : Arrays of Courses Objects
6.2.2025
*/

class Course{

    private $course_code;
    private $course_title;
    private $course_credithours;

    function __construct($course_code,$course_title, $course_credithours,){       
        $this->course_code = $course_code;
        $this->course_title = $course_title;
        $this->course_credithours = $course_credithours;
    }

    function get_coursecode(){
        return $this->course_code;
        
    }
    function get_coursetitle(){
         return $this->course_title;
    }
    function get_credithours(){
        return $this->course_credithours; 
    }
    
    function printCourse(){            
            echo "Code = " . $this->course_code . " <br>";
            echo "Title = " . $this->course_title . "<br>";
            echo "Credit Hours = " . $this->course_credithours . " <br>";
    }
}
 
    $arrayOfClassObjects = array(
    new Course('MATH 140','Calculus 1', 4), 
    new Course('DATA 230','Math for Data Science', 3),
    new Course('CMSC 315','Intermediate Programing', 3),
    new Course('CMIT 202','Fund of Cmptr Troubleshooting', 3),
    new Course('ACCT 220','Principles of Accounting', 3),
    new Course('BIOL 103','Intro to Biology', 4));     
   
    echo "Fall 2024 - Spring 2025<br>";
    echo "The number of UMGC courses I took over the last 3 terms = " .count($arrayOfClassObjects). "<br>";
    
    $count = 1;
    while ($count<= 6){
        foreach($arrayOfClassObjects as $course){
            if ($course -> get_coursecode() === 'CMSC 115'){
                $cmsc_115 = true;
            }
        echo"<br>Course " .$count. " information: <br>";
        ++$count;
        $course->printCourse();
        }
    }
    
    if ($cmsc_115){
        echo "<br>Yes, I have taken the CMSC 115 course in the last 3 terms.";
        }
        else{ 
        echo "<br>No, I have not taken the CMSC 115 course in the last 3 terms.";
        }  
?>
</body>
</html>