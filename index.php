<html>
    <head><h1> Naturreservatet 🐒 🐴 🐶 🐨</h1>
    <a href="index.php">START</a> <--->     
    <a href="results.php">Formulär</a>
    </head>
        <body>
            <div>Djuren i naturreservatet håller på att ta slut😱 men som tur är kan du beställa in nya djur ifrån oss;</div>
            <div>Hur många djur vill Du ska finnas i naturreservatet?<br/></div>
           <?php //include("results.php"); ?> 
           
           <?php

echo "<form action='results.php' METHOD='POST'>";

echo "<div>Djur:</div>";

echo "<input type='number' name='apa'>Apor<br/>";

echo "<input type='number' name='giraff'>Giraffer<br/>";

echo "<input type='number' name='tiger'>Tigrar<br/>";

echo "<input type='number' name='horse'>Hästar<br/>";

echo "<p>Växter/Frukt:</p>";

echo "<input type='number' name='coconut'>Coconutz<br/>";

echo "<input type='number' name='citrus'>Citroner<br/>";

echo "<input type='number' name='avocado'>Avokadoz<br/>";

echo "<input type='number' name='banana'>Bananaz<br/>";





echo "<input type='submit' value='Submit'>";
//myCoolLoop(0, count($myFilms), $myFilms);

echo     "</form>";







//lass Apa extends Inhabitant 
?>

</body>
</html>
