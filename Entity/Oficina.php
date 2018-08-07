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
}