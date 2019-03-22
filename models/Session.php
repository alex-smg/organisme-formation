<?php



/**
 * Session
 */
class Session
{
    /**
     * @var int
     */
    private $idsession;

    /**
     * @var \DateTime|null
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     */
    private $dateFin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participation;

    /**
     * @var \salle
     */
    private $salle;

    /**
     * @var \professeur
     */
    private $professeur;

    /**
     * @var \formation
     */
    private $formation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idsession.
     *
     * @return int
     */
    public function getIdsession()
    {
        return $this->idsession;
    }

    /**
     * Set dateDebut.
     *
     * @param \DateTime|null $dateDebut
     *
     * @return Session
     */
    public function setDateDebut($dateDebut = null)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut.
     *
     * @return \DateTime|null
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin.
     *
     * @param \DateTime|null $dateFin
     *
     * @return Session
     */
    public function setDateFin($dateFin = null)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin.
     *
     * @return \DateTime|null
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Add participation.
     *
     * @param \participation $participation
     *
     * @return Session
     */
    public function addParticipation(\participation $participation)
    {
        $this->participation[] = $participation;

        return $this;
    }

    /**
     * Remove participation.
     *
     * @param \participation $participation
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeParticipation(\participation $participation)
    {
        return $this->participation->removeElement($participation);
    }

    /**
     * Get participation.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * Set salle.
     *
     * @param \salle|null $salle
     *
     * @return Session
     */
    public function setSalle(\salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle.
     *
     * @return \salle|null
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set professeur.
     *
     * @param \professeur|null $professeur
     *
     * @return Session
     */
    public function setProfesseur(\professeur $professeur = null)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get professeur.
     *
     * @return \professeur|null
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * Set formation.
     *
     * @param \formation|null $formation
     *
     * @return Session
     */
    public function setFormation(\formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation.
     *
     * @return \formation|null
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
