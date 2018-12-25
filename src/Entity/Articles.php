<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Entity
 * @ORM\Table (name="articles")
 */
class Articles
{
	/**
	 * @ORM\Id
	 * @ORM\Column (name="id_articles", type="integer", nullable=false, unique=true)
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	private $idArticles;

	/**
	 * @ORM\Column (name="uid_articles", type="integer", nullable=true, unique=true)
	 * @var integer|null
	 */
	private $uidArticles;

	/**
	 * @ORM\Column (name="uid_user", type="integer", nullable=false)
	 * @var integer
	 */
	private $uidUser;

	/**
	 * @ORM\Column (name="title", type="string", nullable=false)
	 * @var string
	 */
	private $title;

	/**
	 * @ORM\Column (name="category", type="integer", nullable=false)
	 * @var integer
	 */
	private $category;

	/**
	 * @ORM\Column (name="text", type="text", nullable=false)
	 * @var string
	 */
	private $text;

	/**
	 * @ORM\Column (name="tags", type="string", nullable=true)
	 * @var string|null
	 */
	private $tags;

	/**
	 * @ORM\Column (name="created", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
	 * @var \DateTime|null
	 */
	private $created = 'CURRENT_TIMESTAMP';

	/**
	 * @ORM\Column (name="modified", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
	 * @var \DateTime|null
	 */
	private $modified = 'CURRENT_TIMESTAMP';



    /**
     * @return integer
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }

    /**
     * @return integer|null
     */
    public function getUidArticles()
    {
        return $this->uidArticles;
    }

    /**
     * @param integer|null $uidArticles
     *
     * @return self
     */
    public function setUidArticles($uidArticles)
    {
        $this->uidArticles = $uidArticles;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUidUser()
    {
        return $this->uidUser;
    }

    /**
     * @param integer $uidUser
     *
     * @return self
     */
    public function setUidUser($uidUser)
    {
        $this->uidUser = $uidUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param integer $category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string|null $tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

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
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime|null $modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }
}