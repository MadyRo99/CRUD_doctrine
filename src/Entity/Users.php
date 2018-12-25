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



    /**
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * @return integer|null
     */
    public function getUidUsers()
    {
        return $this->uidUsers;
    }

    /**
     * @param integer|null $uidUsers
     *
     * @return self
     */
    public function setUidUsers($uidUsers)
    {
        $this->uidUsers = $uidUsers;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param integer|null $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime|null $created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime|null $lastLogin
     *
     * @return self
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }
}