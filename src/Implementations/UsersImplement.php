<?php

class UsersImplement
{
	private $em;

	public function __construct()
	{
		$this->em = Database::getConnection();
	}

    public function Register ($data, $type = 0, $status = 0) 
    {
    	$userRepository = $this->em->getRepository('Users');
        $mandatory_fields = array("name", "username", "email", "password");
        $valid = true;
        $result['errors'] = array();

        if (isset($data['email'])) {
            $users = $userRepository->findBy(array("email" => $data['email']));
            if (count($users)) {
                array_push($result['errors'], array("message" => "E-mail-ul este deja înregistrat!"));
                $valid = false;
            }
        }

        if (isset($data['username'])){
            $users = $userRepository->findBy(array("username" => $data['username']));
            if (count($users)) {
                array_push($result['errors'], array("message" => "Username-ul este deja înregistrat!"));
                $valid = false;
            }
        }

        foreach ($mandatory_fields as $field) {
            if (!isset($data[$field]) || $data[$field] == '') {
                array_push($result['errors'], array("message" => "Campul \"".$field."\" este obligatoriu!"));
                $valid = false;
            }
        }

        if ($valid) {
            $created = new \DateTime();
            $user = new Users();
            $user->setName($data['name']);
            $user->setEmail($data['email']);
            $user->setUsername($data['username']);
            $user->setPassword(sha1($data['password']));
            $user->setStatus($status);
            $user->setType($type);
            $user->setCreated($created);
            $this->em->persist($user);
            $this->em->flush();
            $result['result'] = 'true';
        } else {
        	$result['result'] = 'false';
        }
        return $result;
    }

    public function Login ($data) {
    	$userRepository = $this->em->getRepository('Users');
    	$user = $userRepository->findOneBy(array('username' => $data['usem']));
    	if ($user) {
    		if ($user->getPassword() == sha1($data['password'])) {
    			$_SESSION['id'] = $user->getIdUsers();
		        $_SESSION['name'] = $user->getName();
		        $_SESSION['username'] = $user->getUsername();
		        $_SESSION['email'] = $user->getEmail();
		        $_SESSION['status'] = $user->getStatus();
		        $_SESSION['type'] = $user->getType();
		        $_SESSION['created'] = $user->getCreated();
		        $_SESSION['last_login'] = $user->getLastLogin();
		        return 2;
    		} else {
    			return 1;
    		}
    	}
    	$user = $userRepository->findOneBy(array('email' => $data['usem']));
    	if ($user) {
    		if ($user->getPassword() == sha1($data['password'])) {
    			$_SESSION['id'] = $user->getIdUsers();
		        $_SESSION['name'] = $user->getName();
		        $_SESSION['username'] = $user->getUsername();
		        $_SESSION['email'] = $user->getEmail();
		        $_SESSION['status'] = $user->getStatus();
		        $_SESSION['type'] = $user->getType();
		        $_SESSION['created'] = $user->getCreated();
		        $_SESSION['last_login'] = $user->getLastLogin();
		        return 2;
    		} else {
    			return 1;
    		}
    	}
    	return 0;
    }

}