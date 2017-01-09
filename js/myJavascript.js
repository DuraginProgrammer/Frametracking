
// Home sign in validation
function validateBusiness() {
  var business = document.getElementById("inputBusiness").value;

  if (business.length == 0) {
    producePrompt("Required", "inputBusinessPrompt", "green");
    return false;
  }

  if (!business.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
    producePrompt("First and last name please", "inputBusinessPrompt", "red");
    return false;
  }

  producePrompt("Ok", "inputBusinessPrompt", "green");
  return true;
}

function producePrompt(message, promptLocation, color) {
  document.getElementById(promptLocation).style.color = color;
  document.getElementById(promptLocation).innerHTML = message;
}
