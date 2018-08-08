<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FuncionarioRepository")
 * @ORM\Table(name="funcionarios")
 * ORM\HasLifecycleCallbacks()
 */

class Funcionario
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
	 * @var string
	 *
	 * @ORM\Column(type="string", length=100)
	 */
	private $nombre;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=100)
	 */
	private $apellido;

	/**
	 * @var string
	 * 
	 * @ORM\Column(type="string", length=50)
	 */
	private $email;

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
	 * @return string
	 */
	public function getApellido() : ?string
	{
		return $this->apellido;
	}

	/**
	 * @param string $apellido
	 *
	 * @return self
	 */
	public function setApellido($apellido) : self
	{
		$this->apellido = $apellido;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail() : ?string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return self
	 */
	public function setEmail($email) : self
	{
		$this->email = $email;
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