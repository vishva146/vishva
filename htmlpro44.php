<!--Write a code to define Template Of an Object in JavaScript-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template Of an Object-pro24js</title>
</head>
<body>
    <script lang="JavaScript">

        function person(fname,mname,lname,age,eyecolor)
        {
            this.fname=fname;
            this.mname=mname;
            this.lname=lname;
            this.age=age;
            this.eyecolor=eyecolor;
            this.m1=m1;
        }
        x= new person("Rathod","Neha","Balavantsinh","34","brown");
        y= new person("Rajput","Shivani","Bhupatsinh","32","light brown");

        document.write(x.fname+" "+x.mname+" "+x.lname+" Age is "+x.age+" and Eye color is "+x.eyecolor+"<br>");
        document.write(y.fname+" "+y.mname+" "+y.lname+" Age is "+y.age+" and Eye color is "+y.eyecolor+"<br>");

      function m1()
      {
          yyy;
      }
      document.write(y.m1);
    </script>
</body>
</html>


