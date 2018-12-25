<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Entity
 * @ORM\Table (name="categories")
 */
class Categories
{
	/**
	 * @ORM\Id
	 * @ORM\Column (name="id_categories", type="integer", nullable=false, unique=true)
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	private $idCategories;

	/**
	 * @ORM\Column (name="name", type="string", nullable=false, unique=true)
	 * @var string
	 */
	private $name;

	/**
	 * @ORM\Column (name="count_articles", type="integer", nullable=true, options={"default"=0})
	 * @var integer|null
	 */
	private $countArticles;



    /**
     * @return integer
     */
    public function getIdCategories()
    {
        return $this->idCategories;
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
     * @return integer|null
     */
    public function getCountArticles()
    {
        return $this->countArticles;
    }
}