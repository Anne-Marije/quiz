 var n = 0
    function start(){
        n++;
        document.location='aardappelvragen.php?vraag='+n;
    }
    
    function toevoeg(){
        document.location='receptentoevoeg.php';
    }
    
        function recepten(){
        document.location='recepten.php';
    }
    
    
     function weg(id){
        window.location.href="aardappel.php?id="+id;
    } 
