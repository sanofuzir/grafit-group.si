<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Category;

class CategoryManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllCategorys()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Category by id
     *
     * @param int $id
     * @return Category
     */
    public function findCategory($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Category details
     *
     * @param  Category $entity
     * @return Category
     */
    public function saveCategory($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteCategory($id)
    {
        $entity = $this->findCategory($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Category
     *
     * @return Category
     */
    public function createCategory()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}