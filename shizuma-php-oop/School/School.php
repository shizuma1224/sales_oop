<?php
    class School
    {
        public $name;
        public $yearlevel;
        public $unit;
        public $withlab;
        public $price;

        //CONSTRUCTOR
        public function __construct($new_name, $new_yearlevel, $new_unit, $new_withlab)
        {
            $this->name = $new_name;
            $this->yearlevel = $new_yearlevel;
            $this->unit = $new_unit;
            $this->withlab = $new_withlab;                        
        }

        //Setter
        public function setName($new_name)
        {
            $this->name = $new_name;
        }

        public function setYearLevel($new_yearlevel)
        {
            $this->yearlevel = $new_yearlevel;
        }

        public function setUnit($new_unit)
        {
            $this->unit = $new_unit;
        }

        private function setPrice()
        {
            //set price per unit
            if($this->yearlevel == 1)
            {
                $this->price = 550 * $this->unit;
                if($this->withlab == 1)
                {
                    $this->price += 3359;
                }
            }
            elseif($this->yearlevel == 2)
            {
                $this->price = 630 * $this->unit;
                if($this->withlab == 1)
                {
                    $this->price += 4000;
                }
                
            }
            elseif($this->yearlevel == 3)
            {
                $this->price = 470 * $this->unit;
                if($this->withlab == 1)
                {
                    $this->price += 2890;
                }
            }
            elseif($this->yearlevel == 4)
            {
                $this->price = 501 * $this->unit;
                if($this->withlab == 1)
                {
                    $this->price += 3555;
                }
            }    
        }

        //Getter
        public function getName()
        {
            return $this->name;
        }

        public function getYearLevel()
        {
            return $this->yearlevel;
        }

        public function getUnit()
        {
            return $this->unit;
        }

        public function getPrice()
        {
            $this->setPrice();
            return $this->price;
        }
    }

?>