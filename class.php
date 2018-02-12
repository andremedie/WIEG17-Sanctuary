<?php 
//print_r ($_POST);
abstract class Zoo {

    protected $image;
 
    public function draw() {
        echo "<img src='/bild/".$this->image."' class='zoo' onclick='alert(\"".$this->onClick()."\");' >";

    }

    public abstract function onClick();
    
    
}

abstract class Animals extends Zoo {
    protected $image;
 
    public function draw() {
        echo "<img src='/bild/".$this->image."' class='animals' onclick='alert(\"".$this->onClick()."\");' >";

    }

    public abstract function onClick();
    
}


abstract class Plants extends Zoo{

    protected $image;
    
    public function draw() {
        echo "<img src='/bild/".$this->image."' class='plants'>";

    }
}

class Apa extends Animals {
    
    protected $image = "apa.jpg";
    function onClick() {
        return "Ohahhwahha";
    }
    
}

class Tiger extends Animals {
    protected $image = "tiger.jpg";
    function onClick() {
        return "Raaaaawr";
    }
}

class Giraff extends Animals {
    protected $image = "giraff.jpg";
    function onClick() {
        return "Wooooohooo";
    }
}

class Horse extends Animals {
    protected $image = "horse.png";
    function onClick() {
        return "Yiii haaaa";
    }
}
class Coconut extends Plants {
    protected $image = "coconut.jpg";
   
    function onClick() {}
}

class Citrus extends Plants {
    protected $image = "citron.jpg";

    function onClick() {}
}


class Avocado extends Plants {
    protected $image = "avocado.jpg";
    function onClick() {}
}

class Banana extends Plants {
    protected $image = "banana.jpg";
    function onClick() {}
}