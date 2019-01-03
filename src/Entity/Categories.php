<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categories", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategories;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="count_articles", type="integer", nullable=false)
     */
    private $countArticles = '0';



    /**
     * Get idCategories.
     *
     * @return int
     */
    public function getIdCategories()
    {
        return $this->idCategories;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Categories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set countArticles.
     *
     * @param int $countArticles
     *
     * @return Categories
     */
    public function setCountArticles($countArticles)
    {
        $this->countArticles = $countArticles;

        return $this;
    }

    /**
     * Get countArticles.
     *
     * @return int
     */
    public function getCountArticles()
    {
        return $this->countArticles;
    }
}
