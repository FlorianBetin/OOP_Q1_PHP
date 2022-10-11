<?php

class Bicycle 
{
    
    private int $nbWheels = 2;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats = 1;

    private bool $hasLuggageRack;
    

// Constructeur

public function __construct(string $color)
{
    $this->color = $color;
}

    // Setter and Getter

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

// Fonction d'action


    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
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

}