<?php

/**
 * Let's say we have a game board that can have many players on it. Each player
 * has it's own name and coordinates (x, y).
 * After creating players we want to run the game and see where players are.
 */

class Player {
    public function __construct($name, $x, $y) {
        $this->name = $name;
        $this->x = $x;
        $this->y = $y;
    }

    public function getName() {
        return $this->name;
    }

    public function getPosX() {
        return $this->x;
    }

    public function getPosY() {
        return $this->y;
    }
}

class GameBoard {
    public function __construct() {
        $this->players = array();
    }

    public function registerPlayer(Player $player) {
        $this->players[] = $player;
    }

    public function run() {
        foreach ($this->players as $player) {
            printf(
                "%s is on (%d, %d)\n",
                $player->getName(),
                $player->getPosX(),
                $player->getPosY());
        }
    }
}

class GameFactory {
    private static $gameBoard;

    public static function createBoard() {
        if (!GameFactory::$gameBoard) {
            GameFactory::$gameBoard = new GameBoard();
        }
        return GameFactory::$gameBoard;
    }

    public static function createPlayer($name, $x, $y) {
        $player = new Player($name, $x, $y);
        GameFactory::$gameBoard->registerPlayer($player);
        return $player;
    }
}

// Create and run our game
$board = GameFactory::createBoard();
$jim = GameFactory::createPlayer("Jim", 1, 0);
$bob = GameFactory::createPlayer("Bob", 10, 7);
$board->run();
