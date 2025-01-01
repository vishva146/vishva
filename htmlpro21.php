<!--Write a HTML &CSS Code Using CSS 2D&3D Transform Properties-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>CSS 2D&3D Transform Properties</title>
<style type="text/css">
body{
	font-size:14px;
	background-color:yellow;
	translate:yes;
}
.transform{
	transform:translate(50px,20px);
}
.rotate{
	transform:rotate(340deg);
}
.scale{
	transform:scale(1.3);
}
.skewX{
	transform:skewX(20deg);
}
.skewY{
	transform:skewY(20deg);
}
.skew{
	transform:skew(40ddeg,4deg);
}
matrix{
	transform:matrix(1,-0.3,1,0.9,0,0);
}
.rotateX{
	transform:rotateX(14deg);
}
.rotateY{
	transform:rotateY(17deg);
}
.rotateZ{
	transform:rotateZ(90deg);
}
</style>
</head>
<body>
	<p class="transform">This is Based On translate method...</p>
	<p class="rotate">This paragraph is Based On rotate Method....</p>
	<p class="scale">This is based on scale method....</p>
	<p class="skewX">This is Based on skewX method....</p>
	<p class="skewY">This is Based on skewY method...</p>
	<p class="skew">This is based on skew method...</p>
	<p class="matrix">This is Based on matrix method...</p>
	<p class="rotateX">This paragraph is Based on CSS 3D Transform Rotate an element its X-axis at 	a gives degree</p>
	<p class="rotateY">This paragraph is Based on CSS 3D Transform Rotate an element its Y-axis at 	a gives degree</p>
	<p class="rotateZ">This paragraph is Based on CSS 3D Transform Rotate an element its Z-axis at 	a gives degree</p>
</body>
</html>