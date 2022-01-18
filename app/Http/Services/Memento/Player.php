<?php

namespace App\Http\Services\Memento;

class Player
{

    public $level;
    public $score;
    public $health;
    public $lifeline = 3;

    public function CreateMarker(Player $player): Memento
    {
        return new Memento($player);
    }

    public function RestoreLevel(Memento $playerMemento): void
    {
        $this->level = $playerMemento->level;
        $this->score = $playerMemento->score;
        $this->health = $playerMemento->health;
        --$this->lifeline;
    }

    public function displayPlayerInfo(): void
    {
        echo "\nLevel: " . $this->level;
        echo "\ncore: " . $this->score;
        echo "\nhealth: " . $this->health;
        echo "\nlifeline: " . $this->lifeline;
    }
}
