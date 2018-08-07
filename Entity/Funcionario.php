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
}