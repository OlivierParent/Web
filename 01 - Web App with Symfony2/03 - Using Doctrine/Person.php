<?php

namespace Ahs\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person (Class Table Inheritance Pattern)
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="person_type", type="string")
 * @ORM\DiscriminatorMap({"PERSON" = "Person", "USER" = "User"})
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="person_firstname", type="string", length=255)
     */
    private $givenname;

    /**
     * @var string
     *
     * @ORM\Column(name="person_surname", type="string", length=255)
     */
    private $familyname;

    /**
     * @var string
     *
     * @ORM\Column(name="person_profile", type="text")
     */
    private $profile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="person_created", type="datetimetz")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="person_modified", type="datetimetz")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="person_deleted", type="datetimetz")
     */
    private $deleted;


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
     * Set givenname
     *
     * @param string $givenname
     * @return User
     */
    public function setGivenname($givenname)
    {
        $this->givenname = $givenname;
    
        return $this;
    }

    /**
     * Get givenname
     *
     * @return string 
     */
    public function getGivenname()
    {
        return $this->givenname;
    }

    /**
     * Set familyname
     *
     * @param string $familyname
     * @return User
     */
    public function setFamilyname($familyname)
    {
        $this->familyname = $familyname;
    
        return $this;
    }

    /**
     * Get familyname
     *
     * @return string 
     */
    public function getFamilyname()
    {
        return $this->familyname;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return User
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    
        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
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
}
