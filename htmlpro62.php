<!--Write a code to use onload and onunload events in javascript-->
<html>
<head>
	<title> Onload and Onunload event </title>
</head>
<body onload="mypageload()">
<h1>"Hello World"</h1>
<p> The onunload event occurs once a page has unloaded(or the browser window has been closed)</p>
<p> Onunload occurs when the user navigates away from the page(bt clicking on a link submitting a form clasing the browser window etc.)</p>
<p><b>Note:</b>The onunload event is also triggered when a user rebads the page(and the onload event)</p>
<script>
 function my pageload1(){
 alert("Good Morning");
}
   function my page unload(){
   alert("Thank you for visiting here");
}
   window unload=mypageunload();
</script>
</body>
</html>