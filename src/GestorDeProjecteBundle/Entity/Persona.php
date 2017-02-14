<?php

namespace GestorDeProjecteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="GestorDeProjecteBundle\Repository\PersonaRepository")
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nif", type="string", length=10, unique=true)
     */
    private $nif;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

     /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognom", type="string", length=255)
     */
    private $cognom;

    /**
     * @var int
     *
     * @ORM\Column(name="Tipus", type="integer")
     */
    private $tipus;

    /**
     * @var int
     *
     * @ORM\Column(name="hores", type="integer")
     */
    private $hores;


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
     * Set nif
     *
     * @param string $nif
     *
     * @return Persona
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Persona
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cognom
     *
     * @param string $cognom
     *
     * @return Persona
     */
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get cognom
     *
     * @return string
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Set tipus
     *
     * @param integer $tipus
     *
     * @return Persona
     */
    public function setTipus($tipus)
    {
        $this->tipus = $tipus;

        return $this;
    }

    /**
     * Get tipus
     *
     * @return int
     */
    public function getTipus()
    {
        return $this->tipus;
    }

    /**
     * Set hores
     *
     * @param integer $hores
     *
     * @return Persona
     */
    public function setHores($hores)
    {
        $this->hores = $hores;

        return $this;
    }

    /**
     * Get hores
     *
     * @return integer
     */
    public function getHores()
    {
        return $this->hores;
    }
}
