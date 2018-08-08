<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NodoRepository")
 * @ORM\Table(name="nodos")
 * ORM\HasLifecycleCallbacks()
 */

class Nodo
{
	/**
	 * @var int
	 *
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var Padre
	 * 
	 * Muchos nodos tienen un padre de mayor (o menor) nivel.
	 *
	 * @ORM\ManyToOne(targetEntity="Nodo", inversedBy="hijos")
	 * @ORM\JoinColumn(name="padre_id", referencedColumnName="id", nullable=true)
	 */
	private $padre;

	/**
	 * @var Hijos[]|ArrayCollection
	 * 
	 * Un nodo padre puede tener uno o más hijos.
	 *
	 * @ORM\OneToMany(targetEntity="Nodo", mappedBy="padre")
	 *
	 */
	private $hijos

	/**
	 * @var int
	 * 
	 * @ORM\Column(type="integer")
	 */
	private $nivel;

	/**
	 * @var Oficina
	 *
	 * Un nodo referencia a una oficina.
	 * 
	 * @ORM\OneToOne(targetEntity="Oficina", mappedBy="nodo")
	 */
	private $oficina;

/////////---CONSTRUCTOR PARA EL ARRAY DE HIJOS---\\\\\\\\\

	public function __construct()
    {
        $this->hijos = new ArrayCollection();
    }

/////////---GETTERS y SETTERS---\\\\\\\\\

	/**
	 * @return int
	 */
	public function getId() : ?int
	{
		return $this->id;
	}

	/**
     * @return Nodo
     */
    public function getPadre() : ?Nodo
    {
        return $this->padre;
    }
    
    /**
     * @param Nodo $padre
     *
     * @return self
     */
    public function setPadre(Nodo $padre) : self
    {
        $this->padre = $padre;
        return $this;
    }

    /**
     * @return Nodo[]|ArrayCollection
     */
    public function getHijos()
    {
        return $this->hijos;
    }

    /**
     * @param Nodo $hijo
     *
     * @return self
     */
    public function addHijo(Nodo $hijo) : self
    {
        if (!$this->hijos->contains($hijo)) {
            $this->hijos->add($hijo);
        }
        return $this;
    }

    /**
     * @param Nodo $hijo
     *
     * @return self
     */
    public function removeHijo(Nodo $job) : self
    {
        $this->jobs->removeElement($job);
        return $this;
    }

    /**
	 * @return int
	 */
	public function getNivel() : ?int
	{
		return $this->nivel;
	}

	/**
	 * @param int $nivel
	 *
	 * @return self
	 */
	public function setNivel($nivel) : self
	{
		$this->nivel = $nivel;
		return $this;
	}

	/**
     * @return Oficina
     */
    public function getOficina() : ?Oficina
    {
        return $this->oficina;
    }

    /**
     * @param Oficina $oficina
     *
     * @return self
     */
    public function setOficina(Oficina $oficina) : self
    {
        $this->oficina = $oficina;
        return $this;
    }
}