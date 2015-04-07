<?php

namespace Collab\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Collab\GeneralBundle\Entity\SujetRepository")
 */
class Sujet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return Sujet
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

    /**
     * Set description
     *
     * @param string $description
     * @return Sujet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="date")
     */
    private $date_ajout;

    /**
     * Set date_ajout
     *
     * @param \DateTime $date_ajout
     * @return Sujet
     */
    public function setDateAjout($date_ajout)
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    /**
     * Get date_ajout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->date_ajout;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="filiere", type="string", length=255)
     */
    private $filiere;


    /**
     * Set filiere
     *
     * @param string $filiere
     * @return Sujet
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string
     */
    public function getFiliere()
    {
        return $this->filiere;
    }


}


