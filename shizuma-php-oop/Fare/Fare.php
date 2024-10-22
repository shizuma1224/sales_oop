<?php
    class Fare
    {
        public $age;
        public $distance;
        public $fare;

        public function __construct($new_age, $new_distance)
        {
            $this->age = $new_age;
            $this->distance = $new_distance;
            $this->fare = 8;
        }

        //Setter
        public function setAge($new_age)
        {
            $this->age = $new_age;
        }

        public function setDistance($new_distance)
        {
            $this->distance = $new_distance;
        }

        public function setFare()
        {
            if ($this->distance <= 4)
            {
                $this->fare = 8;
            }
            elseif ($this->distance > 4)
            {
                $this->fare = $this->distance + 4;
            }

            if($this->age >= 60) 
            {
                $this->fare = $this->fare * 0.8;
            }
        }

        //Getter
        public function getAge()
        {
            return $this->age;
        }

        public function getDistance()
        {
            return $this->distance;
        }

        public function getFare()
        {
            return $this->fare;
        }
    }

?>

