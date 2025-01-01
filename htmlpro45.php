<!--Write a code to define Date Object Methods in JavaScript-->

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Date Object Methods-pro21js</title>
</head>
<body>
    <script lang="JavaScript">
        let d=new Date();
       document.write(Date()+"<br>");//It Return System Date and Time
       document.write(d.getDay()+"<br>");//It Returns Day Of the Week (0-6)
       document.write(d.getMonth()+"<br>");//It Returns Number Of the Monthe(0-11)
       document.write(d.getYear()+"<br>");//It Returns (Current Year - 1900) Values
       document.write(d.getFullYear()+"<br>");//It Returns Current Year in 4-digit
       document.write(d.getHours()+"<br>");
       document.write(d.getMinutes()+"<br>");
       document.write(d.getSeconds()+"<br>");
       document.write(d.getMilliseconds()+"<br>");
       document.write(d.getTime()+"Ms<br>");
      
       d.setFullYear(1984,7,13);
       d.setDate(13);
       d.setMonth(7);
       d.setYear(1984);
       d.setHours(10,30,20,803); 
       d.setMinutes(20,30,903);
       d.setSeconds(40,724);

       document.write(d.getDate()+"<br>");
       document.write(d.getMonth()+"<br>");//It Returns Number Of the Monthe(0-11)
       document.write(d.getYear()+"<br>");//It Returns (Current Year - 1900) Values
       document.write(d.getFullYear()+"<br>");//It Returns Current Year in 4-digit
       document.write(d.getHours()+"hours<br>");
       document.write(d.getMinutes()+"Min<br>");
       document.write(d.getSeconds()+"Sec<br>");
       document.write(d.getMilliseconds()+"Ms<br>");
       document.write(d.getTime()+"Ms<br>");
       document.write(d +"<br>");

    </script>
</body>
</html>

