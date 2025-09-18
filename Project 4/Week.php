<?php
require_once 'login4.php';


 try
   {
     $pdo = new PDO($attr, $user, $pass, $opts);
   }
   catch (PDOException $e)
   {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
   }
 if (isset($_POST['code'])   &&
     isset($_POST['title'])    &&
     isset($_POST['creditHours']))
   
 {
   $code   = get_post($pdo, 'code');
   $title     = get_post($pdo, 'title');
   $creditHours = get_post($pdo, 'creditHours');
  
  
   $query = "INSERT INTO mycourses VALUES" .
     "($code, $title, $creditHours)";
   $result = $pdo->query($query);




 }


 echo "Enter information about UMGC course you took over the last (3) terms<br>" ;


 echo <<< _END
 <form action="AssignmentSolution-W4-A1-AmberRodriguez-PDO-myCoursesTable.php" method="post"><pre>
         Code <input type="text" name="code">
        Title <input type="text" name="title">
 Credit Hours <input type="text" name="creditHours"><br>
              <input type="submit" value="ADD this Course Record">
 </pre></form>
 _END;


 $query = "SELECT * FROM mycourses";
 $result = $pdo ->query($query);


 while ($row = $result->fetch())
 {
   $r0 = htmlspecialchars($row['code']);
   $r1 = htmlspecialchars($row['title']);
   $r2 = htmlspecialchars($row['creditHours']);
  
    
echo <<<_END
<pre>
Code: $r0
Title: $r1
Credit Hours: $r2
</pre>
_END;
 }
  
 $query = "SELECT SUM(creditHours) AS total FROM mycourses";
 $result = $pdo ->query($query);
 $row = $result->fetch();
 $total = $row['total'];


 echo "Total credit hours of my UMGC courses over the last (3) terms = $total";


  function get_post($pdo, $var)
 {
   return $pdo->quote($_POST[$var]);
 }


 ?>
