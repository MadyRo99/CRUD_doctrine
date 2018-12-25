<?php
use Doctrine\ORM\EntityRepository;

class Categories extends EntityRepository
{
    private $em;
    
    public function __construct(){
        $this->em = Database::getConnection();
    }
}
