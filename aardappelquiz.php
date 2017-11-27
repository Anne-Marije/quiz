

<html>
    
    startpagina van quiz
    
   
    <input type=button onClick="start()" value='test je aardappel kennis'>
    
    <script> 
    var n = 0
    function start(){
        n++;
        document.location='aardappelvragen.php?vraag='+n;
    }
    </script>
</html>