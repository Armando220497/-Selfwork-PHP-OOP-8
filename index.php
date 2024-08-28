<?php

trait Calculator
{

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

    public function sqr($a)
    {
        return sqrt($a);
    }
}

class Rettangolo
{
    use Calculator;

    public $altezza;
    public $base;

    public function __construct($a, $b)
    {
        $this->altezza = $a;
        $this->base = $b;
    }

    public function area()
    {
        return $this->mul($this->base, $this->altezza);
    }

    public function perimetro()
    {
        return 2 * $this->sum($this->base, $this->altezza);
    }

    public function diagonale()
    {
        $sumRadice = $this->sum($this->mul($this->altezza, $this->altezza), $this->mul($this->base, $this->base));
        return $this->sqr($sumRadice);
    }
}

$rettangolo = new Rettangolo(20, 10);

echo "Area = " . $rettangolo->area() . "\n";

echo "Perimetro = " . $rettangolo->perimetro() . "\n";

echo "Diagonale= " . $rettangolo->diagonale() . "\n";
