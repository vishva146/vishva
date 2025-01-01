<!--Write a code to define Array Object Methods in JavaScript-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Object Methods-pro22js</title>
</head>
<body>
    <script lang="JavaScript">
        let x=new Array();
        x[0]="Networking";
        x[1]=" HTML";
        x[2]=" CSS";
        x[3]=" JavaScript";

        let y=new Array();
        y[1]=" Computer Fundamental";
        y[0]=" C Language";
        y[2]=" and etc.";

        let z= ["Banana", "Orange", "Apple", "Mango"];

        document.write(x.concat(y)+"<br>");
        document.write(x.join()+"<br><br>");
        document.write(x.join(y)+"<br>");
        
        document.write(z+"<br>");
        document.write(z.pop()+"<br>");//Its remove & returns last element of an array
        document.write(z+"<br>");
        document.write(z.push("Mango", "Pineapple")+"<br>");
        document.write(z+"<br>");
        document.write(z.reverse()+"<br>");
        document.write(z+"<br>");
        document.write(z.reverse()+"<br>");
        document.write(z+"<br>");
        document.write(z.shift()+"<br>");
        document.write(z+"<br>");
        //We want to Place Again Banana At First Place Then
        // z.reverse() then z.push() z.reverse

        document.write(z.reverse()+"<br>");
        document.write(z.push("Banana")+"<br>");
        document.write(z.reverse()+"<br>");
        document.write(z+"<br>");

        document.write(z.sort()+"<br>");
        document.write(z.pop()+"<br>");
        document.write(z.length+"<br>");
        document.write(z);
        document.write(z.push("Pineapple")+"<br>");
       // document.write(z.length+"<br>");
        document.write(z+"<br>");
        document.write(z.reverse());
    </script>
</body>
</html>


