<!--Write a HTML&CSS code using css position properties-->
<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> CSS Position Properties</title>
<style type="text/css">
h1{
	position:absolute;
	left:100px;
	top:150px;
}
.div1{
	position:relative;
	left:40px;
}
.div2{
	position:relative;
	right:-40px;
}
div:hover{
	width:300px;
	height:300px;
	transform:rotate(90deg);
}
</style>
</head>
<body>
<h1> The position absolute properties </h1>
<div class="div1">position relative left</div>
<div class="div2">position relative right</div>
</body>
</html>
