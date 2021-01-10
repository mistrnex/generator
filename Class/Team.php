<?php


class Team
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numberOfPlayers;

    /**
     * @var object
     */
    public $joinedPlayers;

    /**
     * Team constructor.
     * @param int $numberOfPlayers
     */
    public function __construct(int $numberOfPlayers)
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getNumberOfPlayers(): int
    {
        return $this->numberOfPlayers;
    }

    /**
     * @param int $numberOfPlayers
     */
    public function setNumberOfPlayers(int $numberOfPlayers): void
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }

    /**
     * @return object
     */
    public function getJoinedPlayers(): object
    {
        return $this->joinedPlayers;
    }

    /**
     * @param object $joinedPlayers
     */
    public function setJoinedPlayers(object $joinedPlayers): void
    {
        $this->joinedPlayers = $joinedPlayers;
    }

    /**
     * @param object $player
     */
    public function joinPlayer(object $player) {

    }







}