<?php
//namespace users_repository\Repository;
use Doctrine\ORM\EntityRepository;

class Users extends EntityRepository
{
    private $em;
    
    public function __construct(){
        $this->em = Database::getConnection();
    }
}
