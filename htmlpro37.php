<!--Write a code to define Array with String Object Built In Function in internal JavaScript-->

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Array with String Object Built In Function-pro16js</title>
</head>
<body>
    <script lang="JavaScript">
        let sname=new Array(6);
        sname[0]="Denisha";
        sname[1]="Vishva";
        sname[2]="Trisha";
        sname[3]="Krishna";
        sname[4]="Yashvi";
        sname[5]="Pallavi";
        
        document.write(sname[0].big()+"<br>");
        document.write(sname[1].small()+"<br>");
        document.write(sname[2].bold()+"<br>");
        document.write(sname[3].strike()+"<br>");
        document.write(sname[4].fontcolor("red")+"<br>");
        document.write(sname[5].link("pro9.html")+"<br>");
        document.write(sname[4].italics()+"<br>");
    </script>
</body>
</html>
