<?php header("Content-type: application/javascript"); ?>
function custom_width(id) {

  var inputCount = document.getElementById("tab-content" + id.id.slice(-1)).getElementsByTagName('input').length;
  inputCount = 100/inputCount;
  var classArray = document.getElementsByClassName("sublabel");
  for(var i = 0; i < classArray.length; i++) { 
  classArray[i].style.width= inputCount + "%";
  }
}
function load_info(name) {
  
}