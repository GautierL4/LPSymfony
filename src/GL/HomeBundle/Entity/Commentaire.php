<?php

namespace GL\HomeBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $corps;

    /**
     * @var int
     */
    private $commentairePere;

    /**
     * @var int
     */
    private $document;

    /**
     * @var int
     */
    private $conseiller;

    /**
     * @var int
     */
    private $candidat;

    /**
     * @var int
     */
    private $enfants;


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
     * Set corps
     *
     * @param string $corps
     *
     * @return Commentaire
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set commentairePere
     *
     * @param integer $commentairePere
     *
     * @return Commentaire
     */
    public function setCommentairePere($commentairePere)
    {
        $this->commentairePere = $commentairePere;

        return $this;
    }

    /**
     * Get commentairePere
     *
     * @return int
     */
    public function getCommentairePere()
    {
        return $this->commentairePere;
    }

    /**
     * Set document
     *
     * @param integer $document
     *
     * @return Commentaire
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return int
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set conseiller
     *
     * @param integer $conseiller
     *
     * @return Commentaire
     */
    public function setConseiller($conseiller)
    {
        $this->conseiller = $conseiller;

        return $this;
    }

    /**
     * Get conseiller
     *
     * @return int
     */
    public function getConseiller()
    {
        return $this->conseiller;
    }

    /**
     * Set candidat
     *
     * @param integer $candidat
     *
     * @return Commentaire
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
     * Set enfants
     *
     * @param integer $enfants
     *
     * @return Commentaire
     */
    public function setEnfants($enfants)
    {
        $this->enfants = $enfants;

        return $this;
    }

    /**
     * Get enfants
     *
     * @return int
     */
    public function getEnfants()
    {
        return $this->enfants;
    }
}

