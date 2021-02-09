<!DOCTYPE html>

<?php 

$tulos = null;

if 
(isset($_POST) and 
isset($_POST['luku1']) and 
isset($_POST['luku2']) and 
isset($_POST['operaattori']))
  {
    if($_POST['operaattori'] == '-') {
        $tulos = $_POST['luku1'] - $_POST['luku2'];
    }
    if($_POST['operaattori'] == '+') {
        $tulos = $_POST['luku1'] + $_POST['luku2'];
    }
    if($_POST['operaattori'] == 'x') {
        $tulos = $_POST['luku1'] * $_POST['luku2'];
    }
    if($_POST['operaattori'] == '/') {
        $tulos = $_POST['luku1'] / $_POST['luku2'];
    }
     
    }  
elseif
(!isset($_POST) and 
isset($_POST['input1']) and 
isset($_POST['input2']) and 
isset($_POST['operation']))
{  
$tulos = 'INVALID_INPUT';
}

if ($tulos !== null)

?>


<html>

    <body>
        <form action="laskin.php" method="post">
        Syötä numero: <input type="number" name="luku1">
        <select name="operaattori" id="operaattori" >
            <option value="+">+</option>
             <option value="-">-</option>
             <option value="x">x</option>
              <option value="/">/</option>
        </select><input type="number" name="luku2"><?php if(isset($tulos)) {echo " = $tulos"; } ?><br>
        <input type="submit" value="Laske">
        </form>


    </body>
</html>
