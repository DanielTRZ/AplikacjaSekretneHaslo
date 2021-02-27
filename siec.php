<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="input.css">
       <title>sieć</title> 
    
   </head>
   <body>
      <div class="binarka">
          <p class="bin">1010010101010101010001110101010101001010101010101000111010101001010101010101010101010101</p></div>
            
      <div id="urzytkownik">
      <?php
       
   session_start();
            if (!isset($_SESSION['log'])){
                header('location: siecon.php');
                exit;
            }
            ?>
            <br/>
            
            <?php
            $imie = ucfirst($_SESSION['log']);
            echo "Witaj<br>" . $imie;
            ?>
            
       </div>
       <div id="odpowiedz"><br/>
            <a> w sieci</a>
            <br/>
            <br/>
            
       <p id="uno">Widzę że w końcu rozwiązałeś zagadkę<p/>     
       <p id="due">Przed opuszczeniem sieci wyloguj się z niej</p><br/>
            
    <p id="tre">lub ktoś niepowołany tu trafi !!!<span>|</span></p><br/> 
           <a href="siecoff.php"><span>Wyjdz z sieci</span></a>
            </div>
            <br/>
            <div class="binarka">
                <p class="bin">1010010101010101010001110101010101001010101010101000111010101001010101010101010101010101</p></div>
    </body>

</html>
