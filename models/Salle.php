<?php



/**
 * Salle
 */
class Salle
{
    /**
     * @var int
     */
    private $idsalle;

    /**
     * @var string|null
     */
    private $numero;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $film;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->film = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idsalle.
     *
     * @return int
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set numero.
     *
     * @param string|null $numero
     *
     * @return Salle
     */
    public function setNumero($numero = null)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Add film.
     *
     * @param \session $film
     *
     * @return Salle
     */
    public function addFilm(\session $film)
    {
        $this->film[] = $film;

        return $this;
    }

    /**
     * Remove film.
     *
     * @param \session $film
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFilm(\session $film)
    {
        return $this->film->removeElement($film);
    }

    /**
     * Get film.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilm()
    {
        return $this->film;
    }
}
