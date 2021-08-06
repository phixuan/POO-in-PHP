<?php
declare( strict_types = 1);
include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas() : int{
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {
    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad . " personas y no usa gasolina";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 2);

echo ($bicicleta->getInfo());
echo ("<hr>");
echo ($bicicleta->getRuedas());


$auto = new Automovil(4, 5, "Manual");
echo ("<hr>");
echo ($auto->getInfo());
echo ("<hr>");
echo ($auto->getTransmision());

include 'includes/footer.php';