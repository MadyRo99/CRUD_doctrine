<?php
//namespace articles_repository\Repository;
use Doctrine\ORM\EntityRepository;

class ArticlesRepository extends EntityRepository
{
    private $em;
    
    public function __construct(){
        $this->em = Database::getConnection();
    }

    public function search($search)
    {
    	$dql = 'SELECT a FROM Articles a WHERE a.tags LIKE ?1 OR a.title LIKE ?2';
    	$query = $this->em->createQuery($dql);
    	$query->setParameter(1, '%'.$search.'%');
    	$query->setParameter(2, '%'.$search.'%');
    	return $query->getArrayResult();
    }
}
