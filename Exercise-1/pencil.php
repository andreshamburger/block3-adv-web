<!-- pencil: length, color, sharpeness, eraser -->

<?php

class Pencil
{
    private $length;
    private $color;
    private $sharpness;
    private $eraser;

    public function __construct($length, $color, $sharpness, $eraser)
    {
        $this->length = $length;
        $this->color = $color;
        $this->sharpness = $sharpness;
        $this->eraser = $eraser;
    }

    public function getLength()
    {
        return $this->length >= 5; // Here we are checking if the length is long enough (scaled from 1 to 10)
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getSharpness()
    {
        return $this->sharpness >= 5; // here we are checking if the sharpness is sharp enough (scaled from 1 to 10)
    }

    public function sharpen()
    {
        $this->sharpness = 10;
    }

    public function hasEraser()
    {
        return $this->eraser;
    }
}

$pencil1 = new Pencil(7, "yellow", 8, true);
echo "Pencil1 length: " . ($pencil1->getLength() ? "Long enough" : "Too short") . "<br>";
echo "Pencil1 color: " . $pencil1->getColor() . "<br>";
echo "Pencil1 sharpness: " . ($pencil1->getSharpness() ? "Sharpened" : "Needs sharpening") . "<br>";
echo "Pencil1 has eraser: " . ($pencil1->hasEraser() ? "Yes" : "No") . "<br><br>";

$pencil2 = new pencil(4, "blue", 2, false);
echo "Pencil2 length: " . ($pencil2->getLength() ? "Long enough" : "Too short") . "<br>";
echo "Pencil2 color: " . $pencil2->getColor() . "<br>";
echo "Pencil2 sharpness: " . ($pencil2->getSharpness() ? "Sharpened" : "Needs sharpening") . "<br>";
echo "Pencil2 has eraser: " . ($pencil2->hasEraser() ? "Yes" : "No") . "<br>";
