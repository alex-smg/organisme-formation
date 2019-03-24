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
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add session.
     *
     * @param \session $session
     *
     * @return Salle
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
