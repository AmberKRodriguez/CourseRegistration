
function validate(form)
{
  fail  = "";
  fail  = validate_NoMoreThan9CreditHours();
  fail += validate_NotPreviouslyRegistered();
  if (fail == "")
    return true;
  else 
  { 
    alert("Client side validateion error = " + fail); 
    return false;
  }
}

function validate_NoMoreThan9CreditHours()
{
  
creditHours = parseInt(document.getElementById("currentCreditHoursElementID").textContent)
 
  
  if(creditHours < 9 ) return ""
  else if (creditHours >= 9 ) 
    return "You cannot register for more than 9 credit hours per term"
}
  
function validate_NotPreviouslyRegistered()
{
  currentRegistered = document.getElementById("currentCoursesElementID").textContent
  selectedCourseV = document.getElementById("selectCourseElementID").value
  
  if (currentRegistered.includes(selectedCourseV))
    return "You have already registered for " +selectedCourseV
  else return "" 

}