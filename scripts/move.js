
var isdrag = false;
var x, y;
var dobj;

function movemouse(e) {
  if (isdrag) {
    dobj.style.left = (tx + e.clientX - x) + "px";
    dobj.style.top  = (ty + e.clientY - y) + "px";
    dobj.style.opacity = 0.8;
    return false;
  }
  else {
    dobj.style.opacity = 1.0;
  }
}

function selectmouse(e) {
  var fobj = e.target;
  var topelement = "INPUT";
  while (fobj.tagName != topelement && fobj.className != "dragme") {
    fobj = fobj.parentNode;
  }

  if (fobj.className=="dragme") {
    isdrag = true;
    dobj = fobj;
    tx = parseInt(dobj.style.left+0);
    ty = parseInt(dobj.style.top+0);
    x = e.clientX;
    y = e.clientY;
    document.addEventListener("mousemove", movemouse, false);
    return false;
  }

}
document.onmousedown=selectmouse;
document.onmouseup=new Function("isdrag=false");
