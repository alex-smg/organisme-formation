<?php



/**
 * Eleve
 */
class Eleve
{
    /**
     * @var int
     */
    private $ideleve;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participation;

    /**
     * @var \entreprise
     */
    private $entreprise;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get ideleve.
     *
     * @return int
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Eleve
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string|null $prenom
     *
     * @return Eleve
     */
    public function setPrenom($prenom = null)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string|null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add participation.
     *
     * @param \participation $participation
     *
     * @return Eleve
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
     * Set entreprise.
     *
     * @param \entreprise|null $entreprise
     *
     * @return Eleve
     */
    public function setEntreprise(\entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise.
     *
     * @return \entreprise|null
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
