function abrirPag(valor){
var url = valor;

xmlRequest.open("GET",url,true);  
xmlRequest.onreadystatechange = mudancaEstado;
xmlRequest.send(null);
 

if (xmlRequest.readyState == 1) {
document.getElementById("conteudo_mostrar").innerHTML = "<img src='loader.gif'>";
}

return url;
}

function mudancaEstado(){
if (xmlRequest.readyState == 4){
document.getElementById("conteudo_mostrar").innerHTML = xmlRequest.responseText;
}
}
//pagina de pesquisa
function abrirPag2(valor){
var url = valor;

xmlRequest.open("GET",url,true);  
xmlRequest.onreadystatechange = mudancaEstado2;
xmlRequest.send(null);
 

if (xmlRequest.readyState == 1) {
document.getElementById("crud").innerHTML = "<img src='loader.gif'>";
}

return url;
}

function mudancaEstado2(){
if (xmlRequest.readyState == 4){
document.getElementById("crud").innerHTML = xmlRequest.responseText;
}
}

//pagina de resultado
function abrirPag3(valor){
var url = valor;

xmlRequest.open("GET",url,true);  
xmlRequest.onreadystatechange = mudancaEstado2;
xmlRequest.send(null);
 

if (xmlRequest.readyState == 1) {
document.getElementById("consult").innerHTML = "<img src='loader.gif'>";
}

return url;
}

function mudancaEstado3(){
if (xmlRequest.readyState == 4){
document.getElementById("consult").innerHTML = xmlRequest.responseText;
}
}
