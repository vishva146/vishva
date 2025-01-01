<!--Write a code to define document object in javascript-->
<!DOCTYPE html>
<html>
<head>
	<title>Document object</title>
</head>
<body>

<h2 id="heading2">This is an example h2</h2>
<button onclick="changetext()">change text</button>
<p id="p1">Orange Color
<button type="button" onclick="tcolor()">Set text color</button>
<p id="p2">Display Document Title Name</p>
<button type="button" onclick="ttitle()">Display Title</button>
<p id="p3">Green Color</p>
<button type="button" onclick="opclose()">Open/Close</button>
<div id="div1">This is an example div.</div>
<br>
Cats:  <input name="animal" type="checkbox" value="Cats">
Dogs:  <input name="animal" type="checkbox" value="Dogs">

<p>Click the button to check all checkboxes that have a name attribute with the value "animal".</p>
<button type="button" onclick="cbox()">select all Checkbox</button>
<button type="button" onclick="ucbox()">clear Selection</button>

<p>This is also a p element - Click the button to change the background color of all p elements in this document.</p>
<button type="button" onclick="tagnam()">Tag name</button>
<br>
<button onclick="goBack()">Go Back</button>
<script>
function tcolor() {
  document.getElementById("p1").style.color = "orange";
  document.getElementById("p2").style.color = "blue";
  document.getElementById("p3").style.color="green";
  document.getElementById("div1").style.color = "lightblue";
}
function changetext() {
  document.getElementById("heading2").innerHTML = "Hello World";
}
function ttitle(){
    document.getElementById("p2").innerHTML=document.title;
}

function opclose(){
    document.open();
    document.write("<h1> Hello World</h1>");
    document.close();
}

function cbox(){
    let x=document.getElementsByName("animal");
    let i;
    for(i=0;i<x.length;i++){
        if(x[i].type=="checkbox"){
            x[i].checked=true;
        }
    }
}

function ucbox(){
    let x=document.getElementsByName("animal");
    let i;
    for(i=0;i<x.length;i++){
        if(x[i].type=="checkbox"){
            x[i].checked=false;
        }
    }
}

function tagnam(){
    let y=document.getElementsByTagName("p");
    let j;
    for(j=0;j<y.length;j++){
        y[j].style.backgroundColor="red";
    }
  
}


function goBack() {
  window.history.back();
}

</script>
</body>
</html>
