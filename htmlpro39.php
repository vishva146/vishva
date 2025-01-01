<!--Write a code to define indexOf(), lastIndexOf(), match(), replace() and search() Methods in internal JavaScript-->
<!DOCTYPE html>
<html lang="en">
<head>
       <title>Indexof(),lastIndexOf(),match(),replace(), and search() Methods-pro18js</title>
</head>
<body>
    <script lang="JavaScript">
        let a = "Hello Good Morning* All Students";
        let b = "Students";
        let c="Have a Nice Day! "
        document.write(a.indexOf("All")+"<br>");
        document.write(a.indexOf("all")+"<br>");
        document.write(a.lastIndexOf("o")+"<br>");
        document.write(a.lastIndexOf("o",a.length)+"<br>");
        document.write(a.match("All")+"<br>");
        document.write(a.match("All")+"<br>");
        document.write(a.replace(a,b)+"<br>");
        document.write(a.replace(b,c)+"<br>");
        document.write(a.search("All")+"<br>");
 </script>
</body>
</html>
