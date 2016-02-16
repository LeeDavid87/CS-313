function custom_width(id) {
  hide_all();
  uncheck_all();
  var inputCount = document.getElementById("tab-content" + id.id.slice(-1)).getElementsByTagName('input').length;
  inputCount = 100/inputCount;
  var classArray = document.getElementsByClassName("sublabel");
  for(var i = 0; i < classArray.length; i++) { 
    classArray[i].style.width= inputCount + "%";
  }
}

function load_info(name) {
  hide_all();
  document.getElementById(name).style.display = "block";
}
function hide_all() {
  for(var i = 0; i < document.getElementsByClassName("sub-content").length; i++) {
    document.getElementsByClassName("sub-content")[i].style.display = "none";
  }
}
function uncheck_all() {
  var uncheckThem = document.getElementsByClassName("uncheck");
  for(var i = 0; i < uncheckThem.length; i++){
    uncheckThem[i].checked = "false";
  }
}

var W3CDOM = (document.createElement && document.getElementsByTagName);

function initFileUploads() {
	if (!W3CDOM) return;
	var fakeFileUpload = document.createElement('div');
	fakeFileUpload.className = 'fakefile';
	fakeFileUpload.appendChild(document.createElement('input'));
	var image = document.createElement('img');
	image.src='pix/button_select.gif';
	fakeFileUpload.appendChild(image);
	var x = document.getElementsByTagName('input');
	for (var i=0;i<x.length;i++) {
		if (x[i].type != 'file') continue;
		if (x[i].parentNode.className != 'fileinputs') continue;
		x[i].className = 'file hidden';
		var clone = fakeFileUpload.cloneNode(true);
		x[i].parentNode.appendChild(clone);
		x[i].relatedElement = clone.getElementsByTagName('input')[0];
		x[i].onchange = x[i].onmouseout = function () {
			this.relatedElement.value = this.value;
		}
	}
}