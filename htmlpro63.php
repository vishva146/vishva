<!--Write a code to use onselect event with onblur event in javascript-->
<!DOCTYPE html>
<html>
<head>
	<title>  onselect event with onblur event </title>
</head>
<body>
<form>
	select text:<input type="text" value="Hello world" onselect="textselect()" onblur="textunfocus()">
</form>
<p id="p1"></p>
<script>
	function textselect(){
	//alert("you have selected some text");
	document.getElementById("p1").innerHTML="you have selected some text";
}
	function textunfocus(){
	document.getElementById("p1").innerHTML=" ";
}
</script>
</body>
</html>