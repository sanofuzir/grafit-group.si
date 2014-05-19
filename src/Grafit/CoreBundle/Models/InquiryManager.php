<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Inquiry;

class InquiryManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllInquirys()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Inquiry by id
     *
     * @param int $id
     * @return Inquiry
     */
    public function findInquiry($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist ad details
     *
     * @param  Inquiry $entity
     * @return Inquiry
     */
    public function saveInquiry($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteInquiry($id)
    {
        $entity = $this->findInquiry($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Inquiry
     *
     * @return Inquiry
     */
    public function createInquiry()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}