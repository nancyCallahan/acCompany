<?php

namespace GestorDeProjecteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasca
 *
 * @ORM\Table(name="tasca")
 * @ORM\Entity(repositoryClass="GestorDeProjecteBundle\Repository\TascaRepository")
 */
class Tasca
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
     * @ORM\Column(name="nif_persona", type="string", length=10, unique=true)
     */
    private $nifPersona;

    /**
     * @var int
     *
     * @ORM\Column(name="id_projecte", type="integer", unique=true)
     */
    private $idProjecte;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="string", length=255)
     */
    private $descripcio;

    /**
     * @var int
     *
     * @ORM\Column(name="tipus", type="integer")
     */
    private $tipus;


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
     * Set nifPersona
     *
     * @param string $nifPersona
     *
     * @return Tasca
     */
    public function setNifPersona($nifPersona)
    {
        $this->nifPersona = $nifPersona;

        return $this;
    }

    /**
     * Get nifPersona
     *
     * @return string
     */
    public function getNifPersona()
    {
        return $this->nifPersona;
    }

    /**
     * Set idProjecte
     *
     * @param integer $idProjecte
     *
     * @return Tasca
     */
    public function setIdProjecte($idProjecte)
    {
        $this->idProjecte = $idProjecte;

        return $this;
    }

    /**
     * Get idProjecte
     *
     * @return int
     */
    public function getIdProjecte()
    {
        return $this->idProjecte;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Tasca
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set tipus
     *
     * @param integer $tipus
     *
     * @return Tasca
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
}

