<?PHP echo 3*5;?>
<br><br><br>
    <?PHP echo date ('H:i:s')?><br>
<br><br>
    <?PHP echo "čégo"?><br><br>
<?PHP 
$Jmeno ='Alex';
echo $Jmeno; 
$jmeno='Bárta';
echo $jmeno;?>
    <br><br><br>
<?PHP 
$cislo1 = 5;
$cislo2 = 4;
echo$cislo1 ?>
    <br><br>
    <?PHP
    $a = 5 ;
    $b = 4 ;
    echo$a+$b; 
    ?>
    <br><br>
<?PHP 
$a = 5 ;
$b = 4 ;
echo $a-$b; ?>
    <br><br>
    <?PHP 
    $a = 16;
    $b = 4;
    echo $a/$b; ?>
    <br><br>
    <?PHP 
    $a = 3;
    $b = 7;
      echo $a*$b;?>
    <br><br>
  
    <?PHP
    $a = 7 ;
    $a++;
    echo$a; 
    ?> 
    <br><br>
    <?PHP
    $a = 5 ;
    $a--;
    echo$a; 
    ?>  
    <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a+=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a-=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a*=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a/=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a==$b; ?>
 <br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a!=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a>$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a<$b; ?>
 <br><br>
 <?PHP 
    $a = 16;
    $b = 3;
    echo $a||$b; ?>
<br><br>
 <?PHP 
    $a = 4;
    $b = 4;
    echo $a && $b; ?>
<br><br><br>
<?PHP
$jmeno ="martin";

$jmena = array('martin','jan','franta','petr');

var_dump($jmena);
?>
<br><br><br>
<?PHP
$produkt=array ('nazev'=> 'notebook', 'typ'=> 'hp', 'váha'=> 3, 'množství'=> 5);
var_dump($produkt);
?>





<?PHP
$jmena = "marTa, Katka, jitkA, janA";
$jmena = str_replace(" ",",", $jmena);
var_dump($jmena);
$jmena= str_replace(",,", ",", $jmena);
var_dump($jmena);
$jmena= str_replace(",", " ", $jmena);
var_dump($jmena);
$jmena= strtolower($jmena);
var_dump($jmena);
$jmena= ucwords($jmena);
var_dump($jmena);
$jmena = str_replace(" ",",", $jmena);
var_dump($jmena);
$jmena= strchr($jmena, $produkt);
var_dump($jmena);
$jmena= strlen($jmena);
var_dump($jmena);
$jmena= strrchr($jmena, $produkt);
var_dump($jmena);
$jmena = ucwords($jmena);
var_dump($jmena);
$jmena = explore(" ", $jmena);
var_dump($jmena);

?>

<?PHP
echo currency(10000.666, "$", 2);
echo "<br>";
echo czrency(15000.420);


/**
 * @todo Vypocita cenu
 * @param float $price Cena k formatovani
 * @param string $currency
 * @param int $precision
 * @return string
 */
function currency($price,$currency = "USD" , $precision = 2)  {
    $price = round($price, $precision);
    $price = number_format($price. $precision)." ,-".$currency;
    
   return $price;
}
