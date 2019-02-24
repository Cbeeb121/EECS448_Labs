function validate()
{
  let first_pass = document.getElementById('fpass').value;
  let second_pass = document.getElementById('spass').value;
  if (first_pass.length < 8 || second_pass.length < 8)
  {
    alert ("Password is not long enough");
  }
  if(first_pass != second_pass)
  {
    alert ("Passwords are not equivalent");
  }
}


firstImage = "power1.jpg"
secondImage = "power2.jpg"
thirdImage = "power3.jpg"
fourthImage = "power4.jpg"
fifthImage = "power5.jpg"


let x = 0;
function previous()
{
  x--;
  if(Math.abs(x) % 5 == 0)
  {
    document.getElementById("slideshow").src = firstImage;
  }
  else if(Math.abs(x) % 5 == 1)
  {
    document.getElementById("slideshow").src = secondImage;
  }
  else if(Math.abs(x) % 5 == 2)
  {
    document.getElementById("slideshow").src = thirdImage;
  }
  else if( Math.abs(x) % 5 == 3)
  {
    document.getElementById("slideshow").src = fourthImage;
  }
  else if(Math.abs(x) % 5 == 4)
  {
    document.getElementById("slideshow").src = fifthImage;
  }
}

function next()
{
  x++;
  if(Math.abs(x) % 5 == 0)
  {
    document.getElementById("slideshow").src = firstImage;
  }
  else if(Math.abs(x) % 5 == 1)
  {
    document.getElementById("slideshow").src = secondImage;
    }
  else if(Math.abs(x) % 5 == 2)
  {
    document.getElementById("slideshow").src = thirdImage;
  }
  else if( Math.abs(x) % 5 == 3)
  {
    document.getElementById("slideshow").src = fourthImage;
  }
  else if(Math.abs(x) % 5 == 4)
  {
    document.getElementById("slideshow").src = fifthImage;
  }
}
