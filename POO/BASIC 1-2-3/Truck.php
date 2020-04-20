<?php


// Truck.php

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'];

    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var integer
     */
    private $loading;
    /**
     * @var string
     */
    private $energy;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->storageCapacity = $storageCapacity;
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
    public function load(): string
    {
        $message = '';
        if($this->loading < $this->storageCapacity) {
            $message = 'in filling';
        }elseif($this->loading == $this->storageCapacity){
            $message = 'full';
        }
        return $message;
    }
    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

}