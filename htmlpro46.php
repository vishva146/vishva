<!--Write a code to use Document Object and Navigator Object in JavaScript-->
<!DOCTYPE html>
<html>
    <head>
        <title>DocumentObject, NavigatorObject-pro26js</title>
    </head>
<body>
<h2 id="heading2">This is an example h2</h2>
<p id="p1">This is the butterfly</p>
<p id="p2"> This is the peacock</p>
<p id="p3">This is the himalaya</p>
<button onclick="changetext()">change text</button>
<br>
Cats:  <input name="animal" type="checkbox" value="Cats">
Dogs:  <input name="animal" type="checkbox" value="Dogs">
<br>
<button onclick="allcheck()"> Check All</button>
<button onclick="changebg()">Change Background Color of 1 to 3 Paragraph</button>

<script>
    function changetext(){
        document.getElementById("heading2").innerHTML = "Hello World";
        document.getElementById("p1").style.color = "purple";
        document.getElementById("p2").style.color = "sky blue";
        document.getElementById("p3").style.color= "red";
    }
    function allcheck(){
    let x=document.getElementsByName("animal");
    let i;
        for(i=0;i<x.length;i++){
            if(x[i].type=="checkbox"){ 
                x[i].checked=true;
            }
        }
    }

    function changebg(){
    let y=document.getElementsByTagName("p");
    let j;
    for(j=0;j<y.length;j++){ //j=0, y.length=3
        y[j].style.backgroundColor="green";
    } 
  
}
document.write("<h1> Hello </h1>");
let x1="Application Version:"+navigator.appVersion;
let x2="Operating System being used:"+navigator.platform;
let x3="Name Of User Agent:"+navigator.userAgent;
let x4="Language:"+navigator.language;
let x5="Application Name is:"+navigator.appName;
let x6="Does the Web Browser Support Cookies?:"+navigator.cookieEnabled;


</script>

<pre>
<script>
    document.writeln(x1);
    document.writeln(x2);
    document.writeln(x3);
    document.writeln(x4);
    document.writeln(x5);
    document.writeln(x6);

</script>
</pre>
</body>
</html>
