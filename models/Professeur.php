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
}
