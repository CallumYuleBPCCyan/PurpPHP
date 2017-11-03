<!Doctype html><html>    
    <body>        
        <?php        
        echo "First time trying PHP";        
        $Roll = rand(1,6);        
        
        if ($Roll == 1)         
        {            
            echo "Almost snake Eyes";  
            
        }         elseif ($Roll == 6)         
        {            
            echo "Winner";        
        }         
        
        else        
        {            
            echo "Other number";        
        }        
        ?>    
    </body>
</html>


