<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OficinaRepository")
 * @ORM\Table(name="oficinas")
 * ORM\HasLifecycleCallbacks()
 */

class Oficina
{
	/**
	 * @var int
	 *
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id

	/**
	 * @var Funcionario
	 *
	 * @ORM\ManyToOne(targetEntity="Funcionario")
	 * @ORM\JoinColumn(name="func_id", referencedColumnName="id")
	 */
	private $funcionario

	/**
	 * @var Nodo
	 *
	 * @ORM\OneToOne(targetEntity="Nodo", inversedBy="oficina")
	 * @ORM\JoinColumn(name="nodo_id", referencedColumnName="id")
	 */
	private $nodo

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=150)
	 */
	private $nombre

	/**
	 * @var int|null
	 *
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $cuof

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=200)
	 */
	private $direccion

	/**
	 * @var string/null
	 *
	 * @ORM\Column(type="string", length=20, nullable=true)
	 */
	private $telefono

	/**
	 * @var string|null
	 *
	 * @ORM\Column(type="string", length=200, nullable=true)
	 */
	private $web

	/**
	 * @var string|null
	 * 
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $facebook;

	/**
	 * @var string|null
	 * 
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $instagram;

	/**
	 * @var string|null
	 * 
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $twitter;

/////////---GETTERS y SETTERS---\\\\\\\\\

	/**
	 * @return int
	 */
	public function getId() : ?int
	{
		return $this->id;
	}

	/**
     * @return Funcionario|null
     */
    public function getFuncionario() : ?Funcionario
    {
        return $this->funcionario;
    }
    
    /**
     * @param Funcionario|null $funcionario
     *
     * @return self
     */
    public function setFuncionario(Funcionario $funcionario) : self
    {
        $this->funcionario = $funcionario;
        return $this;
    }

    /**
     * @return Nodo
     */
    public function getNodo() : ?Nodo
    {
        return $this->nodo;
    }
    
    /**
     * @param Nodo $nodo
     *
     * @return self
     */
    public function setNodo(Nodo $nodo) : self
    {
        $this->nodo = $nodo;
        return $this;
    }

    /**
	 * @return string
	 */
	public function getNombre() : ?string
	{
		return $this->nombre;
	}

	/**
	 * @param string $nombre
	 *
	 * @return self
	 */
	public function setNombre($nombre) : self
	{
		$this->nombre = $nombre;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCuof() : ?int
	{
		return $this->cuof;
	}

	/**
	 * @param int $cuof
	 *
	 * @return self
	 */
	public function setCuof($cuof) : self
	{
		$this->cuof = $cuof;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDireccion() : ?string
	{
		return $this->direccion;
	}

	/**
	 * @param string $direccion
	 *
	 * @return self
	 */
	public function setDireccion($direccion) : self
	{
		$this->direccion = $direccion;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTelefono() : ?string
	{
		return $this->telefono;
	}

	/**
	 * @param string $telefono
	 *
	 * @return self
	 */
	public function setTelefono($telefono) : self
	{
		$this->telefono = $telefono;
		return $this;
	}

	/**
     * @return string|null
     */
    public function getWeb() : ?string
    {
        return $this->web;
    }

    /**
     * @param string|null $web
     *
     * @return self
     */
    public function setWeb(?string $web) : self
    {
        $this->web = $web;
        return $this;
    }

    /**
	 * @return string|null
	 */
	public function getFacebook() : ?string
	{
		return $this->facebook;
	}

	/**
	 * @param string|null $facebook
	 *
	 * @return self
	 */
	public function setFacebook($facebook) : self
	{
		$this->facebook = $facebook;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getInstagram() : ?string
	{
		return $this->instagram;
	}

	/**
	 * @param string|null $instagram
	 *
	 * @return self
	 */
	public function setInstagram($instagram) : self
	{
		$this->instagram = $instagram;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getTwitter() : ?string
	{
		return $this->twitter;
	}

	/**
	 * @param string|null $twitter
	 *
	 * @return self
	 */
	public function setTwitter($twitter) : self
	{
		$this->twitter = $twitter;
		return $this;
	}
}