<?php

namespace Ahs\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User exteds Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_username", type="string", length=45)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_created", type="datetimetz")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_modified", type="datetimetz")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_deleted", type="datetimetz")
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_locked", type="datetimetz")
     */
    private $locked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_lastlogin", type="datetimetz")
     */
    private $lastlogin;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return User
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return User
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set locked
     *
     * @param \DateTime $locked
     * @return User
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return \DateTime 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set lastlogin
     *
     * @param \DateTime $lastlogin
     * @return User
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;
    
        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return \DateTime 
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }
}
