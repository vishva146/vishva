<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dialog Box</title>
</head>
<body>
<script lang="javascript">
	let i=0,j,no;
	//note remaining
	no=prompt("Enter the Range"," ");
	for(i=1;i<no;i++)
{
	if(i==3)
	{continue;}
	if(i==5)
	{break;}
	document.write("The no.is :"+i+"<br>");
}
	j=conform("The no is:"+i+"<br>");
	if (j==true){
	document.write("The no is:"+i+"<br>");
}
else{
	document.write("you click oncancle button");
}
alret("The break value is:"+i+"<br>")
</script>
</body>
</html>