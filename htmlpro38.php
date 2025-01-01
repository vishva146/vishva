<!--Write a code to define charAt(),concat() and indexOf() Methods in internal JavaScript-->
<!DOCTYPE html>
<html lang="en">
<head>
       <title> charAt(),concat() and indexOf Method-pro17js</title>
</head>
<body>
    <script lang="JavaScript">
        let fname=" Ajani";
        let mname=" Vishva";
        let lname="Bipinbhai";
        let a = "Hello World";
        let b;
        document.write(fname.charAt(4)+"<br>");
        document.write(mname.concat(lname,fname)+"<br>");
        document.write(fname.concat(mname,lname)+"<br>");
        b = fname.concat(mname,lname);
        document.write(a.indexOf("Hello")+"<br>");
        document.write(a.indexOf("lo Wo")+"<br>");
        document.write(a.indexOf("WoRld")+"<br>");
        document.write(a.indexOf("World")+"<br>");
        document.write(b.indexOf("Vishva"));    
    </script>
</body>
</html>
