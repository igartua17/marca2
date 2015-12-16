<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class comentarios
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
     * @ORM\Column(name="tituloCom", type="string", length=50)
     */
    private $tituloCom;

    /**
     * @var string
     *
     * @ORM\Column(name="descCom", type="string", length=50)
     */
    private $descCom;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaCom", type="string", length=50)
     */
    private $fechaCom;

    /**
     * @var string
     *
     * @ORM\Column(name="nickCom", type="string", length=50)
     */
    private $nickCom;


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
     * Set tituloCom
     *
     * @param string $tituloCom
     * @return comentarios
     */
    public function setTituloCom($tituloCom)
    {
        $this->tituloCom = $tituloCom;

        return $this;
    }

    /**
     * Get tituloCom
     *
     * @return string 
     */
    public function getTituloCom()
    {
        return $this->tituloCom;
    }

    /**
     * Set descCom
     *
     * @param string $descCom
     * @return comentarios
     */
    public function setDescCom($descCom)
    {
        $this->descCom = $descCom;

        return $this;
    }

    /**
     * Get descCom
     *
     * @return string 
     */
    public function getDescCom()
    {
        return $this->descCom;
    }

    /**
     * Set fechaCom
     *
     * @param string $fechaCom
     * @return comentarios
     */
    public function setFechaCom($fechaCom)
    {
        $this->fechaCom = $fechaCom;

        return $this;
    }

    /**
     * Get fechaCom
     *
     * @return string 
     */
    public function getFechaCom()
    {
        return $this->fechaCom;
    }

    /**
     * Set nickCom
     *
     * @param string $nickCom
     * @return comentarios
     */
    public function setNickCom($nickCom)
    {
        $this->nickCom = $nickCom;

        return $this;
    }

    /**
     * Get nickCom
     *
     * @return string 
     */
    public function getNickCom()
    {
        return $this->nickCom;
    }
}
