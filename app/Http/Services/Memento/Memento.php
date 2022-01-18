<?php

namespace App\Http\Services\Memento;

class Memento
{
    public $level;
    public $score;
    public $health;

    public function __construct(Player $player)
    {
        $this->level = $player->level;
        $this->score = $player->score;
        $this->health = $player->health;
    }
}
