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





}