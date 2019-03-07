function restart()
{
  document.getElementById('form').reset();
  document.setElementById('')
}


function validateEmail(email)
{
    let s = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return s.test(String(email).toLowerCase());
}


function formSubmission()
{
  let validatedForm = true;
  let message = "Errors:\n";

  let email = document.getElementById("email").value;
  if (!validateEmail(email))
  {
    validatedForm = false;
    message = message + "Must give valid email.\n";
  }
  let password = document.getElementById("password").value.replace(/\s/g, '');
  if(!password)
  {
    validatedForm = false;
    message = message + "Must not pass empty password.";
  }

  let razr = document.getElementById("razr").value;
  let berry = document.getElementById("berry").value;
  let intensity = document.getElementById("intensity").value;
  if (razr < 0 || berry < 0 || intensity < 0)
  {
    message = message + "Must give valid integers.";
    validatedForm = false;
  }
  let shippingTrue = false;
  let shippingChoice = document.getElementsByName("shipping");
  for (let i = 0; i < shippingChoice.length; i++)
  {
    if (shippingChoice[i].checked) shippingTrue = true;
  }
  if (!shippingTrue)
  {
    validatedForm = false;
    message = message + "A shipping option must be selected."
  }

  if (!validatedForm)
  {
    alert(message);
  }
  return validatedForm;
}
