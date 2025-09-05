
<h1> JavaScript and PHP Validations </h1> 
<br> Objective: Modify a Database-driven Web Application that Registers Students for Courses to Add both JavaScript and PHP Validations.

<br>
<br>
<h2>Javascript Validation </h2>
<ul>
  <li>For the javascript validation file  under the validate_NoMoreThan9CreditHours() method  called for text content of the element ID “CurrentCreditHoursElementID” and tested if it was grader than or less than 9 and displayed the required message if the number was already grader than 9 or equal to 9 and an empty string if it did not reach 9 yet. </li>
  <li>For the validate_NotPreviouslyRegistered() function I called for the text content of the currentCoursesElementID and the value of the selectCourseElementID . If the current registered courses were included in the selected course it would out put the necessary message that it was already registered for else returning a empty  string and continuing the registration process</li>
</ul>
<br>
<img width="688" height="305" alt="Screenshot 2025-09-05 at 3 25 57 PM" src="https://github.com/user-attachments/assets/883ec766-c346-4033-b96c-2b0966a51a01" />
  
<br>
<br> 
<h3>Javascript Validation Check</h3>
<img width="1439" height="987" alt="image" src="https://github.com/user-attachments/assets/4ee22392-3df9-4b1b-bdd6-880c54775ccc" />
<img width="1439" height="987" alt="image" src="https://github.com/user-attachments/assets/858ff41b-e89e-47f7-82c0-f952fb0248cc" />

<br>
<h2>PHP  script server-side validation</h2>
<ul>
  <li><p>Inside the function validate_NoMoreThan9CreditHours($avail_Reg_Courses)
I restated the code that was inside our Register-for-Courses.php that allowed us to take the array and split it into the separate identifiers then pull what was needed inorder to identify if the current credit were less than or greater than 9. </p></li>
  <li>For the function validate_NotPreviouslyRegistered($avail_Reg_Courses, $selectCourseElementName)
I input the same function that was needed to pull and separate the array and if the selected element was found in the current registered courses it would return the message that the course was already registered for else it would return empty string.</li>
</ul>
<br>
<img width="758" height="477" alt="Screenshot 2025-09-05 at 3 40 04 PM" src="https://github.com/user-attachments/assets/64496235-868e-467c-8a06-e0017288aa47" />
<img width="758" height="511" alt="Screenshot 2025-09-05 at 3 40 29 PM" src="https://github.com/user-attachments/assets/cd2f798e-9599-4f2f-ac85-a75e4498652b" />

<br>
<br>
<h3>PHP validation check</h3>
<img width="1439" height="987" alt="image" src="https://github.com/user-attachments/assets/f3607bd8-a9bc-4a72-90b7-4a23289d79e8" />
<img width="1439" height="987" alt="image" src="https://github.com/user-attachments/assets/8f31221a-af05-4f2c-87a4-38ceba06dac2" />





