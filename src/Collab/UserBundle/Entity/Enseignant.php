<?php

namespace Collab\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Enseignant
 * @ORM\Entity
 * @ORM\Table(name="enseignant")
 * @UniqueEntity(fields = "username", targetClass = "Collab\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Collab\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Enseignant extends User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Enseignant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
