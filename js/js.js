function gameLoop () {
    monsterAnimate();
    var hits = $("#char").collision(".monster");
    hits.remove();
}

function ini() {
    var utils = {}
    utils.timer = setInterval(gameLoop,30);
    spawnPlayer();
    spawnMonsters("poring");
    setSprite_s(1);
}

function getMouse(event){

	var x_char = parseFloat(document.getElementById("char").style.left);
    var y_char = parseFloat(document.getElementById("char").style.top);

    var x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("map").offsetLeft;
    var y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("map").offsetTop;

    x = x - 26;
    y = y - 80;

    $('#char').animate().stop();

    var module    = Math.sqrt((x-x_char)*(x-x_char) + (y-y_char)*(y-y_char));
    var speed     = 150;
    var duration  = calcDuration(x,y,x_char,y_char,speed,module);
    var direction = getDirection(x,y,x_char,y_char);
    //alert(direction);
    setSprite(direction);

    $('#char').animate({
		left: x,
		top: y}, duration, 'linear', function(){
            setSprite_s(direction);
        });
}

function monsterAtack(monstro) {
    var x_char = parseFloat(document.getElementById("char").style.left);
    var y_char = parseFloat(document.getElementById("char").style.top);

    //var x = parseFloat(monstro.style.left);
    //var y = parseFloat(monstro.style.top);

    var x = event.offsetX?(event.offsetX):event.pageX-monstro.offsetLeft;
    var y = event.offsetY?(event.offsetY):event.pageY-monstro.offsetTop;

    $('#char').animate().stop();

    var module    = Math.sqrt((x-x_char)*(x-x_char) + (y-y_char)*(y-y_char));
    var speed     = 150;
    var duration  = calcDuration(x,y,x_char,y_char,speed,module);
    var direction = getDirection(x,y,x_char,y_char);
    //alert(direction);
    setSprite(direction);

    $('#char').animate({
        left: x,
        top: y}, duration, 'linear', function(){
            setSprite_s(direction);
        });
    //alert("ATACANDO! - Monster:" + x + ":" + y);
}

function calcDuration (x,y,x_char,y_char,speed,module) {
	return ((module*1000)/speed);
}

function calcCos(x,y,x_char,y_char) {
    var module = Math.sqrt((x-x_char)*(x-x_char) + (y-y_char)*(y-y_char));
    return ((x-x_char)/module);
}

function calcSen(x,y,x_char,y_char) {
    var module = Math.sqrt((x-x_char)*(x-x_char) + (y-y_char)*(y-y_char));
    return ((y-y_char)/module);
}


function getDirection(x,y,x_char,y_char) {
    var cos = calcCos(x,y,x_char,y_char);
    var sen = calcSen(x,y,x_char,y_char);
    var direction;

    if( (cos > 0.940 && cos < 1) && ( (sen > 0 && sen  < 0.342) || (sen > -0.342 && sen < 0) ) ) {
        return 3;
    }

    if( (sen > 0.940 && sen < 1) && ( (cos > 0 && cos  < 0.342) || (cos > -0.342 && cos < 0) ) ) {
        return 1;
    }

    if( (cos > -1 && cos < -0.940) && ( (sen > 0 && sen  < 0.342) || (sen > -0.342 && sen < 0) ) ) {
        return 2;
    }

    if( (sen > -1 && sen < -0.940) && ( (cos > 0 && cos  < 0.342) || (cos > -0.342 && cos < 0) ) ) {
        return 4;
    }

    if( (cos >= 0.342 && cos <= 0.940) && (sen >= 0.342 && sen <= 0.940) )
        return 6;
    if( (cos >= 0.342 && cos <= 0.940) && (sen >= -0.940 && sen <= -0.342) )
        return 5;
    if( (cos >= -0.940 && cos <= -0.342) && (sen >= -0.940 && sen <= -0.342) )
        return 8;
    if( (cos >= -0.940 && cos <= -0.342) && (sen >= 0.342 && sen <= 0.940) )
        return 7;

}

function setSprite(direction) {
    var node   = document.getElementById("char");
    var classe = node.getAttribute("classe");
    var path   = "./imagens/" + classe + "/sprite" + direction + ".gif";
    node.style.backgroundImage = "url('" + path +  "')";
}
function setSprite_s(direction) {
    var node   = document.getElementById("char");
    var classe = node.getAttribute("classe");
    var path   = "./imagens/" + classe + "/sprite" + direction + "_s.gif";
    node.style.backgroundImage = "url('" + path + "')";
}   

function spawnPlayer() {
    document.getElementById("char").style.left = "374px";
    document.getElementById("char").style.top  = "260px";
}



function spawnMonsters(monster) {

    var amount = 8;
    var d1 = document.getElementById('map');

    for(var i = 0; i < amount; i++) {
        d1.insertAdjacentHTML('beforeend', '<div id="monster" class="monster" name="Poring' + i + '" onmousedown="monsterAtack(this)"></div>');
        var m = document.getElementsByName("Poring" + i);
        var x = Math.floor((Math.random()*700));
        var y = Math.floor((Math.random()*200));
        m[0].style.left = x + "px";
        m[0].style.top  = y + "px";

    }
}

function monsterAnimate() {
    var m = document.getElementById("monster");
    for(var i = 0; i < m.lenght; i++) {

        var x_monster = parseFloat(m[i].style.left);
        var y_monster = parseFloat(m[i].style.top);

        var x = Math.floor((Math.random()*700));
        var y = Math.floor((Math.random()*200));

        var module    = Math.sqrt((x-x_monster)*(x-x_monster) + (y-y_monster)*(y-y_monster));
        var speed     = 75;
        var duration  = calcDuration(x,y,x_monster,y_monster,speed,module);
        var direction = getDirection(x,y,x_monster,y_monster);

        

        $('').animate({
        left: x,
        top: y}, duration, 'linear', function(){
            setSprite_s(direction);
        });
    }
}

if  ((document.getElementById) && 
window.addEventListener || window.attachEvent){

(function(){

var rm_img = new Image();
rm_img.src = "./imagens/poring/front.gif"; 

var imgh = 163;  
var imgw = 156; 
var timer = 40; //setTimeout da velocidade.
var min = 1;    //slowest mais devagar.
var max = 5;    //fastest mais rapido.

var idx = 1;
idx = parseInt(document.images.length);
if (document.getElementById("monster"+idx)) idx++;

var stuff = "<div id='monster"+idx+"' style='position:absolute;"
+"top:2px;left:2px;height:"+imgh+"px;width:"+imgw+"px;"
+"overflow:hidden'><img src='"+rm_img.src+"' alt=''/><\/div>";
document.write(stuff);
    
var h,w,r,temp;
var d = document;
var y = 2;
var x = 2;
var dir = 45;   //direção.
var acc = 1;    //aceleração.
var newacc = new Array(1,0,1);
var vel = 1;    //velocidade inicial.
var sev = 0;
var newsev = new Array(1,-1,2,-2,0,0,1,-1,2,-2);

var c1 = 0;    
var c2 = 0;    

var pix = "px";
var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");

if (domWw) r = window;
else{ 
  if (d.documentElement && 
  typeof d.documentElement.clientWidth == "number" && 
  d.documentElement.clientWidth != 0)
  r = d.documentElement;
 else{ 
  if (d.body && 
  typeof d.body.clientWidth == "number")
  r = d.body;
 }
}

function winsize(){
var oh,sy,ow,sx,rh,rw;
if (domWw){
  if (d.documentElement && d.defaultView && 
  typeof d.defaultView.scrollMaxY == "number"){
  oh = d.documentElement.offsetHeight;
  sy = d.defaultView.scrollMaxY;
  ow = d.documentElement.offsetWidth;
  sx = d.defaultView.scrollMaxX;
  rh = oh-sy;
  rw = ow-sx;
 }
 else{
  rh = r.innerHeight;
  rw = r.innerWidth;
 }
h = rh - imgh; 
w = rw - imgw;
}
else{
h = r.clientHeight - imgh; 
w = r.clientWidth - imgw;
}
}


function scrl(yx){
var y,x;
if (domSy){
 y = r.pageYOffset;
 x = r.pageXOffset;
 }
else{
 y = r.scrollTop;
 x = r.scrollLeft;
 }
return (yx == 0)?y:x;
}


function newpath(){
sev = newsev[Math.floor(Math.random()*newsev.length)];
acc = newacc[Math.floor(Math.random()*newacc.length)];
c2 = Math.floor(20+Math.random()*50);
}


function moveit(){
var vb,hb,dy,dx,curr;
if (acc == 1) vel +=0.05;
if (acc == 0) vel -=0.05;
if (vel >= max) vel = max;
if (vel <= min) vel = min;
c1++;
if (c1 >= c2){
 newpath();
 c1=0;
}
curr = dir+=sev;
dy = vel * Math.sin(curr*Math.PI/180);
dx = vel * Math.cos(curr*Math.PI/180);
y+=dy;
x+=dx;

vb = 180-dir;
hb = 0-dir;

if ((y < 1) && (x < 1)){y = 1; x = 1; dir = 45;}
if ((y < 1) && (x > w)){y = 1; x = w; dir = 135;}
if ((y > h) && (x < 1)){y = h; x = 1; dir = 315;}
if ((y > h) && (x > w)){y = h; x = w; dir = 225;}

if (y < 1) {y = 1; dir = hb;}  
if (y > h) {y = h; dir = hb;}  
if (x < 1) {x = 1; dir = vb;} 
if (x > w) {x = w; dir = vb;} 

temp.style.top = y + scrl(0) + pix;
temp.style.left = x + scrl(1) + pix;
setTimeout(moveit,timer);
}

function init(){
temp = document.getElementById("monster"+idx);
winsize();
moveit();
}


if (window.addEventListener){
 window.addEventListener("resize",winsize,false);
 window.addEventListener("load",init,false);
}  
else if (window.attachEvent){
 window.attachEvent("onresize",winsize);
 window.attachEvent("onload",init);
} 

})();
}