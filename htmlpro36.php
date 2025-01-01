<!DOCTYPE html>
<html lang="en">
<head>
	<title>User define function piramid</title>
	<script lang="javascript">
	function sum1()
	{
	let i=0;
	for(i=1; i<=5; i++)
	{
	for(j=1; j<=i; j++)
	document.write("*");
	document.write("<br>");
	}
	//document.write("Hello World");
	//alert("Hello Students");
	}
</script>
</head>
<body>
<form>
	<input type="submit" name="submit" value="click me" onclick="sum1()">
</form>
</body>
</html>