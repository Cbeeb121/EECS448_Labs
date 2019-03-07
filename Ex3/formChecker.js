function restart()
{
  document.getElementById('form').reset();
}

function validateForm()
{
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value.replace(/\s/g, '');
  let razr = document.getElementById("razr").value;
  let berry = document.getElementById("berry").value;
  let intensity = document.getElementById("intensity").value;
  let shippingChoice = document.getElementsByName("shipping");

  let isFormValid = true;
  let message = "Input errors have occured:\n\n";

  if (!validateEmail(email))
  {
    isFormValid = false;
    message = message + "Email field is not of valid format.\n";
  }

  if(!password)
  {
    isFormValid = false;
    message = message + "Password field cannot not be empty.";
  }

  if (razr < 0 || berry < 0 || intensity < 0 ||
      razr % 1 != 0 || berry % 1 != 0 || intensity % 1 != 0)
  {
    isFormValid = false;
    message = message + "Product fields must be non-negative integers.";
  }

  let shippingTrue = false;
  for (let i = 0; i < shippingChoice.length; i++)
  {
    if (shippingChoice[i].checked) shippingTrue = true;
  }
  if (!shippingTrue)
  {
    isFormValid = false;
    message = message + "A shipping option must be selected."
  }

  if (!isFormValid) alert(message);
  return isFormValid;
}

//Citation: https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
function validateEmail(email)
{
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
