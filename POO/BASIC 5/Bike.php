<?php

require_once ('Vehicle.php');
class Bicycle extends Vehicle implements Lightable
{
    /**
     * @var bool
     */
    protected $hasLight;

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        if( $this->currentSpeed > 10) {
            return $this->hasLight = true;
        }
        else{return $this->hasLight = false;}
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return $this->hasLight = false;
    }
}