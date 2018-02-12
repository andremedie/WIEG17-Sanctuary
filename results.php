<div><a href='sessiondestroy.php'>DÖDA SESSION😰</a></div>
<?php 
session_start();

include "class.php";


if(!empty($_POST)){
    $_SESSION['apa'] = $_POST['apa'];
    $_SESSION['tiger'] = $_POST['tiger'];
    $_SESSION['giraff'] = $_POST['giraff'];
    $_SESSION['coconut'] = $_POST['coconut'];
    $_SESSION['horse'] = $_POST['horse'];
    $_SESSION['citrus'] = $_POST['citrus'];
    $_SESSION['avocado'] = $_POST['avocado'];
    $_SESSION['banana'] = $_POST['banana'];
}

//print_r($_POST);

for($x = 0; $x < $_SESSION['apa']; $x++){
    $apa = new Apa();
   $apa -> draw();
}

for($x = 0; $x < $_SESSION['tiger']; $x++){
    $tiger = new Tiger();
   $tiger -> draw();
}

for($x = 0; $x < $_SESSION['giraff']; $x++){
    $giraff = new Giraff();
   $giraff -> draw();
}

for($x = 0; $x < $_SESSION['coconut']; $x++){
    $coconuts = new Coconut();
   $coconuts -> draw();
}

for($x = 0; $x < $_SESSION['horse']; $x++){
    $horse = new Horse();
    $horse -> draw();
}

for($x = 0; $x < $_SESSION['citrus']; $x++){
    $citrus = new Citrus();
    $citrus -> draw();
}

for($x = 0; $x < $_SESSION['avocado']; $x++){
    $avocado = new Avocado();
    $avocado -> draw();
}

for ($x = 0; $x < $_SESSION['banana']; $x++){
    $banana = new Banana();
    $banana -> draw();
}
?>



<!--

// for($x = 0; $x < $_POST['tiger'])



// print_r ($_POST);
// abstract class Inhabitant {

//     protected $image;
 
//     public function draw() {
//         echo "<img src='/bild/".$this->image."' class='inhabitant' onclick='alert(\"".$this->onClick()."\");' >";

//     }

//     public abstract function onClick();
    
//     // function __construct($conAnimal) {
//     //     $this->Animal = $conAnimal;
//     // }
    
//     // function setAnimal($newAnimal) {
//     //     $this->Animal = $newAnimal;
//     // }
//     // function getAnimal() {
//     //     return $this->Animal;
//     // }
    
// }

// class Apa extends Inhabitant {

//     protected $image = "apa.jpg";
//     function onClick() {
//         return "Ohahhwahha";
//     }
//     // $apa = new Inhabitant("<div><img src='/bild/apa.jpg'/></div>");
// }
 
// class Tiger extends Inhabitant {
//     protected $image = "tiger.jpg";
// function onClick() {
//     return "Raaaaawr";
// }
// }
 
// //  class Plant extends Inhabitant {
// //      function __construct($plant){
// //          $this->setAnimal($plant);
// //         }
// //     }
    
    
// //     $giraff = new Inhabitant("<div><img src='/bild/giraff.jpg'/></div>");
// //     $tiger = new Inhabitant("<div><img src='/bild/tiger.jpg'/></div>");
// //     $coconuts = new Plant("<div><img src='/bild/coconut.jpg'/></div>");
    


//     // for($x = 0; $x < $_POST['apa']{
//     //     draw()
//     // })

//     //echo "apa" . $apa->getAnimal();
//     //echo "giraff" . $giraff->getAnimal();
//     //echo "Tiger" . $tiger->getAnimal();
//     //echo "Kokosnöt" . $coconuts->getAnimal();
    
//     // if ( $_SERVER["REQUEST_METHOD"] == 'GET') {
//     //     $Animal = $_GET['apa'];
//     //     $Animal = $_GET['giraff'];
//     //     $Animal = $_GET['tiger'];
//     //     $Animal = $_GET['coconut'];
//     //     if (empty($Animal)) {
//     //         echo "Oooops, inga djur valda ännu!";
//     //         print_r ($Animal);
//     //     } else {
//     //         echo $_POST;
//     //         echo $apa;
//     //         echo $giraff;
//     //         echo $tiger;
//     //         echo $coconuts;
            
            

//     // } 
//     //} 
    

//     abstract class Animal {
//         abstract function makeSound();
//     }

//     ?> 