<?php

require 'Generator.php';

/**
 * Class GeneratorRobin generates single and double elimination tournaments
 */
class GeneratorElimination extends Generator
{
    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $numberOfRounds;

    /**
     * GeneratorElimination constructor.
     * @param int $type
     * @param int $numberOfRounds
     */
    public function __construct(int $type, int $numberOfRounds)
    {
        $this->type = $type;
        $this->numberOfRounds = $numberOfRounds;
    }

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
     * @param int $numberOfRounds
     * @param int $type
     */
    public function generatePlan(int $numberOfRounds, int $type)
    {

    }


}