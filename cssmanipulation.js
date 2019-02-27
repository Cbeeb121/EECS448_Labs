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



























    // borderRedBox = document.getElementById("rval_border");
    // borderGreenBox = document.getElementById("gval_border");
    // borderBlueBox = document.getElementById("bval_border");
    // borderWidth = document.getElementById("width");
    // backRedBox = document.getElementById("rval_back");
    // backGreenBox = document.getElementById("gval_back");
    // backBlueBox = document.getElementById("bval_back");
    // borderRedBox.value = "0";
    // borderGreenBox.value = "0";
    // borderBlueBox.value = "0";
    // borderWidth.value = "1";
    // backRedBox.value = "255";
    // backGreenBox.value = "255";
    // backBlueBox.value = "255";
    // let bR = 0;
    // let bG = 0;
    // let bB = 0;
    // let bW = 0;
    // let bgR = 0;
    // let bgG = 0;
    // let bgB = 0;
    //
    // Update = function(){
    //   let dummytext = document.getElementById("dummyText");
    //   if(borderRedBox.value == "" ||
    //      borderGreenBox.value == "" ||
    //      borderBlueBox.value == "" ||
    //      borderWidth.value == "" ||
    //      backRedBox.value == "" ||
    //      backGreenBox.value == "" ||
    //      backBlueBox.value == "")
    //   {
    //     //set everything to default, alert user.
    //     bR=0;
    //     bG=0;
    //     bB=0;
    //     bW=1;
    //     bgR=255;
    //     bgG=255;
    //     bgB=255;
    //     borderRedBox.value = "0";
    //     borderGreenBox.value = "0";
    //     borderBlueBox.value = "0";
    //     borderWidth.value = "1";
    //     backRedBox.value = "255";
    //     backGreenBox.value = "255";
    //     backBlueBox.value = "255";
    //   }
    //   else
    //   {
    //     //now, we remove all whitespace from userInput.
    //     //globally replace all whitespace with ''.
    //     //box1
    //     temp = borderRedBox.value;
    //     borderRedBox.value = temp.replace(/\s/g,'');
    //     //box2
    //     temp = borderGreenBox.value;
    //     borderGreenBox.value = temp.replace(/\s/g,'');
    //     //box3
    //     temp = borderBlueBox.value
    //     borderBlueBox.value = temp.replace(/\s/g,'');
    //     //box4
    //     temp = borderWidth.value;
    //     borderWidth.value = temp.replace(/\s/g,'');
    //     //box5
    //     temp = backRedBox.value;
    //     backRedBox.value = temp.replace(/\s/g,'');
    //     //box6
    //     temp = backGreenBox.value;
    //     backGreenBox.value = temp.replace(/\s/g,'');
    //     //box7
    //     temp = backBlueBox.value;
    //     backBlueBox.value = temp.replace(/\s/g,'');
    //     bR=borderRedBox.value;
    //     bG=borderGreenBox.value;
    //     bB=borderBlueBox.value;
    //     bW=borderWidth.value;
    //     bgR=backRedBox.value;
    //     bgG=backGreenBox.value;
    //     bgB=backBlueBox.value;
    //     colorStringBack = "rgb("+bgR+","+bgG+","+bgB+")";
    //     colorStringBorder = "rgb("+bR+","+bG+","+bB+")";
    //     TEMPwidthStringBorder = bW+"px";
    //     widthStringBorder = TEMPwidthStringBorder+" "+TEMPwidthStringBorder+" "+TEMPwidthStringBorder+" "+TEMPwidthStringBorder;
    //     //console.log(colorString);
    //     document.getElementById("dummyText").style.borderColor = colorStringBorder;
    //     document.getElementById("dummyText").style.borderWidth = widthStringBorder;
    //     document.getElementById("dummyText").style.backgroundColor = colorStringBack;
    //   }
    // }
//Change the style attribute
// someTag.style.backgroundColor = "red";
