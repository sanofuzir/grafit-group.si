<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\News;

class NewsManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllNews()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single News by id
     *
     * @param int $id
     * @return News
     */
    public function findNews($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist News details
     *
     * @param  News $entity
     * @return News
     */
    public function saveNews($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteNews($id)
    {
        $entity = $this->findNews($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new News
     *
     * @return News
     */
    public function createNews()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}