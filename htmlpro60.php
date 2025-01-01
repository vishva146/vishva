<!--Write a code to define onsubmit event in javaascript-->
<html>
<head>
	<title> Onsubmit </title>
<script>
	function test variable (){
	var strtext=document.getelementbyid("txtname").value;
	var strtext1=document.getelementbyid("txtemail").value;
	document.getelementbyid("p1").innerHTML=strtext;
	document.getelementbyid("p2").innerHTML=strtext;
	document.getelementbyid("p3").innerHTML="your data successfully submited";
	//alert ("your data successfully submited")
}
</script>
</head>
<body>
	<form onsubmit="tesst variable()">
	<input type="text" name="Name" id="txt Name" placeholder="Name">
	<input type="text" name="Email" id="txt Email" placeholder="Email">
<br><br>
<input type="submit" value="submit" onclick="testvariable()">
</form>
<div>
<br><br>
<label your name:></label>
<span id="p1"></span>
<br>
<lable your Email:</lable>
<span id="p2"></span>
<br>
<p id="p3"> </p>
</div>
</body>
</html>