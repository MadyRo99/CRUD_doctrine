<?php
use Doctrine\ORM\EntityRepository;

class Articles extends EntityRepository
{
    private $em;
    
    public function __construct(){
        $this->em = Database::getConnection();
    }
}
