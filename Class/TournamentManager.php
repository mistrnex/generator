<?php

/**
 * Main class for managing tournaments
 */
class TournamentManager
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $numberOfParticipants;

    /**
     * @var int
     */
    private $state;

    public const STATE_PLANNED = 0;
    public const STATE_PENDING = 1;
    public const STATE_FINISHED = 2;
    public const STATE_CANCELLED = 3;

    public function __construct(int $type, int $numberOfParticipants, object $participants)
    {
        $this->type = $type;
        $this->numberOfParticipants = $numberOfParticipants;
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
    public function getNumberOfParticipants(): int
    {
        return $this->numberOfParticipants;
    }

    /**
     * @param int $numberOfParticipants
     */
    public function setNumberOfParticipants(int $numberOfParticipants): void
    {
        $this->numberOfParticipants = $numberOfParticipants;
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

    /**
     * @param int $type
     * @param int $numberOfParticipants
     * @return object
     */
    public function generateTournament(int $type, int $numberOfParticipants) : object {

    }

    /**
     * @param object $tournament
     * @param object $participants
     * @param bool $randomize
     */
    public function assignParticipantsToTournament(object $tournament, object $participants, bool $randomize = false) {

    }


}