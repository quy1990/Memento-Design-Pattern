<?php

namespace App\Http\Controllers;

use App\Http\Services\Memento\CareTaker;
use App\Http\Services\Memento\Player;

class GameController extends Controller
{

    public function index()
    {
        // player has completed level 1
        $player = new Player();
        $player->level = 1;
        $player->score = 100;
        $player->health = '100%';
        echo "\n ----------- Player info after completing level 1 ---------------------";
        $player->displayPlayerInfo();
        // when player completes any level then create checkpoint for that level.
        $careTaker = new CareTaker();
        $careTaker->levelMarker = $player->CreateMarker($player);

        // sleep is only added to show some delay..


        $player->level = 2;
        $player->score = 150;
        $player->health = '70%';
        echo "\n--------------- Player info in level 2 --------------------------------";
        $player->displayPlayerInfo();

        // if players loses all the lifeline then restore the game from level 1
        $player->restoreLevel($careTaker->levelMarker);
        echo "\n------------- Player info after restoring level 1 data ----------------";
        $player->displayPlayerInfo();
    }
}
