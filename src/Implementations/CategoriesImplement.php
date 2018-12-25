<?php

class CategoriesImplement
{
	private $em;

	public function __construct()
	{
		$this->em = Database::getConnection();
	}

	public function getAllCategories()
	{
		$categoriesRepository = $this->em->getRepository("Categories");
		$categories = $categoriesRepository->findAll();
		return $categories;
	}
}