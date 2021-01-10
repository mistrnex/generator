<?php


Abstract class Generator
{

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $numberOfRounds;

    public const TYPE_ROUND_ROBIN = 0;
    public const TYPE_DOUBLE_ROUND_ROBIN = 1;
    public const TYPE_SINGLE_ELIMINATION = 2;
    public const TYPE_DOUBLE_ELIMINATION = 3;
    public const TYPE_OPEN = 4;

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNumberOfRounds(): int
    {
        return $this->numberOfRounds;
    }

    /**
     * @param int $numberOfRounds
     */
    public function setNumberOfRounds(int $numberOfRounds): void
    {
        $this->numberOfRounds = $numberOfRounds;
    }

    /**
     * General function for generating all possible rounds according to given $type and $numberOfRounds
     *
     * @param int $numberOfRounds
     * @param int $type
     */
    public function generatePlan(int $numberOfRounds, int $type){

    }

}