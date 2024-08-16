<?php


class Player {
    public $name;
    public $coins;
    public function __construct($name, $coins)
    {
        $this->name = $name;
        $this->$coins = $coins;
    }
}
class Game {
    protected $player1;
    protected $player2;

    public function __construct(Player $player1, Player2 $player2)
    {
        $this->$player1 =  $player1;
        $this->$player2 =  $player2;
    }


}

    while (true) {
        $flip = rand(0, 1) ? "орёл" : "решка";

        if($flip == "орёл") {
             $this->player1->coins++;
             $this->player2->coins--;
        } else {
             $this->player1->coins++;
             $this->player2->coins--;

        }
    }
        if($this->player1->coins == 0 || $this->player2->coins == 0) {
        return $this->end();
        }
    
    
        function winner()
        {
            if($this->player1->coins > $this->player2->coins) {
                return $this->player1;
            } else {
                return $this->player1;
            }
        }
    
    
    
        function end()
    
    {
        echo <<<EOT
            Game over.

            Победитель: {$this->winner()}

        EOT;
    }

$game = new Game(
    new Player("Joe", 100),
    new Player("Jane", 100)
);

$game->start();