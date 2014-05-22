<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Text;

class TextManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }

    /**
     * Get all Text
     *
     * @return Text
     */
    public function findAllText()
    {
        return $this->repository->findAll();
    }

    /**
     * Get random Text
     *
     * @return Text
     */
    public function getRandomText()
    {
        $texts = $this->repository->findAll();
        shuffle($texts);
        if (!empty($texts)) {
            return $texts[0];
        } else {
            return null;
        }
        
    }

    /**
     * Get single Text by id
     *
     * @param int $id
     * @return Text
     */
    public function findText($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Text details
     *
     * @param  Text $entity
     * @return Text
     */
    public function saveText($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteText($id)
    {
        $entity = $this->findText($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Text
     *
     * @return Text
     */
    public function createText()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}