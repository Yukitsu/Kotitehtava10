<!DOCTYPE html>



<html>

    <body>
        <form action="silmukkalaskin.php" method="post">
        Syötä numero: <input type="number" name="luku1">
        <input type="submit" value="Näytä kertotaulu">
        </form>
        
<?php 
   if(isset($_POST) and isset($_POST['luku1'])) {
       for ($i = 1; $i <= 10; $i++)  {
         echo $i * $_POST['luku1'] . "<br>";
        }
   }  


?>



    </body>
</html>
