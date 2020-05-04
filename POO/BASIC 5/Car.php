<?php

require_once ('Vehicle.php');

class Car extends Vehicle implements Lightable
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;
    /**
     * @var bool
     */
    private $hasParkBrake;

    /**
     * @var bool
     */
    protected $hasLight;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    /**
     * @return bool
     */
    public function switchOn() :bool
    {
        // TODO: Implement switchOn() method.
        return $this->hasLight = true;
    }

    /**
     * @return bool
     */
    public function switchOff() :bool
    {
        // TODO: Implement switchOff() method.
        return $this->hasLight = false;
    }

    /**
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /**
     * @return string
     */
    function start()
    {
        try{
            $this->getHasParkBrake() === true;
            throw new Exception("Homer t'as de nouveau oublié le frein à main !!!");

        }catch(Exception $e){$this->setHasParkBrake(true);} finally {
            echo "Ma voiture roule comme un donut";
            var_dump($e);
        }
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}