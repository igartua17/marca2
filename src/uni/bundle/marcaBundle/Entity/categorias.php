<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categorias
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
     * @ORM\Column(name="nombreCat", type="string", length=50)
     */
    private $nombreCat;

    /**
     * @var string
     *
     * @ORM\Column(name="desCat", type="string", length=50)
     */
    private $desCat;


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
     * Set nombreCat
     *
     * @param string $nombreCat
     * @return categorias
     */
    public function setNombreCat($nombreCat)
    {
        $this->nombreCat = $nombreCat;

        return $this;
    }

    /**
     * Get nombreCat
     *
     * @return string 
     */
    public function getNombreCat()
    {
        return $this->nombreCat;
    }

    /**
     * Set desCat
     *
     * @param string $desCat
     * @return categorias
     */
    public function setDesCat($desCat)
    {
        $this->desCat = $desCat;

        return $this;
    }

    /**
     * Get desCat
     *
     * @return string 
     */
    public function getDesCat()
    {
        return $this->desCat;
    }
    
    /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="categoria", cascade={"remove"})
*/
protected $noticiass;

public function __construct() {
$this->noticias = new ArrayCollection();
}

    /**
     * Add noticiass
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $noticiass
     * @return categorias
     */
    public function addNoticiass(\uni\bundle\marcaBundle\Entity\noticias $noticiass)
    {
        $this->noticiass[] = $noticiass;

        return $this;
    }

    /**
     * Remove noticiass
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $noticiass
     */
    public function removeNoticiass(\uni\bundle\marcaBundle\Entity\noticias $noticiass)
    {
        $this->noticiass->removeElement($noticiass);
    }

    /**
     * Get noticiass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticiass()
    {
        return $this->noticiass;
    }
}
