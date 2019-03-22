<?php



/**
 * Entreprise
 */
class Entreprise
{
    /**
     * @var int
     */
    private $identreprise;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eleve;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleve = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get identreprise.
     *
     * @return int
     */
    public function getIdentreprise()
    {
        return $this->identreprise;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Entreprise
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
     * Add eleve.
     *
     * @param \eleve $eleve
     *
     * @return Entreprise
     */
    public function addEleve(\eleve $eleve)
    {
        $this->eleve[] = $eleve;

        return $this;
    }

    /**
     * Remove eleve.
     *
     * @param \eleve $eleve
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEleve(\eleve $eleve)
    {
        return $this->eleve->removeElement($eleve);
    }

    /**
     * Get eleve.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleve()
    {
        return $this->eleve;
    }
}
