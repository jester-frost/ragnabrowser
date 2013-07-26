var a,b,c,d,e,f,g,h,i,j,k,l = 0; 
a = 306;
b = 531; // Int Baixo
c = 175;
d = 455;
e = 175;
f = 304;
g = 306;
h = 229; // STR topo
ii = 436;
j = 304;
k = 436;
l = 455;
function adcint(){
var inte=document.getElementById("poligon");
    inte.setAttribute("points", a+","+(b=b+21)+" "+c+","+d+" "+e+","+f+" "+g+","+(h=h+21)+" "+ii+","+j+" "+k+","+l);
};
function adcstr(){
var str=document.getElementById("poligon");
    str.setAttribute("points", a+","+(b=b-21)+" "+c+","+d+" "+e+","+f+" "+g+","+(h=h-21)+" "+ii+","+j+" "+k+","+l);
};
 function adcluk(){
var sort=document.getElementById("poligon");
    sort.setAttribute("points", a+","+b+" "+c+","+d+" "+(e=e+18)+","+(f=f+12)+" "+g+","+h+" "+ii+","+j+" "+(k=k+18)+","+(l=l+12));
};
function adcagi(){
var agi=document.getElementById("poligon");
    agi.setAttribute("points", a+","+b+" "+c+","+d+" "+(e=e-18)+","+(f=f-12)+" "+g+","+h+" "+ii+","+j+" "+(k=k-18)+","+(l=l-12));
};
function adcvit(){
var vit=document.getElementById("poligon");
    vit.setAttribute("points", a+","+b+" "+(c=c+18)+","+(d=d-12)+" "+e+","+f+" "+g+","+h+" "+(ii=ii+18)+","+(j=j-12)+" "+k+","+l);
};
function adcdex(){
var dex=document.getElementById("poligon");
    dex.setAttribute("points", a+","+b+" "+(c=c-18)+","+(d=d+12)+" "+e+","+f+" "+g+","+h+" "+(ii=ii-18)+","+(j=j+12)+" "+k+","+l);
};




var mySound = new buzz.sound( "./sounds/click", {
        formats: [ "ogg", "mp3", "acc", "wav"]
    });