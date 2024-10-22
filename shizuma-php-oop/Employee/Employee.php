<?php
    class Employee
    {
        //PROPERTIES
        public $name;
        public $civil_status;
        public $position;
        public $employment_status;
        public $regular_hours;
        public $ot_hours;

        //CONSTRUCTOR
        public function __construct($new_name, $new_civil_status, $new_position, $new_employment_status, $new_regular_hours, $new_ot_hours)
        {
            $this->name = $new_name;
            $this->civil_status = $new_civil_status;
            $this->position = $new_position;
            $this->employment_status = $new_employment_status;
            $this->regular_hours = $new_regular_hours;
            $this->ot_hours = $new_ot_hours;
        }

        //GETTER
        public function getName()
        {
            return $this->name;
        }

        public function getCivilStatus()
        {
            return $this->name;
        }

        public function getPosition()
        {
            return $this->name;
        }

        public function getEmployeeStatus()
        {
            return $this->name;
        }

        public function getRegularHours()
        {
            return $this->name;
        }

        public function getOTHours()
        {
            return $this->name;
        }


        //CALCULATION rossIncome
        public function calGrossIncome()
        {
            $this->calRegularPay;
            $this->calOvertimePay;
            
            //frossincome = regular pay + overtime pay
        }

        //CALCULATION REGULAR PAY
        public function calRegularPay()
        {
            if($this->position == 1) //admin
            {
                if($this->employment_status == 1)
                {
                    $this->calRegularPay = 350/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 2)
                {
                    $this->calRegularPay = 400/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 3)
                {
                    $this->calRegularPay = 500/8 * $this->regular_hours;
                }
            }
            elseif($this->position == 2) //staff
            {
                if($this->employment_status == 1)
                {
                    $this->calRegularPay = 300/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 2)
                {
                    $this->calRegularPay = 350/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 3)
                {
                    $this->calRegularPay = 400/8 * $this->regular_hours;
                }

            }
        }

        //CALCULATION OVERTIME PAY
        public function calOvertimePay()
        {
            if($this->position == 1) //admin
            {
                if($this->employment_status == 1)
                {
                    $this->OvertimePay = 350/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 2)
                {
                    $this->OvertimePay = 400/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 3)
                {
                    $this->OvertimePay = 500/8 * $this->regular_hours;
                }
            }
            elseif($this->position == 2) //staff
            {
                if($this->employment_status == 1)
                {
                    $this->OvertimePay = 300/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 2)
                {
                    $this->OvertimePay = 350/8 * $this->regular_hours;
                }
                elseif($this->employment_status == 3)
                {
                    $this->OvertimePay = 400/8 * $this->regular_hours;
                }

            }
        }

    }

?>