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
     * @var \eleve
     */
    private $eleve;

    /**
     * @var \session
     */
    private $session;


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

    /**
     * Set eleve.
     *
     * @param \eleve|null $eleve
     *
     * @return Participation
     */
    public function setEleve(\eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve.
     *
     * @return \eleve|null
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set session.
     *
     * @param \session|null $session
     *
     * @return Participation
     */
    public function setSession(\session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session.
     *
     * @return \session|null
     */
    public function getSession()
    {
        return $this->session;
    }
}
