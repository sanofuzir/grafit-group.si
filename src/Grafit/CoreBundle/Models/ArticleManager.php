<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Article;

class ArticleManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllArticles()
    {
        return $this->repository->findAll();
    }

    /**
     * Get Articles by category id
     *
     * @param int $id
     * @return Article
     */
    public function findArticlesByCategoryId($id)
    {
        return $this->repository->findArticlesByCategoryId($id);
    }
    
    /**
     * Get single Article by id
     *
     * @param int $id
     * @return Article
     */
    public function findArticle($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Article details
     *
     * @param  Article $entity
     * @return Article
     */
    public function saveArticle($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteArticle($id)
    {
        $entity = $this->findArticle($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Article
     *
     * @return Article
     */
    public function createArticle()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}