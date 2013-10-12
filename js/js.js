function gameLoop () {
    monsterAnimate();
    var hits = $("#char");
    //hits.remove();
}

function ini() {
    var utils = {}
    utils.timer = setInterval(gameLoop,30);
    spawnPlayer();
    spawnMonsters("poring");
    setSprite_s(1);

    /*remoção do inspetor de codigo do google chrome*/
    /*shortcut("Ctrl+Shift+j",function(){return false;});*/
    shortcut("alt+m",function(){ $(".atalhos").toggleClass( "hidden"); return false;});
    shortcut("Ctrl+o",function(){ $(".sound-control").toggleClass( "hidden"); return false;});
    shortcut("Ctrl+s",function(){ $(".skills-class-select").toggleClass( "hidden"); return false;});
    shortcut("Ctrl+g",function(){ $(".guilda").toggleClass( "hidden"); return false;});
    shortcut("Ctrl+h",function(){ $(".friends").toggleClass( "hidden"); return false;});
    shortcut("alt+e",function(){ $(".itens").toggleClass( "hidden"); return false;});
    shortcut("ctrl+e",function(){return false;});
    shortcut("Ctrl+i",function(){ $(".status").toggleClass( "hidden"); return false;});
    shortcut("Ctrl+alt",function(){ $(".geo-map").toggleClass( "hidden"); return false;});
    shortcut("alt+q",function(){ $(".quests").toggleClass( "hidden"); return false;});
    shortcut("alt+z",function(){ $(".grupo-config").toggleClass( "hidden"); return false;});
    shortcut("ctrl+u",function(){return false;});
    shortcut("f1",function(){return false;});
    shortcut("f2",function(){return false;});
    shortcut("f3",function(){return false;});
    shortcut("f4",function(){return false;});
    shortcut("f5",function(){return false;});
    shortcut("f6",function(){return false;});
    shortcut("f7",function(){return false;});
    shortcut("f8",function(){return false;});
    shortcut("f9",function(){return false;});
    shortcut("f10",function(){return false;});
    shortcut("f11",function(){return false;});
    shortcut("f12",function(){return false;});
}

function getMouse(event){

	var x_char = parseFloat(document.getElementById("char").style.left);
    var y_char = parseFloat(document.getElementById("char").style.top);

    var x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("bg").offsetLeft;
    var y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("bg").offsetTop;

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

function monsterAtack(event) {
    var nome = event.getAttribute("name");
    var m    = document.getElementsByName(nome);

    var x_char = parseFloat(document.getElementById("char").style.left);
    var y_char = parseFloat(document.getElementById("char").style.top);

    var x_mons = parseFloat(m[0].style.left);
    var y_mons = parseFloat(m[0].style.top);

    $('#char').animate().stop();

    var module    = Math.sqrt((x_mons-x_char)*(x_mons-x_char) + (y_mons-y_char)*(y_mons-y_char));
    var speed     = 150;
    var duration  = calcDuration(x_mons,y_mons,x_char,y_char,speed,module);
    var direction = getDirection(x_mons,y_mons,x_char,y_char);
    //alert(direction);
    setSprite(direction);
    /*alert(x_mons + " - " + y_mons);*/
    $('#char').animate({
        left: x_mons,
        top: y_mons}, duration, 'linear', function(){
            setSprite_s(direction);
        });

}

function monsterAtack2 (className) {

    var monstro = document.getElemetsByClass(className);
    alert (monstro);
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
    var node   = document.getElementById("personagem");
    var classe = node.getAttribute("classe");
    var path   = "./imagens/" + classe + "/sprite" + direction + ".gif";
    node.style.backgroundImage = "url('" + path +  "')";
}
function setSprite_s(direction) {
    var node   = document.getElementById("personagem");
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
        d1.insertAdjacentHTML('beforeend', '<div id="monster" class="monster" name="Poring' + i + '" onClick="monsterAtack(this)"></div>');
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

/*atalhos DO TECLADO*/

function shortcut(shortcut,callback,opt) {
//Provide a set of default options
var default_options = {
'type':'keydown',
'propagate':false,
'target':document
}
if(!opt) opt = default_options;
else {
for(var dfo in default_options) {
if(typeof opt[dfo] == 'undefined') opt[dfo] = default_options[dfo];
}
}
var ele = opt.target
if(typeof opt.target == 'string') ele = document.getElementById(opt.target);
var ths = this;
//The function to be called at keypress
var func = function(e) {
e = e || window.event;
//Find Which key is pressed
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code).toLowerCase();
var keys = shortcut.toLowerCase().split("+");
//Key Pressed - counts the number of valid keypresses - if it is same as the number of keys, the shortcut function is invoked
var kp = 0;
//Work around for stupid Shift key bug created by using lowercase - as a result the shift+num combination was broken
var shift_nums = {
"`":"~",
"1":"!",
"2":"@",
"3":"#",
"4":"$",
"5":"%",
"6":"^",
"7":"&",
"8":"*",
"9":"(",
"0":")",
"-":"_",
"=":"+",
";":":",
"'":"\"",
",":"<",
".":">",
"/":"?",
"\\":"|"
}
//Special Keys - and their codes
var special_keys = {
'esc':27,
'escape':27,
'tab':9,
'space':32,
'return':13,
'enter':13,
'backspace':8,
'scrolllock':145,
'scroll_lock':145,
'scroll':145,
'capslock':20,
'caps_lock':20,
'caps':20,
'numlock':144,
'num_lock':144,
'num':144,
'pause':19,
'break':19,
'insert':45,
'home':36,
'delete':46,
'end':35,
'pageup':33,
'page_up':33,
'pu':33,
'pagedown':34,
'page_down':34,
'pd':34,
'left':37,
'up':38,
'right':39,
'down':40,
'f1':112,
'f2':113,
'f3':114,
'f4':115,
'f5':116,
'f6':117,
'f7':118,
'f8':119,
'f9':120,
'f10':121,
'f11':122,
'f12':123,
'alt':124
}
for(var i=0; k=keys[i],i<keys.length; i++) {
//Modifiers
if(k == 'ctrl' || k == 'control') {
if(e.ctrlKey) kp++;
} else if(k == 'shift') {
if(e.shiftKey) kp++;
} else if(k == 'alt' || k == 'Alt') {
if(e.altKey) kp++;
} else if(k.length > 1) { //If it is a special key
if(special_keys[k] == code) kp++;
} else { //The special keys did not match
if(character == k) kp++;
else {
if(shift_nums[character] && e.shiftKey) { //Stupid Shift key bug created by using lowercase
character = shift_nums[character];
if(character == k) kp++;
}
}
}
}
if(kp == keys.length) {
callback(e);
if(!opt['propagate']) { //Stop the event
//e.cancelBubble is supported by IE - this will kill the bubbling process.
e.cancelBubble = true;
e.returnValue = false;
//e.stopPropagation works only in Firefox.
if (e.stopPropagation) {
e.stopPropagation();
e.preventDefault();
}
return false;
}
}
}
//Attach the function with the event
if(ele.addEventListener) ele.addEventListener(opt['type'], func, false);
else if(ele.attachEvent) ele.attachEvent('on'+opt['type'], func);
else ele['on'+opt['type']] = func;
}