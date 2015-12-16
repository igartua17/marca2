<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anuncios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class anuncios
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
     * @ORM\Column(name="Nombrenot", type="string", length=50)
     */
    private $nombrenot;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text")
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="compania", type="string", length=50)
     */
    private $compania;


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
     * Set nombrenot
     *
     * @param string $nombrenot
     * @return anuncios
     */
    public function setNombrenot($nombrenot)
    {
        $this->nombrenot = $nombrenot;

        return $this;
    }

    /**
     * Get nombrenot
     *
     * @return string 
     */
    public function getNombrenot()
    {
        return $this->nombrenot;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return anuncios
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set compania
     *
     * @param string $compania
     * @return anuncios
     */
    public function setCompania($compania)
    {
        $this->compania = $compania;

        return $this;
    }

    /**
     * Get compania
     *
     * @return string 
     */
    public function getCompania()
    {
        return $this->compania;
    }
}
