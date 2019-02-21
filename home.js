function validate()
{
  let first_pass = document.getElementsByName('fpass')
  let second_pass = document.getElementById('spass');
  if (first_pass.length < 8 || second_pass.length < 8)
  {
    alert ("Password is not long enough"):
  }
  if(first_pass != second_pass)
  {
    alert ("Passwords are not equivalent");
  }
  else {
    alert ("Function called!");
  }
}
