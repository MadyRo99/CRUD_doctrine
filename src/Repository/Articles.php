<?php
namespace CRUD_doctrine\Repository;
use Doctrine\ORM\EntityRepository;

class ArticlesRepository extends EntityRepository
{
    private $em;
    
    public function __construct(){
        $this->em = Database::getConnection();
    }
}
