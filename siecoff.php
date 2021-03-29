    <!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="input.css">
       <title>Koniec Sesji</title> 
    </head>
 <body>
        <div id="wylogowanie">
            
    <?php
        session_start();
        if (isset($_SESSION['log']))
        {    
        unset($_SESSION['log']);         
        }
        else{  
            header('location: loguj.php');
            exit;    
        }
            
        $s = session_destroy();
          
        ?>
            
        <a>Wylogowałeś się z sieci.</a>
        <br/><br/>
        <a href="siecon.php"><span>Logowanie</span></a>
            
       </div>
    </body>
</html>
