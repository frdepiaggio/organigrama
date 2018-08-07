<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

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
}