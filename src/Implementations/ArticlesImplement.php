<?php

class ArticlesImplement
{
	private $em;

	public function __construct()
	{
		$this->em = Database::getConnection();
	}

	public function AddArticle($data)
	{
    	$articleRepository = $this->em->getRepository('Articles');
        $mandatory_fields = array("title", "category", "text", "tags", "uid_user");
        $valid = true;
        $result['errors'] = array();

        foreach ($mandatory_fields as $field) {
            if (!isset($data[$field]) || $data[$field] == '') {
                array_push($result['errors'], array("message" => "Campul \"".$field."\" este obligatoriu!"));
                $valid = false;
            }
        }

        if ($valid) {
            $created = new \DateTime();
            $modified = new \DateTime();
            $article = new Articles();
            $article->setUidUser($data['uid_user']);
            $article->setTitle($data['title']);
            $article->setCategory($data['category']);
            $article->setText($data['text']);
            $article->setTags($data['tags']);
            $article->setCreated($created);
            $article->setModified($modified);
            $this->em->persist($article);
            $this->em->flush();
            $result['result'] = 'true';
        } else {
        	$result['result'] = 'false';
        }
        return $result;
	}

    public function getAllArticles()
    {
        $articleRepository = $this->em->getRepository('Articles');
        $articles = $articleRepository->findAll();
        return $articles;
    }

    public function deleteArticle($uid_article)
    {
        $articleRepository = $this->em->getRepository('Articles');
        $article = $articleRepository->findOneBy(array("idArticles" => $uid_article));
        $this->em->remove($article);
        $this->em->flush();
    }

    public function getUidUserArticle($uid_article)
    {
        $articleRepository = $this->em->getRepository('Articles');
        $articles = $articleRepository->findOneBy(array("idArticles" => $uid_article));
        if ($articles) $uid_user_article = $articles->getUidUser();
            else $uid_user_article = null;
        return $uid_user_article;
    }
}