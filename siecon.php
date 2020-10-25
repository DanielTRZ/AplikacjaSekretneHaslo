<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="input.css">
       <title>Sieć logowanie</title> 
    
    </head>
    <body> 
       
        <h1>Witaj Urzytkowniku</h1>
        <div id="centrum">
            <?php
          
            session_start();
            
            if (isset($_SESSION['log'])){
                header('location: siec.php');
                exit();
            } elseif (isset($_GET['name'])){
            if ($_GET['name'] == 'urzytkowniku'){
                $_SESSION['log'] = $_GET['name'];
                header('location: siecon.php');
                exit ();
            } else {
                echo "Nie zgadłeś urzytkowniku poddajesz się czy prubujesz dalej : <br>";
            }
            }
            ?>
            
     <h2>Podaj swoje dane wejściowe</h2>
     <form action="siecon.php" method="get" >
     <input type="text" name="name" id=""  >
     <input type="submit" value="Wyślij">        
            
            </form>
            <br/><br/>
        
         </div>
         <div id="podpowiedz">
             <p>Mała podpowiedz :<br/>To jesteś ty <span>?</span></p>
         </div>
        
    </body>

</html>