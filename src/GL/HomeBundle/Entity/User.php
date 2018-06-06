<?php

namespace GL\HomeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 * 
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

    public function __construct(){
        parent::__construct();

        $this->messagesEnvoye = new ArrayCollection();
        $this->messagesRecu = new ArrayCollection();
    }

     
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getMessageEnvoye(){
        return $this->messageEnvoye;
    }

    public function getMessageRecu(){
        return $this->messageRecu;
    }

    public function getNotifications(){
        return $this->notifications;
    }


    /**
     * Add messagesEnvoye
     *
     * @param \GL\HomeBundle\Entity\Message $messagesEnvoye
     *
     * @return User
     */
    public function addMessagesEnvoye(\GL\HomeBundle\Entity\Message $messagesEnvoye)
    {
        $this->messagesEnvoye[] = $messagesEnvoye;

        return $this;
    }

    /**
     * Remove messagesEnvoye
     *
     * @param \GL\HomeBundle\Entity\Message $messagesEnvoye
     */
    public function removeMessagesEnvoye(\GL\HomeBundle\Entity\Message $messagesEnvoye)
    {
        $this->messagesEnvoye->removeElement($messagesEnvoye);
    }

    /**
     * Get messagesEnvoye
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesEnvoye()
    {
        return $this->messagesEnvoye;
    }

    /**
     * Add messagesRecu
     *
     * @param \GL\HomeBundle\Entity\Message $messagesRecu
     *
     * @return User
     */
    public function addMessagesRecu(\GL\HomeBundle\Entity\Message $messagesRecu)
    {
        $this->messagesRecu[] = $messagesRecu;

        return $this;
    }

    /**
     * Remove messagesRecu
     *
     * @param \GL\HomeBundle\Entity\Message $messagesRecu
     */
    public function removeMessagesRecu(\GL\HomeBundle\Entity\Message $messagesRecu)
    {
        $this->messagesRecu->removeElement($messagesRecu);
    }

    /**
     * Get messagesRecu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesRecu()
    {
        return $this->messagesRecu;
    }

    /**
     * Add notification
     *
     * @param \GL\HomeBundle\Entity\Notification $notification
     *
     * @return User
     */
    public function addNotification(\GL\HomeBundle\Entity\Notification $notification)
    {
        $this->notifications[] = $notification;

        return $this;
    }

    /**
     * Remove notification
     *
     * @param \GL\HomeBundle\Entity\Notification $notification
     */
    public function removeNotification(\GL\HomeBundle\Entity\Notification $notification)
    {
        $this->notifications->removeElement($notification);
    }
}
