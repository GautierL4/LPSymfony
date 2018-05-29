<?php

namespace GL\HomeBundle\Entity;

/**
 * Rdv
 */
class Rdv
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $conseille;

    /**
     * @var int
     */
    private $candidat;

    /**
     * @var string
     */
    private $typeRDV;

    /**
     * @var string
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rdv
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set conseille
     *
     * @param integer $conseille
     *
     * @return Rdv
     */
    public function setConseille($conseille)
    {
        $this->conseille = $conseille;

        return $this;
    }

    /**
     * Get conseille
     *
     * @return int
     */
    public function getConseille()
    {
        return $this->conseille;
    }

    /**
     * Set candidat
     *
     * @param integer $candidat
     *
     * @return Rdv
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return int
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set typeRDV
     *
     * @param string $typeRDV
     *
     * @return Rdv
     */
    public function setTypeRDV($typeRDV)
    {
        $this->typeRDV = $typeRDV;

        return $this;
    }

    /**
     * Get typeRDV
     *
     * @return string
     */
    public function getTypeRDV()
    {
        return $this->typeRDV;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Rdv
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

