<?php

class Cars {

    private int $nbwheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


// Constructeur

public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}


// Actions

public function forward(): string
    {
        $this->currentSpeed = $this->getCurrentSpeed();
    
        return "J'ai plus de carbu !!";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function start(): string
    {   
        $startSentence = "";
        while($this->currentSpeed < $this->getEnergyLevel()) {
            $this->currentSpeed ++;
            $startSentence .= "J'accelère !";
        }

        return $startSentence;
    }

// Set and get

    public function setNbwheels($nbwheels)
    {
        $this->nbwheels = $nbwheels;

        return $this;
    }

    public function getNbwheels()
    {
        return $this->nbwheels;
    }


    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }



}