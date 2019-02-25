<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_articles", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticles;

    /**
     * @var int
     *
     * @ORM\Column(name="uid_articles", type="integer", nullable=false)
     */
    private $uidArticles;

    /**
     * @var int
     *
     * @ORM\Column(name="uid_user", type="integer", nullable=false)
     */
    private $uidUser;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=false)
     */
    private $tags;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;



    /**
     * Get idArticles.
     *
     * @return int
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }

    /**
     * Set uidArticles.
     *
     * @param int $uidArticles
     *
     * @return Articles
     */
    public function setUidArticles($uidArticles)
    {
        $this->uidArticles = $uidArticles;

        return $this;
    }

    /**
     * Get uidArticles.
     *
     * @return int
     */
    public function getUidArticles()
    {
        return $this->uidArticles;
    }

    /**
     * Set uidUser.
     *
     * @param int $uidUser
     *
     * @return Articles
     */
    public function setUidUser($uidUser)
    {
        $this->uidUser = $uidUser;

        return $this;
    }

    /**
     * Get uidUser.
     *
     * @return int
     */
    public function getUidUser()
    {
        return $this->uidUser;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category.
     *
     * @param int $category
     *
     * @return Articles
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Articles
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set tags.
     *
     * @param string $tags
     *
     * @return Articles
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return Articles
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified.
     *
     * @param \DateTime $modified
     *
     * @return Articles
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified.
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }
}
