<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
</html> 

<html>
    <div align=center>
    <div id="kop">startpagina van quiz</div><br>
    
   
    <input id="knop" type=button onClick="start()" value='test je aardappel kennis'>
    </div>
    
    <script> 
    var n = 0
    function start(){
        n++;
        document.location='aardappelvragen.php?vraag='+n;
    }
    </script>
</html>