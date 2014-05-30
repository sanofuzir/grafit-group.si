<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Album;

class AlbumManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllAlbums()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Album by id
     *
     * @param int $id
     * @return Album
     */
    public function findAlbum($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Album details
     *
     * @param  Album $entity
     * @return Album
     */
    public function saveAlbum($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteAlbum($id)
    {
        $entity = $this->findAlbum($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Album
     *
     * @return Album
     */
    public function createAlbum()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}