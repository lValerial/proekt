<?php
class window  // 1 объект окно
{
    private $size;
    private $manufacturer;


function __construct($size,$manufacturer)
        {
            $this->size=$size;
            $this->manufacturer=$manufacturer;


        }
        public  function getSize()
        {
          return $this->size;

        }
    public  function getManufacturer()
    {
        return $this->manufacturer;

    }

    public function getInfo()
    {
        return"{$this->size}" . "{$this->manufacturer}" ;
    }

}
$window = new window(90.60, "VEKA");
echo "Размер -" . $window->getSize();
echo "<br>";
echo "Производитель -" . $window->getManufacturer();



class painting // 2 объект картина
{
    private $size;
    private $image;
 function __construct($size,$image)
 {
     $this->size=$size;
     $this->image=$image;
 }
 public function getSize()
 {
     return $this->size;
 }
    public function getImage()
    {
        return $this->image;
    }
    public function getInfo()
    {
        return"{$this->size}" . "{$this->image}" ;
    }
}
$painting = new painting(30.40, "dog");
echo "Размер -" . $painting->getSize();
echo "<br>";
echo "Изображение -" . $painting->getImage();

class thermos // 3 объект термос
{
    private $manufacturer;
    private $capacity;
    function __construct($manufacturer,$capacity)
    {
        $this->manufacturer=$manufacturer;
        $this->capacity=$capacity;
    }
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function getCapacity()
    {
        return $this->capacity;
    }
    public function getInfo()
    {
        return"{$this->manufacturer}" . "{$this->capacity}" ;
    }
}
$thermos = new thermos("Stanley", 1.5);
echo "Производитель -" . $thermos->getManufacturer();
echo "<br>";
echo "Вместимость(л.)-" . $thermos->getCapacity();

class electric_toothbrush // 4 объект электрическая зубная щетка
{
    private $manufacturer;
    private $cord220;
    function __construct($manufacturer,$cord220)
    {
        $this->manufacturer=$manufacturer;
        $this->cord220=$cord220;
    }
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function getCord220()
    {
        return $this->cord220;
    }
    public function getInfo()
    {
        return"{$this->manufacturer}" . "{$this->cord220}" ;
    }
}
$electric_toothbrush= new electric_toothbrush ("Oral-B", "there is");
echo "Производитель -" . $electric_toothbrush->getManufacturer();
echo "<br>";
echo "Наличие шнура 220-" . $electric_toothbrush->getCord220();

class chain // 5 объект чайник
{
    private $manufacturer;
    private $capacity;
    function __construct($manufacturer,$capacity)
    {
        $this->manufacturer=$manufacturer;
        $this->capacity=$capacity;
    }
    public function getManufacturer()
    {
        return $this->manufacturer;

    }
    public function getCapacity()
    {
        return $this->capacity;

    }
    public function getInfo()
    {
        return"{$this->manufacturer}" . "{$this->capacity}" ;
    }
}
$chain = new chain("Bosch", 3);
echo "Производитель -" . $chain->getManufacturer();
echo "<br>";
echo "Вместимость(л.)-" . $chain->getCapacity();
