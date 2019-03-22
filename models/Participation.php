<?php



/**
 * Participation
 */
class Participation
{
    /**
     * @var int
     */
    private $idparticipation;

    /**
     * @var string|null
     */
    private $note;


    /**
     * Get idparticipation.
     *
     * @return int
     */
    public function getIdparticipation()
    {
        return $this->idparticipation;
    }

    /**
     * Set note.
     *
     * @param string|null $note
     *
     * @return Participation
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }
}
