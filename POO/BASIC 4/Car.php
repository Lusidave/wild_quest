<?php

class Car
{
    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var integer
     */
    private $currentSpeed = 50;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel = 50;

    /**
     * @var bool
     */
    private $hasParkBrake;

    /**
     * CONSTRUCTOR
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * METHODS
     * @throws Exception
     */

    public function start()
    {
        if(is_bool($this->hasParkBrake)) {
            return 'Ma voiture roule comme un donut';
        } else {
            throw new Exception('Incorrect value for hasParkBrake');
        }
    }


    public function forward()
    {
        $this->currentSpeed;
        return "Go !";
    }

    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }



    /**
     * GETTERS
     */

    /**
     * @return int
     */
    public function getNbWheels():int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor():string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats():int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy():string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    /**
     * SETTERS
     * @param bool $hasParkBrake
     */

    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /**
     * @param string $nbWheels
     * @return void
     */
    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if( $currentSpeed >= 0 ){
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @param int $nbSeats
     * @return void
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @param string $energy
     * @return void
     */
    public function setEnergy(string $energy): void
    {
        if( $energy === "gazoil" || $energy === "electricity" || $energy === "gas" )
        {
            $this->color = $energy;
        }

    }

    /**
     * @param int $energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        if( $energyLevel >= 0 && $energyLevel <= 100)
        {
            $this->energyLevel = $energyLevel;
        }
    }
}
