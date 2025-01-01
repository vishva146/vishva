<!--Write a code to use Onabort and Onerror Events in JavaScript-->

<!DOCTYPE html>
<html>
    <head>
        <title>Onabort Event-pro27js1</title>
 
         
    </head>
    <body>    

        <img src="js/cs04.jpeg" height="200px" onabort="Onabrt()" />
        
        <img src="js/cs4.jpeg" height="200px" onerror="myFunction()">

        <p>A function is triggered if an error occurs when loading the image. The function shows an alert box with a text.
        In this example we refer to an image that does not exist, therefore the onerror event occurs.</p>
        
        <script>
        function myFunction() {
          alert('The image could not be loaded.');
        }

        function Onabrt(){
            alert('Error Loading Of an Image was Aborted');  
        }
        </script>
    </body>
</html>


