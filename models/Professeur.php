<?php



/**
 * Professeur
 */
class Professeur
{
    /**
     * @var int
     */
    private $idprofesseur;

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
    private $formation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idprofesseur.
     *
     * @return int
     */
    public function getIdprofesseur()
    {
        return $this->idprofesseur;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Professeur
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
     * @return Professeur
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
     * Add formation.
     *
     * @param \formation $formation
     *
     * @return Professeur
     */
    public function addFormation(\formation $formation)
    {
        $this->formation[] = $formation;

        return $this;
    }

    /**
     * Remove formation.
     *
     * @param \formation $formation
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFormation(\formation $formation)
    {
        return $this->formation->removeElement($formation);
    }

    /**
     * Get formation.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Add session.
     *
     * @param \session $session
     *
     * @return Professeur
     */
    public function addSession(\session $session)
    {
        $this->session[] = $session;

        return $this;
    }

    /**
     * Remove session.
     *
     * @param \session $session
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSession(\session $session)
    {
        return $this->session->removeElement($session);
    }

    /**
     * Get session.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSession()
    {
        return $this->session;
    }
}
