<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Storitve;

class StoritveManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllStoritve()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Storitve by id
     *
     * @param int $id
     * @return Storitve
     */
    public function findStoritve($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Storitve details
     *
     * @param  Storitve $entity
     * @return Storitve
     */
    public function saveStoritve($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteStoritve($id)
    {
        $entity = $this->findStoritve($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Storitve
     *
     * @return Storitve
     */
    public function createStoritve()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}