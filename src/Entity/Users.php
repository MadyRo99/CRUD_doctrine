<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 * 
 * @ORM\Entity
 * @ORM\Table (name="users")
 */
class Users
{
	/**
	 * @ORM\Id
	 * @ORM\Column (name="id_users", type="integer", nullable=false, unique=true)
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	private $idUsers;

	/**
	 * @ORM\Column (name="uid_users", type="integer", nullable=true, unique=true)
	 * @var integer|null
	 */
	private $uidUsers;

	/**
	 * @ORM\Column (name="name", type="string", length=60, nullable=false)
	 * @var string
	 */
	private $name;

	/**
	 * @ORM\Column (name="username", type="string", length=60, nullable=false, unique=true)
	 * @var string
	 */
	private $username;

	/**
	 * @ORM\Column (name="email", type="string", length=100, nullable=false, unique=true)
	 * @var string
	 */
	private $email;

	/**
	 * @ORM\Column (name="password", type="string", length=150, nullable=false)
	 * @var string
	 */
	private $password;

	/**
	 * @ORM\Column (name="status", type="string", length=15, nullable=true, options={"comment"="0-INITIAL; 1-APPROVED"})
	 * @var string|null
	 */
	private $status = '0';

	/**
	 * @ORM\Column (name="type", type="integer", nullable=true, options={"comment"="0-USER; 1-ADMINISTRATOR"})
	 * @var integer|null
	 */
	private $type = '0';

	/**
	 * @ORM\Column (name="created", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
	 * @var \DateTime|null
	 */
	private $created = 'CURRENT_TIMESTAMP';
	
	/**
	 * @ORM\Column (name="last_login", type="datetime", nullable=true)
	 * @var \DateTime|null
	 */
	private $lastLogin;


	public function getIdUsers() {
		return $this->idUsers;
	}

	public function getUidUsers() {
		return $this->uidUsers;
	}

	public function setUidUsers($uidUsers) {
		$this->uidUsers = $uidUsers;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function getEmail() {
		return $this->name;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getCreated() {
		return $this->created;
	}

	public function setCreated($created) {
		$this->created = $created;
	}

	public function getLastLogin() {
		return $this->lastLogin;
	}

	public function setLastLogin($lastLogin) {
		$this->lastLogin = $lastLogin;
	}
}