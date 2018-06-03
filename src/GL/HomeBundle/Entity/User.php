<?php

namespace GL\HomeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * 
 * @ORM\Table(name="patient")
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    private $messagesEnvoye;

    private $messagesRecu;

    private $notifications;

     
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}

