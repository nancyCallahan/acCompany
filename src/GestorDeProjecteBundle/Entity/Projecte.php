<?php

namespace GestorDeProjecteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projecte
 *
 * @ORM\Table(name="projecte")
 * @ORM\Entity(repositoryClass="GestorDeProjecteBundle\Repository\ProjecteRepository")
 */
class Projecte
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
     * @ORM\Column(name="descrip_curta", type="string", length=255)
     */
    private $descripCurta;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip_llarga", type="string", length=255)
     */
    private $descripLlarga;

    /**
     * @var string
     *
     * @ORM\Column(name="entorn", type="string", length=255)
     */
    private $entorn;

    /**
     * @var string
     *
     * @ORM\Column(name="imatge", type="string", length=255)
     */
    private $imatge;

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
     * Set descripCurta
     *
     * @param string $descripCurta
     *
     * @return Projecte
     */
    public function setDescripCurta($descripCurta)
    {
        $this->descripCurta = $descripCurta;

        return $this;
    }

    /**
     * Get descripCurta
     *
     * @return string
     */
    public function getDescripCurta()
    {
        return $this->descripCurta;
    }

    /**
     * Set descripLlarga
     *
     * @param string $descripLlarga
     *
     * @return Projecte
     */
    public function setDescripLlarga($descripLlarga)
    {
        $this->descripLlarga = $descripLlarga;

        return $this;
    }

    /**
     * Get descripLlarga
     *
     * @return string
     */
    public function getDescripLlarga()
    {
        return $this->descripLlarga;
    }

    /**
     * Set entorn
     *
     * @param string $entorn
     *
     * @return Projecte
     */
    public function setEntorn($entorn)
    {
        $this->entorn = $entorn;

        return $this;
    }

    /**
     * Get entorn
     *
     * @return string
     */
    public function getEntorn()
    {
        return $this->entorn;
    }

    /**
     * Set imatge
     *
     * @param string $imatge
     *
     * @return Projecte
     */
    public function setImatge($imatge)
    {
        $this->imatge = $imatge;

        return $this;
    }

    /**
     * Get imatge
     *
     * @return string
     */
    public function getImatge()
    {
        return $this->imatge;
    }
}
