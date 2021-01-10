<?php

require 'Generator.php';

/**
 * Class GeneratorOpen generates one round of Swiss Open tournament
 */
class GeneratorOpen extends Generator
{
    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $numberOfMatches;

    /**
     * @var array
     */
    private $generationCriteria;

    /**
     * GeneratorOpen constructor.
     * @param int $type
     * @param int $numberOfMatches
     */
    public function __construct(int $type, int $numberOfMatches)
    {
        $this->type = $type;
        $this->numberOfMatches = $numberOfMatches;
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
    public function getNumberOfMatches(): int
    {
        return $this->numberOfMatches;
    }

    /**
     * @param int $numberOfMatches
     */
    public function setNumberOfMatches(int $numberOfMatches): void
    {
        $this->numberOfMatches = $numberOfMatches;
    }

    /**
     * @param int $numberOfRounds
     * @param int $type
     */
    public function generatePlan(int $numberOfRounds, int $type)
    {

    }


}