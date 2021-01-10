<?php


class Match
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var object
     */
    private $opponentA;

    /**
     * @var object
     */
    private $opponentB;

    /**
     * @var int
     */
    private $state;

    public const STATE_PENDING = 0;
    public const STATE_FINISHED = 1;
    public const STATE_CANCELLED = 2;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return object
     */
    public function getOpponentA(): object
    {
        return $this->opponentA;
    }

    /**
     * @param object $opponentA
     */
    public function setOpponentA(object $opponentA): void
    {
        $this->opponentA = $opponentA;
    }

    /**
     * @return object
     */
    public function getOpponentB(): object
    {
        return $this->opponentB;
    }

    /**
     * @param object $opponentB
     */
    public function setOpponentB(object $opponentB): void
    {
        $this->opponentB = $opponentB;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state): void
    {
        $this->state = $state;
    }




}