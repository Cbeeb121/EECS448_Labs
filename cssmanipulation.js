function rgbChange()
{
  let rval_border = document.getElementById("rval_border").value;
  let gval_border = document.getElementById("gval_border").value;
  let bval_border = document.getElementById("bval_border").value;
  let borderWidth = document.getElementById("width").value;
  let rval_back = document.getElementById("rval_back").value;
  let gval_back = document.getElementById("gval_back").value;
  let bval_back = document.getElementById("bval_back").value;
  let page = document.getElementById("alteredtext");

  page.style.borderColor = 'rgb(' + rval_border + ',' + gval_border + ',' + bval_border + ')';
  page.style.borderWidth = borderWidth;
  page.style.backgroundColor = 'rgb(' + rval_back + ',' + gval_back + ',' + bval_back + ')';
}
